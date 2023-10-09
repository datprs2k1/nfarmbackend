<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Services\PostService\PostService;

class PostController extends Controller
{
    protected $entryService;

    public function __construct(PostService $entryService)
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

    public function store(PostStoreRequest $request)
    {
        return $this->entryService->store($request);
    }

    public function update($id, PostUpdateRequest $request)
    {
        return $this->entryService->update($id, $request);
    }

    public function destroy($id)
    {
        return $this->entryService->destroy($id);
    }
}
