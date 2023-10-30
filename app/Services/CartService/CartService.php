<?php

namespace App\Services\CartService;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Repositories\Cart\ICartRepository;
use App\Repositories\Price\IPriceRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use Yajra\DataTables\Facades\DataTables;

class CartService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;
    protected $priceRepository;

    function __construct(ICartRepository $entryRepository, IPriceRepository $priceRepository)
    {
        $this->mainRepository = $entryRepository;
        $this->priceRepository = $priceRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->get();

        return $this->sendSuccessResponse($entries);
    }

    function show($id)
    {
        return DbTransactions()->addCallbackJson(function () use ($id) {

            $entry = $this->mainRepository->findById($id);

            if (!$entry) {
                throw new AppServiceException("Sản phẩm không tồn tại");
            }

            return $this->sendSuccessResponse($entry);
        });
    }

    function store(ApiBaseRequest $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {
            $input = $request->fillData();

            $price = $this->priceRepository->findById($input['price_id']);

            if (!$price) {
                throw new AppServiceException("Sản phẩm không tồn tại");
            }

            $entry = $this->mainRepository->create($input);

            return $this->sendSuccessResponse($entry);
        });
    }

    function update($entryId, ApiBaseRequest $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($entryId, $request) {

            $entry = $this->mainRepository->findById($entryId);

            if (!$entry) {
                throw new AppServiceException("Sản phẩm không tồn tại");
            }

            $input = $request->fillData();

            $entry->update($input);

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
