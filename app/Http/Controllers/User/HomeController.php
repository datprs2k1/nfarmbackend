<?php

namespace App\Http\Controllers\User;

use App\Enums\Category\CategoryTypeEnum;
use App\Http\Controllers\Controller;
use App\Services\CategoryService\CategoryService;

class HomeController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categoryProducts = $this->categoryService->mainRepository->where('type', CategoryTypeEnum::PRODUCT)->get();

        return view('pages.home.index', compact('categoryProducts'));
    }
}
