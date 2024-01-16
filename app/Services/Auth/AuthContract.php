<?php

namespace App\Services\Auth;

interface AuthContract
{
    public function login(array $attempt);
    public function register(array $registerData);
    public function submitForgetPasswordForm(array $resetData);
    public function resetPassword(array $input);
}
