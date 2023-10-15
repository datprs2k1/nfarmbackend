<?php

namespace App\Services\PostService;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Repositories\Post\IPostRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use Yajra\DataTables\Facades\DataTables;

class PostService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;

    function __construct(IPostRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->get()
            ->load('category');

        $entries->map(function ($entry) {
            $entry->image = $this->getImage($entry->image, PATH_IMAGE_POST, SOURCE_IMAGE_POST);
        });

        $entries = DataTables::of($entries)->addIndexColumn()->addColumn('actions', function ($item) {
            return '<button type="button" rel="tooltip" class="btn btn-info btn-round btn-sm"
            data-original-title="" title="" id="detail" data-id="' . $item->id . '">
            <i class="material-icons text-sm">person</i>
            <div class="ripple-container"></div>
        </button>
        <button type="button" rel="tooltip" class="btn btn-success btn-round  btn-sm"
            data-original-title="" title="" id="edit" data-id="' . $item->id . '">
            <i class="material-icons text-sm">edit</i>
        </button>
        <button type="button" rel="tooltip" class="btn btn-danger btn-round  btn-sm"
            data-original-title="" title="" id="delete" data-id="' . $item->id . '">
            <i class="material-icons text-sm">close</i>
        </button>';
        })->rawColumns(['actions'])->make();

        return $this->sendSuccessResponse($entries->original);
    }

    function show($id)
    {
        return DbTransactions()->addCallbackJson(function () use ($id) {

            $entry = $this->mainRepository->findById($id);

            if (!$entry) {
                throw new AppServiceException("Bài viết không tồn tại");
            }

            $entry->image = $this->getImage($entry->image, PATH_IMAGE_POST, SOURCE_IMAGE_POST);

            return $this->sendSuccessResponse($entry);
        });
    }

    function store(ApiBaseRequest $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {
            $input = $request->fillData();

            $url = $this->saveImage($input['image'], PATH_IMAGE_POST, SOURCE_IMAGE_POST);
            $input['image'] = $url;

            $entry = $this->mainRepository->create($input);

            return $this->sendSuccessResponse($entry);
        });
    }

    function update($entryId, ApiBaseRequest $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($entryId, $request) {

            $entry = $this->mainRepository->findById($entryId);

            if (!$entry) {
                throw new AppServiceException("Bài viết không tồn tại");
            }

            $input = $request->fillData();

            if ($request->hasFile('image')) {
                $url = $this->saveImage($input['image'], PATH_IMAGE_POST, SOURCE_IMAGE_POST);
                $input['image'] = $url;
            } else {
                $input['image'] = $entry->image;
            }

            $entry->update($input);

            return $this->sendSuccessResponse($entry);
        });
    }

    function destroy($entryId)
    {
        return DbTransactions()->addCallbackJson(function () use ($entryId) {

            $entry = $this->mainRepository->findById($entryId);

            if (!$entry) {
                throw new AppServiceException("Bài viết không tồn tại");
            }

            $entry->delete();

            return $this->sendSuccessResponse('success');
        });
    }
}
