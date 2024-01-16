<?php

namespace App\Repositories\_Abstract;

use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Contracts\RepositoryInterface;

interface BaseRepositoryInterface extends RepositoryInterface
{
    public function getQuery(): Builder;
    public function model();

    public function findById($id);


    function setFilters(array $filters);

    function filterCriteria(Builder $builder);

    function filterWithPagination(Builder $builder);
}
