<?php

namespace App\Services\_QueryFilter\BaseFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

abstract class BaseFilter
{
    protected $field;
    public function __construct($field)
    {
        $this->field = $field;
    }

    public function handle(Builder $query, Closure $next)
    {
        if ($this->field instanceof Closure) {
            $this->apply($query);
        } else {
            if (request()->has($this->field)) {
                $query = $this->apply($query);
            }

        }
        return $next($query);
    }

    abstract function apply(Builder $query);
}
