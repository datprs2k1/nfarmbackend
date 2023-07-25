<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\_Abstract\BaseAuth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Auth\AuthContract;

class AuthController extends Controller
{
    use BaseAuth;

    public function __construct(AuthContract $authService)
    {
        $this->authService = $authService;
        $this->loginRequest = LoginRequest::class;
    }
}
