<?php

namespace App\Services\_QueryFilter\BaseFilter;
use Illuminate\Database\Eloquent\Builder;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class WhereLikeFilter extends BaseFilter
{


    /**
     * @param Builder $query
     * @return Builder
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function apply(Builder $query): Builder
    {
        return $query->where($this->field, "like", "%".request()->get($this->field). "%");
    }
}
