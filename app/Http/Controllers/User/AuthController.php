<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login.index');
    }
}
