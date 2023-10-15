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

    public function detail($id)
    {
        $product = $this->productService->detail($id);

        return view('pages.product.detail', compact('product'));
    }
}
