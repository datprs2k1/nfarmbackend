<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Api\_Abstract\BaseAuth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ForgotPasswordRequest;
use App\Http\Requests\Api\ResetPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\AuthContract;
use App\Services\Auth\User\AuthService;

class AuthController extends Controller
{
    use BaseAuth;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
        $this->loginRequest = LoginRequest::class;
        $this->registerRequest = RegisterRequest::class;
        $this->forgotPasswordRequest = ForgotPasswordRequest::class;
        $this->resetPasswordRequest = ResetPasswordRequest::class;
    }
}
