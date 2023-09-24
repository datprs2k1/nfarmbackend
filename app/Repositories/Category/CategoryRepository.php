<?php

namespace App\Repositories\Category;

use App\Models\CategoryModel;
use App\Repositories\_Abstract\BaseRepository;

class CategoryRepository extends BaseRepository implements ICategoryRepository
{
    protected $model;

    public function model()
    {
        return CategoryModel::class;
    }
}
