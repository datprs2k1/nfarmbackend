<?php

namespace App\Repositories\Product;

use App\Models\ProductModel;
use App\Repositories\_Abstract\BaseRepository;

class ProductRepository extends BaseRepository implements IProductRepository
{
    protected $model;

    public function model()
    {
        return ProductModel::class;
    }
}
