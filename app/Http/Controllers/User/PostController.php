<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PostModel;
use App\Services\_Trait\SaveFileTrait;
use App\Services\PostService\PostService;
use App\Services\ProductService\ProductService;

class PostController extends Controller
{
    use SaveFileTrait;

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function show($slug)
    {

        $post = PostModel::findBySlug($slug);

        if(!$post) {
            abort(404);
        }

        $post = $post->load('category');

            $post->image = $this->getImage($post->image, PATH_IMAGE_POST, SOURCE_IMAGE_POST);

        return view('pages.post.index', compact('post'));
    }
}
