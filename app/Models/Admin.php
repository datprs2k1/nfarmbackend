<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\_Abstract\AuthModel;
class Admin extends AuthModel
{
    protected $table = "admins";
}
