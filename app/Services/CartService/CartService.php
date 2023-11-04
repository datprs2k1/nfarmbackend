<?php

namespace App\Services\CartService;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Repositories\Cart\ICartRepository;
use App\Repositories\Price\IPriceRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CartService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;
    function __construct(ICartRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->with(['price' => ['product']])->where('user_id', auth()->user()->id)->get();
        $entries->each(function ($entry) {
            $entry->total = number_format((double)$entry->price->price * $entry->quantity, 0, ',', '.') . ' VNĐ';
            $entry->price->price = number_format((double)$entry->price->price, 0, ',', '.') . ' VNĐ';
        });

        return $this->sendSuccessResponse($entries);
    }



    function update(Request $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {

            $priceId = $request->get('price_id');
            $quantity = $request->get('quantity');

            $entry = $this->mainRepository->getModel()->firstOrCreate(
                [
                    'price_id' => $priceId,
                    'user_id' => auth()->user()->id
                ],
                [
                    'quantity' => 0,
                ]
            );

            $entry->update(
                [
                    'quantity' => $quantity ? $quantity : $quantity + 1,
                ]
            );

            return $this->sendSuccessResponse($entry);
        });
    }

    function destroy($entryId)
    {
        return DbTransactions()->addCallbackJson(function () use ($entryId) {

            $entry = $this->mainRepository->findById($entryId);

            if (!$entry) {
                throw new AppServiceException("Sản phẩm không tồn tại");
            }

            $entry->delete();

            return $this->sendSuccessResponse('success');
        });
    }
}
