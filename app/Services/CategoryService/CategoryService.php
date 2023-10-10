<?php

namespace App\Services\CategoryService;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Repositories\Category\ICategoryRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use Yajra\DataTables\Facades\DataTables;

class CategoryService extends BaseService
{
    public $mainRepository;

    public function __construct(ICategoryRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    public function get()
    {
        $entries = $this->mainRepository->orderBy('created_at', 'asc')->get();

        $entries = DataTables::of($entries)->addIndexColumn()->addColumn('actions', function ($item) {
            return '<button type="button" rel="tooltip" class="btn btn-outline-primary rounded-pill btn-sm"
            data-original-title="" title="" id="detail" data-id="'.$item->id.'">
            <i class="uil-info-circle font-20"></i>
            <div class="ripple-container"></div>
        </button>
        <button type="button" rel="tooltip" class="btn btn-outline-success rounded-pill btn-sm"
            data-original-title="" title="" id="edit" data-id="'.$item->id.'">
            <i class="uil-edit font-20"></i>
        </button>
        <button type="button" rel="tooltip" class="btn btn-outline-danger rounded-pill btn-sm"
            data-original-title="" title="" id="delete" data-id="'.$item->id.'">
            <i class="uil-trash font-20"></i>
        </button>';
        })->rawColumns(['actions'])->make();

        return $this->sendSuccessResponse($entries->original);
    }

    public function show($id)
    {
        return DbTransactions()->addCallbackJson(function () use ($id) {

            $entry = $this->mainRepository->findById($id);

            if (! $entry) {
                throw new AppServiceException('Danh mục không tồn tại');
            }

            return $this->sendSuccessResponse($entry);
        });
    }

    public function store(ApiBaseRequest $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {
            $input = $request->fillData();
            $entry = $this->mainRepository->create($input);

            return $this->sendSuccessResponse($entry);
        });
    }

    public function update($entryId, ApiBaseRequest $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($entryId, $request) {

            $entry = $this->mainRepository->findById($entryId);

            if (! $entry) {
                throw new AppServiceException('Danh mục không tồn tại');
            }

            $entry->update($request->fillData());

            return $this->sendSuccessResponse($entry);
        });
    }

    public function destroy($entryId)
    {
        return DbTransactions()->addCallbackJson(function () use ($entryId) {

            $entry = $this->mainRepository->findById($entryId);

            if (! $entry) {
                throw new AppServiceException('Danh mục không tồn tại');
            }

            $entry->delete();

            return $this->sendSuccessResponse('success');
        });
    }
}
