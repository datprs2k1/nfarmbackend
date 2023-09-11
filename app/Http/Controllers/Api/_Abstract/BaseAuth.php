<?php

namespace App\Http\Controllers\Api\_Abstract;

use App\Http\Requests\Api\ResetPasswordRequest;
use App\Services\_Exception\AppServiceException;
use App\Services\Auth\AuthContract;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
trait BaseAuth
{
    protected AuthContract $authService;
    protected string $loginRequest;
    protected string $registerRequest;
    protected string $forgotPasswordRequest;
    protected string $resetPasswordRequest;
    public function login()
    {
        $request = resolve($this->loginRequest);

        try {
            $loginData = $this->authService->login($request->fillData());
        } catch (AppServiceException $e) {
            return response([
                'status' => 'error',
                'error_msg' => $e->getMessage()
            ], 400);
        }
        return response([
            'data' => $loginData
        ]);
    }

    public function logout()
    {
        try {
            auth()->logout();
        } catch (TokenExpiredException $e) {
            return response()->json(['token_expired'], HTTP_UNAUTHORIZED_CODE);
        }

        return response([
            'status' => 'success',
        ]);
    }

    function register() {
        $request = resolve($this->registerRequest);

        try {
            $registerData = $this->authService->register($request->fillData());
        } catch (\Exception $e) {
            return response([
                'status' => 'error',
                'error_msg' => $e->getMessage()
            ], 400);
        }
        return response([
            'data' => $registerData
        ]);
    }

    public function forgotPassword()
    {
        $request = resolve($this->forgotPasswordRequest);
        try {
            $resetPassData = $this->authService->submitForgetPasswordForm($request->fillData());
        } catch (\Exception $e) {
            return response([
                'status' => 'error',
                'error_msg' => $e->getMessage()
            ], 400);
        }
        return response([
            'data' => $resetPassData
        ]);
    }

    public function resetPassword()
    {
        $input = resolve($this->resetPasswordRequest);
        try {
            return $this->authService->resetPassword($input);
        } catch (\Exception $e) {
            return response([
                'status' => 'error',
                'error_msg' => $e->getMessage()
            ], 400);
        }
        return response([
            'status' => 'error'
        ], 400);
    }
}
