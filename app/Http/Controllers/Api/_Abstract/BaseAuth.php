<?php

namespace App\Http\Controllers\Api\_Abstract;

use App\Enums\User\StatusEnum;
use App\Enums\User\UserStatusEnum;
use App\Enums\User\VerifyEnum;
use App\Http\Requests\Api\ResetPasswordRequest;
use App\Services\_Exception\AppServiceException;
use App\Services\Auth\AuthContract;
use App\Services\MailService\MailService;
use App\Transformers\UserTransformer;
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
    protected string $changePasswordRequest;
    public function login()
    {
        $request = resolve($this->loginRequest);

        return DbTransactions()->addCallbackJson(function () use ($request) {
            $loginData = $this->authService->login($request->fillData());

            $loginData['user'] = fractal($loginData['user'], new UserTransformer())->parseExcludes(['avatar']);

            return $loginData;
        });
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

        return DbTransactions()->addCallbackJson(function () use ($request) {
            $registerData = $this->authService->register($request->fillData());

            return fractal($registerData, new UserTransformer());
        });
    }

    public function forgotPassword()
    {
        $request = resolve($this->forgotPasswordRequest);
        $resetPassData = $this->authService->submitForgetPasswordForm($request->fillData());

        return $resetPassData;
    }

    public function resetPassword()
    {
        $input = resolve($this->resetPasswordRequest);
        return $this->authService->resetPassword($input);
    }

    public function changePassword()
    {
        $input = resolve($this->changePasswordRequest);
        return $this->authService->changePassword($input);
    }
}
