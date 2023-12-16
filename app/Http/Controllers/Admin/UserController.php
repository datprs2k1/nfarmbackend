<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Category\CategoryTypeEnum;
use App\Enums\User\UserStatusEnum;
use App\Http\Controllers\Controller;
use App\Services\CategoryService\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
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

        return view('admin.pages.user.index', compact('title'));
    }
}
