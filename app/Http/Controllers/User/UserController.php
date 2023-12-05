<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;

class UserController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
    return view('pages.account.index');
    }
    public function recovery()
    {
    return view('pages.forgotpassword.index');
    }
}
