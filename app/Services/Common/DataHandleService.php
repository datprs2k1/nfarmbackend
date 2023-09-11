<?php

namespace App\Services\Common;

use App\Repositories\_Abstract\BaseRepositoryInterface;
use App\Services\_Abstract\BaseService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class DataHandleService extends BaseService
{
    private $repository;

    public $collection;

    public static function initFromRepository(BaseRepositoryInterface $repository)
    {
        $obj = new self();
        $obj->repository = $repository;
        $obj->collection = $repository->getModel()->select();
        return $obj;
    }

    public function initFromCollection(?Collection $collection)
    {
        $this->collection = $collection;
        return $this;
    }

    public function search($text = null)
    {
        if (empty($text)) {
            $text = request()->get('search');
        }
        if (empty($text)) {
            return $this;
        }
        $searchFields = $this->repository->getModel()->getSearchField();
        if (!empty($searchFields)) {
            $this->collection = $this->collection->where(function ($sql) use ($searchFields, $text) {
                foreach ($searchFields as $searchField) {
                    $sql->orWhere($searchField, 'LIKE',  "%".$this->escapeLike($text)."%");
                }
            });
        }
        return $this;
    }

    public function sort($sortBy = null, $sortType = null)
    {
        if (empty($sortBy)) {
            $sortBy = request()->get('sortBy');
        }
        if (empty($sortType)) {
            $sortType = request()->get('sortType') ?? 'asc';
        }
        if (empty($sortBy)) {
            $this->collection = $this->collection->orderBy('id', 'desc');
            return $this;
        }
        $this->collection = $this->collection->orderBy($sortBy, $sortType);
        return $this;
    }

    public function paginate($page = 1, $perPage = 10): LengthAwarePaginator
    {
        $page = request()->get('page') ?? $page;
        $perPage = request()->get('perPage') ?? $perPage;
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        return $this->collection->paginate($perPage);
    }

    public function filters($filters = [])
    {
        if (empty($filters)) {
            $searchFields = $this->repository->getModel()->getFilterFields();
            $tableName = $this->repository->getModel()->getTableName();
            $filters = request()->get('filters') ?? [];
            foreach ($filters as $field => $filterData) {
                if (in_array($field, $searchFields)) {
                    foreach ($filterData as $type => $val) {
                        $val = trim($val);
                        if ($type === 'equal') {
                            $this->collection = $this->collection->where($tableName.'.'.$field, $val);
                        } else if ($type === 'greater_or_equal') {
                            $this->collection = $this->collection->where($tableName. '.'.$field, '>=', $val);
                        } else if ($type === 'less_or_equal') {
                            $this->collection = $this->collection->where($tableName.'.'.$field, '<=', $val);
                        } elseif ($type === 'like') {
                            $this->collection = $this->collection->where($tableName.'.'.$field, 'LIKE', "%".$this->escapeLike($val)."%");
                        } elseif ($type === 'not_equal') {
                            $this->collection = $this->collection->where($tableName.'.'.$field, '!=', $val);
                        }
                    }
                }
            }
        }
        return $this;
    }

    function escapeLike($string)
    {
        $search = array('%', '_', '*');
        $replace   = array('\%', '\_', '\*');
        return str_replace($search, $replace, $string);
    }

    public function additionQuery(\Closure $closure = null)
    {
        if ($closure) {
            $closure($this->collection);
        }
        return $this;
    }

    public function commonListQuery()
    {
        return $this->search()->filters()->sort();
    }

    public function __call($method, $args)
    {
        $initMethodName = 'init';
        if (substr($method, 0, strlen($initMethodName)) !== $initMethodName) {
            if (empty($this->collection)) {
                throw new \Exception('DataHandleService need init collection data by initFromModel() or initFromCollection() method');
            }
        }
        return call_user_func_array($method, $args);
    }
}
