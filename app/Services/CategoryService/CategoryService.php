<?php

namespace App\Services\CategoryService;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Repositories\Category\ICategoryRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use Yajra\DataTables\Facades\DataTables;

class CategoryService extends BaseService
{
    protected $mainRepository;

    function __construct(ICategoryRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->get();

        $entries = DataTables::of($entries)->addIndexColumn()->addColumn('actions', function ($item) {
            return '<a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i><div class="ripple-container"></div></a>
            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>';
        })->rawColumns(['actions'])->make();

        return $this->sendSuccessResponse($entries->original);
    }

    function show($id)
    {
        return DbTransactions()->addCallbackJson(function () use ($id) {

            $entry = $this->mainRepository->findById($id);

            if (!$entry) {
                throw new AppServiceException("Danh mục không tồn tại");
            }

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
                throw new AppServiceException("Danh mục không tồn tại");
            }

            $entry->update($request->fillData());

            return $this->sendSuccessResponse($entry);
        });
    }

    function destroy($entryId)
    {
        return DbTransactions()->addCallbackJson(function () use ($entryId) {

            $entry = $this->mainRepository->findById($entryId);

            if (!$entry) {
                throw new AppServiceException("Danh mục không tồn tại");
            }

            $entry->delete();

            return $this->sendSuccessResponse('success');
        });
    }
}
