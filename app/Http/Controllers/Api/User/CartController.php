<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Services\CartService\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function get()
    {
        return $this->cartService->get();
    }

    public function update(Request $request)
    {
        return $this->cartService->update($request);
    }

    public function destroy($id)
    {
        return $this->cartService->destroy($id);
    }
}
