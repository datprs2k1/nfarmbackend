<?php

namespace App\Http\Controllers\User;

use App\Enums\Post\PostStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Services\_Trait\SaveFileTrait;
use App\Services\CategoryService\CategoryService;
use App\Services\ProductService\ProductService;

class CategoryController extends Controller
{
    use SaveFileTrait;

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function show($slug)
    {

        $category = CategoryModel::findBySlug($slug);

        if(!$category) {
            abort(404);
        }

        $posts = PostModel::where('category_id', $category->id)->where('status', PostStatusEnum::ACTIVE)->orderBy('created_at', 'desc')->paginate(9);

        $posts->map(function ($entry) {
            $entry->image = $this->getImage($entry->image, PATH_IMAGE_POST, SOURCE_IMAGE_POST);
        });

        return view('pages.category.detail', compact('category', 'posts'));
    }
}
