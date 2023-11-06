<?php

namespace App\Repositories\Order;

use App\Models\OrderModel;
use App\Repositories\_Abstract\BaseRepository;

class OrderRepository extends BaseRepository implements IOrderRepository
{
    protected $model;

    public function model()
    {
        return OrderModel::class;
    }
}
