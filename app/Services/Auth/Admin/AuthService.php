<?php

namespace App\Services\Auth\Admin;

use App\Services\_Exception\AppServiceException;
use App\Services\Auth\BaseAuth;
use Illuminate\Http\JsonResponse;

class AuthService extends BaseAuth
{
    protected string $guard = GUARD_ADMIN_API;
}
