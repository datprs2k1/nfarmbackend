<?php

namespace App\Repositories\Post;

use App\Models\PostModel;
use App\Repositories\_Abstract\BaseRepository;

class PostRepository extends BaseRepository implements IPostRepository
{
    protected $model;

    public function model()
    {
        return PostModel::class;
    }
}
