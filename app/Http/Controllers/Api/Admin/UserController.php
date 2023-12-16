<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Services\UserService\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $UserService;

    public function __construct(UserService $UserService)
    {
        $this->UserService = $UserService;
    }

    public function get()
    {
        return $this->UserService->get();
    }
}
