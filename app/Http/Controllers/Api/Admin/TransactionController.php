<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Services\TransactionService\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $TransactionService;

    public function __construct(TransactionService $TransactionService)
    {
        $this->TransactionService = $TransactionService;
    }

    public function get()
    {
        return $this->TransactionService->get();
    }
}
