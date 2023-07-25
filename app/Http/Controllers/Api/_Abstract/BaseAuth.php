<?php

namespace App\Http\Controllers\Api\_Abstract;
use App\Services\_Exception\AppServiceException;
use App\Services\Auth\AuthContract;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
trait BaseAuth
{
    protected AuthContract $authService;
    protected string $loginRequest;
    protected string $registerRequest;
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
            auth($this->authService->guard)->logout();
        } catch (TokenExpiredException $e) {
            return response()->json(['token_expired'], HTTP_UNAUTHORIZED_CODE);
        }

        return response([
            'status' => 'success',
        ]);
    }
}
