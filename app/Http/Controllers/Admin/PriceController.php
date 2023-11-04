<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Category\CategoryTypeEnum;
use App\Enums\Price\PriceStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\PriceModel;
use App\Models\ProductModel;
use App\Services\CategoryService\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PriceController extends Controller
{
    protected $title;
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {

        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $title = "AAAAAAAAAAAA";
        $status = PriceStatusEnum::getStatus();
        $products = ProductModel::get();
        return view('admin.pages.price.index', compact('title', 'status', 'products'));
    }
}
