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
        $route = Route::getCurrentRoute()->action['prefix'];
        $this->title = collect(explode('/', $route))->map(function ($item) {
            return ucfirst($item);
        })->implode('/');
    }

    public function index()
    {
        $title = $this->title;
        $types = CategoryTypeEnum::getTypes();
        $status = CategoryStatusEnum::getStatus();
        return view('admin.pages.category.index', compact('title', 'types', 'status'));
    }
}
