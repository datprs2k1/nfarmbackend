<?php

namespace App\Repositories\_Abstract;

use App\Services\_QueryFilter\Concerns\_FilterCriteria;
use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Eloquent\BaseRepository as BRepository;

/**
 * Class BaseRepository
 *
 * @package App\Entities\Admin\Repositories
 */
abstract class BaseRepository extends BRepository
{

    use _FilterCriteria;

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

    public function findById($id)
    {
        return $this->findWhere(['id' => $id])->first();
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }
}
