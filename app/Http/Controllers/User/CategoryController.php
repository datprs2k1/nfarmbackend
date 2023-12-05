<?php

namespace App\Http\Controllers\User;

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

        $category = $category->load('posts');

        $category->posts->map(function ($entry) {
            $entry->image = $this->getImage($entry->image, PATH_IMAGE_POST, SOURCE_IMAGE_POST);
        });

        return view('pages.category.detail', compact('category'));
    }
}
