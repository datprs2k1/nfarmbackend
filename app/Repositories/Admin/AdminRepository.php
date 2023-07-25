<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Repositories\_Abstract\BaseRepository;

class AdminRepository extends BaseRepository implements  IAdminRepository
{
    public function model(): string
    {
       return Admin::class;
    }
}
