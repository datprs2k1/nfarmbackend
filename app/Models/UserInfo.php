<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'ward',
        'district',
        'province',
        'identity_number',
        'identity_front',
        'identity_back',
        'bank_name',
        'bank_branch',
        'account_name',
        'account_number',
        'user_id',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
