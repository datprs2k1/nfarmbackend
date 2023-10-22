<?php

namespace App\Services\PriceService;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Repositories\Price\IPriceRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class PriceService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;

    function __construct(IPriceRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->get()
            ->load('product');

        $entries = DataTables::of($entries)->addIndexColumn()->addColumn('actions', function ($item) {
            return '<button type="button" rel="tooltip" class="btn btn-outline-primary rounded-pill btn-sm"
                data-original-title="" title="" id="show" data-id="' . $item->id . '">
                <i class="uil-info-circle font-20"></i>
                <div class="ripple-container"></div>
            </button>
            <button type="button" rel="tooltip" class="btn btn-outline-success rounded-pill btn-sm"
                data-original-title="" title="" id="edit" data-id="' . $item->id . '">
                <i class="uil-edit font-20"></i>
            </button>
            <button type="button" rel="tooltip" class="btn btn-outline-danger rounded-pill btn-sm"
                data-original-title="" title="" id="delete" data-id="' . $item->id . '">
                <i class="uil-trash font-20"></i>
            </button>';
        })->rawColumns(['actions'])->make();

        return $this->sendSuccessResponse($entries->original);
    }

    function show($id)
    {
        return DbTransactions()->addCallbackJson(function () use ($id) {

            $entry = $this->mainRepository->findById($id);

            if (!$entry) {
                throw new AppServiceException("Sản phẩm không tồn tại");
            }

            $entry->image = $this->getImages($entry->image, PATH_IMAGE_PRODUCT, SOURCE_IMAGE_PRODUCT);

            return $this->sendSuccessResponse($entry);
        });
    }

    function store(ApiBaseRequest $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {
            $input = $request->fillData();

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
