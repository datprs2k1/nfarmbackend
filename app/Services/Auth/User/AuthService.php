<?php

namespace App\Services\Auth\User;

use App\Models\UserModel;
use App\Repositories\Admin\UserRepository;
use App\Services\_Exception\AppServiceException;
use App\Services\Auth\BaseAuth;
use Illuminate\Http\JsonResponse;

class AuthService extends BaseAuth
{
    protected string $guard = GUARD_ADMIN_API;

    public function getGuard()
    {
        return $this->guard;
    }

    public function setGuard($guard)
    {
        $this->guard = $guard;
    }
}
