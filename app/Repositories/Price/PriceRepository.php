<?php

namespace App\Repositories\Price;

use App\Models\PriceModel;
use App\Repositories\_Abstract\BaseRepository;

class PriceRepository extends BaseRepository implements IPriceRepository
{
    protected $model;

    public function model()
    {
        return PriceModel::class;
    }
}
