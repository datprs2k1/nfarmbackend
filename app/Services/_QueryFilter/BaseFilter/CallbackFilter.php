<?php

namespace App\Services\_QueryFilter\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class CallbackFilter extends BaseFilter
{
    /**
     * @param Builder $query
     * @return Builder
     */
    function apply(Builder $query): Builder
    {
        return $query->where($this->field);
    }
}
