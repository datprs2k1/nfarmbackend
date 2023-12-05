<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Services\OrderService\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $OrderService;

    public function __construct(OrderService $OrderService)
    {
        $this->OrderService = $OrderService;
    }

    public function get()
    {
        return $this->OrderService->get();
    }
}
