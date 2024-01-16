<?php

namespace App\Repositories\UserInfo;

use App\Models\UserInfo;
use App\Repositories\_Abstract\BaseRepository;

class UserInfoRepository extends BaseRepository implements  IUserInfoRepository
{
    public function model(): string
    {
       return UserInfo::class;
    }
}
