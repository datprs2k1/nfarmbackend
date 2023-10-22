<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\ProductService\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function detail($slug)
    {
        $product = $this->productService->detail($slug);

        return view('pages.product.detail', compact('product'));
    }
}
