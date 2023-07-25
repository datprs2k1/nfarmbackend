<?php

namespace App\Repositories\_Abstract;

use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Eloquent\BaseRepository as BRepository;

/**
 * Class BaseRepository
 *
 * @package App\Entities\Admin\Repositories
 */
abstract class BaseRepository extends BRepository
{
    protected $filters = [];
    public function getSelect()
    {
        return $this->select('id', 'name')->orderBy('id', 'desc')->get();
    }


    /**
     * @return Builder
     */
    public function getQuery(): Builder
    {
        return $this->getModel()->newQuery();
    }
}
