<?php

namespace App\Services\Auth;

use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;

abstract class BaseAuth extends BaseService implements AuthContract
{
    protected string $guard;

    /**
     * @throws AppServiceException
     */
    public function login(array $attempt)
    {
        if (!$token = auth($this->guard)->attempt($attempt)) {
            throw new AppServiceException(__("auth.failed"));
        }
        $userData = auth($this->guard)->user();
        return [
            'user' => $userData,
            'token' => $token,
        ];
    }
}
