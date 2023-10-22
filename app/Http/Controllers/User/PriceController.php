<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\PriceService\PriceService;
use App\Services\ProductService\ProductService;

class PriceController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function show($slug)
    {
        $prices = $this->productService->prices($slug);

        return view('pages.price.detail', compact('prices'));
    }
}
