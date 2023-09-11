<?php

namespace App\Models;

use App\Models\_Abstracts\BaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PasswordResetModel extends Model
{
    use SoftDeletes;

    public $table = 'password_resets';

    public $fillable = ["email","token"];

}
