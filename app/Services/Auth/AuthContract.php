<?php

namespace App\Services\Auth;

interface AuthContract
{
    public function login(array $attempt);
}
