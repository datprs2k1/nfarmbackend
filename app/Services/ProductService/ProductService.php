<?php

namespace App\Services\ProductService;

use App\Enums\Price\PriceStatusEnum;
use App\Enums\Product\ProductStatusEnum;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\ProductModel;
use App\Repositories\Product\IProductRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;

    function __construct(IProductRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->get()
            ->load('category');

        $entries->map(function ($entry) {
            $entry->image = $this->getImages($entry->image, PATH_IMAGE_PRODUCT, SOURCE_IMAGE_PRODUCT);
        });

        $entries = DataTables::of($entries)->addIndexColumn()
        ->addColumn('statusText', function($item) {
            $html = $item->status == 1 ? "<h4><span class='badge bg-success'>$item->statusText</span></h4>" : "<h4><span class='badge bg-danger'>$item->statusText</span></h4>";
            return $html;
        })
        ->addColumn('actions', function ($item) {
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
        })->rawColumns(['actions', 'statusText'])->make();

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

            $url = $this->saveMultiImages($request->file('image'), PATH_IMAGE_PRODUCT, SOURCE_IMAGE_PRODUCT);
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
                throw new AppServiceException("Sản phẩm không tồn tại");
            }

            $input = $request->fillData();

            if ($request->hasFile('image')) {
                $url = $this->saveMultiImages($input['image'], PATH_IMAGE_PRODUCT, SOURCE_IMAGE_PRODUCT);
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
                throw new AppServiceException("Sản phẩm không tồn tại");
            }

            $entry->delete();

            return $this->sendSuccessResponse('success');
        });
    }

    function getDetail($detail)
    {
        $detail = Str::replace('<ul>', '', $detail);
        $detail = Str::replace('</ul>', '', $detail);
        $detail = Str::replace('<li>', '', $detail);
        $detail = Str::replace('</li>', '||', $detail);

        $details = Str::of($detail)->explode("||");

        $details = collect($details->filter()->all());

        return $details;
    }

    function getFuture($future)
    {
        $future = Str::replace('<h3>', '', $future);
        $future = Str::replace('</h3>', '||', $future);
        $future = Str::replace('<p>', '', $future);
        $future = Str::replace('</p>', '|||', $future);

        $futures = Str::of($future)->explode("|||");

        $futures = collect($futures->filter()->all());

        $futures = $futures->map(function ($future) {
            $future = Str::of($future)->explode("||");
            return collect((object) [
                'title' => $future[0],
                'content' => $future[1]
            ]);
        });

        $futures = $futures->chunk(2);

        return $futures;
    }

    function detail($slug)
    {
        $entry = $this->mainRepository->getModel()->findBySlug($slug)->load('prices');

        if (!$entry) {
            throw new AppServiceException("Sản phẩm không tồn tại");
        }

        $entry->image = $this->getImages($entry->image, PATH_IMAGE_PRODUCT, SOURCE_IMAGE_PRODUCT);

        $entry->detail = $this->getDetail($entry->detail);
        $entry->future = $this->getFuture($entry->future);

        return $entry;
    }

    function prices($slug)
    {
        $entry = ProductModel::findBySlug($slug)->load('prices');

        if ($entry->prices->count() < 1) {
            abort(404);
        }

        $prices = $entry->prices->where('status', PriceStatusEnum::ACTIVE);

        $prices->each(function ($price) {
            $price->detail = $this->getPriceDetail($price->detail);
        });

        $prices = $prices->chunk(3);

        return $prices;
    }

    function getPriceDetail($detail)
    {
        $detail = Str::replace('<ul>', '', $detail);
        $detail = Str::replace('</ul>', '', $detail);
        $detail = Str::replace('<li>', '', $detail);
        $detail = Str::replace('</li>', '||', $detail);

        $details = Str::of($detail)->explode("||");

        $details = collect($details->filter()->all());

        return $details;
    }
}
