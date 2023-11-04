<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Category\CategoryTypeEnum;
use App\Enums\Product\ProductStatusEnum;
use App\Http\Controllers\Controller;
use App\Services\CategoryService\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
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
        $status = ProductStatusEnum::getStatus();
        $categories = $this->categoryService->mainRepository->where('type', CategoryTypeEnum::PRODUCT)->get();
        return view('admin.pages.product.index', compact('title', 'status', 'categories'));
    }
}
