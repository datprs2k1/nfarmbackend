<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Category\CategoryTypeEnum;
use App\Enums\Order\OrderStatusEnum;
use App\Http\Controllers\Controller;
use App\Services\CategoryService\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class OrderController extends Controller
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

        return view('admin.pages.order.index', compact('title'));
    }
}
