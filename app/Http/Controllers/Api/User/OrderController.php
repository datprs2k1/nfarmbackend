<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Services\OrderService\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $OrderService;

    public function __construct(OrderService $OrderService)
    {
        $this->OrderService = $OrderService;
    }

    public function create(OrderStoreRequest $request)
    {
        $data = $request->all();
        return $this->OrderService->create($data);
    }
}
