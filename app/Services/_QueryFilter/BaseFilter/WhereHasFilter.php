<?php

namespace App\Services\_QueryFilter\BaseFilter;
use Illuminate\Database\Eloquent\Builder;
class WhereHasFilter extends BaseFilter
{
    private $callBack;
    public function __construct($field, $callBack)
    {
        parent::__construct($field);
        $this->callBack = $callBack;
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    function apply(Builder $query): Builder
    {
        return $query->whereHas($this->field, $this->callBack);
    }
}
