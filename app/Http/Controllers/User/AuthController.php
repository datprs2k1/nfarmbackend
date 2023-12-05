<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login.index');
    }

    public function register()
    {
        return view('pages.register.index');
    }

    public function logout() {
        Auth::logout();
        return redirect()->back();
    }
}

