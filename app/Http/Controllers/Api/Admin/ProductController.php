<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Services\ProductService\ProductService;

class ProductController extends Controller
{
    protected $entryService;

    public function __construct(ProductService $entryService)
    {
        $this->entryService = $entryService;
    }

    public function get()
    {
        return $this->entryService->get();
    }

    public function show($id)
    {
        return $this->entryService->show($id);
    }

    public function store(ProductStoreRequest $request)
    {
        return $this->entryService->store($request);
    }

    public function update($id, ProductUpdateRequest $request)
    {
        return $this->entryService->update($id, $request);
    }

    public function destroy($id)
    {
        return $this->entryService->destroy($id);
    }
}
