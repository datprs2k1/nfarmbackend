<?php

namespace App\Repositories\Cart;

use App\Models\CartModel;
use App\Repositories\_Abstract\BaseRepository;

class CartRepository extends BaseRepository implements ICartRepository
{
    protected $model;

    public function model()
    {
        return CartModel::class;
    }
}
