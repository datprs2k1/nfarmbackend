<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Category\CategoryTypeEnum;
use App\Enums\Post\PostStatusEnum;
use App\Http\Controllers\Controller;
use App\Services\CategoryService\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PostController extends Controller
{
    protected $title;
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $route = Route::getCurrentRoute()->action['prefix'];
        $this->title = collect(explode('/', $route))->map(function ($item) {
            return ucfirst($item);
        })->implode('/');

        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $title = $this->title;
        $status = PostStatusEnum::getStatus();
        $categories = $this->categoryService->mainRepository->where('type', CategoryTypeEnum::getValue('POST'))->get();
        return view('admin.pages.post.index', compact('title', 'status', 'categories'));
    }
}
