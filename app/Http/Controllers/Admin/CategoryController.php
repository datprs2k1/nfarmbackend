<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Category\CategoryStatusEnum;
use App\Enums\Category\CategoryTypeEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CategoryController extends Controller
{
    protected $title;
    public function __construct()
    {
    }

    public function index()
    {
        $title = "AAA";
        $types = CategoryTypeEnum::getTypes();
        $status = CategoryStatusEnum::getStatus();
        return view('admin.pages.category.index', compact('title', 'types', 'status'));
    }
}
