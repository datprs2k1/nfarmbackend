<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Services\CategoryService\CategoryService;

class CategoryController extends Controller
{
    protected $entryService;

    public function __construct(CategoryService $entryService)
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

    public function store(CategoryStoreRequest $request)
    {
        return $this->entryService->store($request);
    }

    public function update($id, CategoryUpdateRequest $request)
    {
        return $this->entryService->update($id, $request);
    }

    public function destroy($id)
    {
        return $this->entryService->destroy($id);
    }
}
