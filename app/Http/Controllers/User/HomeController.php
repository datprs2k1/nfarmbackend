<?php

namespace App\Http\Controllers\User;

use App\Enums\Category\CategoryStatusEnum;
use App\Enums\Category\CategoryTypeEnum;
use App\Enums\Post\PostStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\PostModel;
use App\Services\_Trait\SaveFileTrait;
use App\Services\CategoryService\CategoryService;

class HomeController extends Controller
{
    use SaveFileTrait;
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categoryProducts = $this->categoryService->mainRepository->where('type', CategoryTypeEnum::PRODUCT)->where('status',CategoryStatusEnum::ACTIVE)->get();

        $posts = PostModel::with('category')->where('status', PostStatusEnum::ACTIVE)->orderBy('created_at', 'DESC')->limit(9)->get();

        $posts->map(function ($entry) {
            $entry->image = $this->getImage($entry->image, PATH_IMAGE_POST, SOURCE_IMAGE_POST);
        });

        return view('pages.home.index', compact('categoryProducts', 'posts'));
    }
}
