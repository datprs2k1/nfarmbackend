<?php

namespace App\View\Components;

use App\Enums\Category\CategoryTypeEnum;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $category = CategoryModel::with('products')->get();

        $products = $category->where('type', CategoryTypeEnum::PRODUCT);

        $prices = $products->filter(function ($product) {
            return $product->prices && count($product->prices) > 0;
        });

        $posts = $category->where('type', CategoryTypeEnum::POST);

        $posts = $posts->chunk(4);

        return view('components.header', compact('products', 'prices', 'posts'));
    }
}
