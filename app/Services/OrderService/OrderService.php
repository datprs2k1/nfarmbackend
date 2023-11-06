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
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;
    protected $cartRepository;
    function __construct(IOrderRepository $entryRepository, ICartRepository $cartRepository)
    {
        $this->mainRepository = $entryRepository;
        $this->cartRepository = $cartRepository;
    }



    function create(Request $request)
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

            $entry = $this->mainRepository->create($data);

            $cart->each(function ($item) use ($entry) {
                $entry->orderDetails()->create([
                    'price_id' => $item->price_id,
                    'quantity' => $item->quantity,
                    'total' => $item->total,
                    'user_id' => auth()->user()->id
                ]);
            });

            CartModel::destroy($cart->pluck('id'));

            return $this->sendSuccessResponse($entry);
        });
    }
}
