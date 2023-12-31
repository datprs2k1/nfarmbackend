<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class UserModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        "name",
        "email",
        "coin",
        "phone",
        "role_id",
        "status",
        "password",
        "singature",
        "avatar",
        "allow_new_via_email",
        "dob",
        "gender",
        "website",
        "occupation",
        "show_dob",
        "enable_2step_verification",
        "exp",
        "ref_code",
        "parent_id",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const STATUS_UNACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCK = 2;

    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;

    /**
     * @return string
     */
    public function getTableName(): string
    {
        return (new static)->getTable();
    }
}
