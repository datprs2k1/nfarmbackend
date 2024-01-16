<?php

namespace App\Repositories\VerifyCode;

use App\Models\VerifyCode;
use App\Repositories\_Abstract\BaseRepository;

class VerifyCodeRepository extends BaseRepository implements  IVerifyCodeRepository
{
    public function model(): string
    {
       return VerifyCode::class;
    }
}
