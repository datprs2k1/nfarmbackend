<?php

namespace App\Repositories\PasswordReset;

use App\Models\PasswordResetModel;
use App\Repositories\_Abstract\BaseRepository;

class PasswordResetRepo extends BaseRepository implements IPasswordResetRepo
{
    protected $model;

    public function model()
    {
        return PasswordResetModel::class;
    }
}
