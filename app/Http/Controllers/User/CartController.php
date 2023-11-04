<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Services\CartService\CartService;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function get()
    {
        return view('pages.cart.index');
    }

    public function update(ApiBaseRequest $request)
    {
        return $this->cartService->update($request);
    }

    public function destroy($id)
    {
        return $this->cartService->destroy($id);
    }
}
