<?php

namespace App\Repositories\User;

use App\Models\Admin;
use App\Models\UserModel;
use App\Repositories\_Abstract\BaseRepository;

class UserRepository extends BaseRepository implements  IUserRepository
{
    public function model(): string
    {
       return UserModel::class;
    }
}
