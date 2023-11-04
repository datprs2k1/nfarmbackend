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
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $title = "AAAAAAAA";
        $status = PostStatusEnum::getStatus();
        $categories = $this->categoryService->mainRepository->where('type', CategoryTypeEnum::getValue('POST'))->get();
        return view('admin.pages.post.index', compact('title', 'status', 'categories'));
    }
}
