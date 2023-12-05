<?php

namespace App\Services\OrderService;

use App\Enums\Order\OrderStatusEnum;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\CartModel;
use App\Repositories\Cart\ICartRepository;
use App\Repositories\Order\IOrderRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use App\Services\MailService\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OrderService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;
    protected $cartRepository;
    protected $mailService;
    function __construct(IOrderRepository $entryRepository, ICartRepository $cartRepository, MailService $mailService)
    {
        $this->mainRepository = $entryRepository;
        $this->cartRepository = $cartRepository;
        $this->mailService = $mailService;
    }

    function get()
    {
        $entries = $this->mainRepository->get();

        $entries->each(function($entry) {
            $entry->statusText = OrderStatusEnum::getDescription((int) $entry->status);
        });

        $entries = DataTables::of($entries)->addIndexColumn()->addColumn('actions', function ($item) {
            return '<button type="button" rel="tooltip" class="btn btn-outline-primary rounded-pill btn-sm"
            data-original-title="" title="" id="show" data-id="' . $item->id . '">
            <i class="uil-info-circle font-20"></i>
            <div class="ripple-container"></div>
        </button>';
        })->rawColumns(['actions'])->make();

        return $this->sendSuccessResponse($entries->original);
    }

    function create($request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {

            $data = $request->all();

            $cart = $this->cartRepository->with('price')->where('user_id', auth()->user()->id)->get();

            $cart->each(function ($item) {
                $item->total = $item->quantity * $item->price->price;
            });

            $total = $cart->sum('total');

            $data['total'] = $total;
            $data['status'] = OrderStatusEnum::PENDING;
            $data['user_id'] = auth()->user()->id;
            $data['email'] = auth()->user()->email;
            $data['phone'] = auth()->user()->phone;

            $entry = $this->mainRepository->create($data);

            $cart->each(function ($item) use ($entry) {
                $entry->orderDetails()->create([
                    'price_id' => $item->price_id,
                    'quantity' => $item->quantity,
                    'total' => $item->total,
                    'user_id' => auth()->user()->id
                ]);
            });

            $this->mailService->sendOrder(auth()->user()->email, $entry);

            CartModel::destroy($cart->pluck('id'));

            return $this->sendSuccessResponse($entry);
        });
    }
}
