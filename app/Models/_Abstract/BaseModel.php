<?php

namespace App\Models\_Abstract;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    protected $connection = 'mysql';
    /**
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * @return mixed|string[]
     */
    public function getSearchField()
    {
        $staticObj = new static;
        if (empty($staticObj->search_fields)) {
            return $staticObj->fillable;
        }
        return $staticObj->search_fields;
    }

    /**
     * @return mixed|string[]
     */
    public function getFilterFields()
    {
        $staticObj = new static;
        if (empty($staticObj->filter_fields)) {
            return $staticObj->fillable;
        }
        return $staticObj->filter_fields;
    }


    /**
     * @return string
     */
    public function getTableName()
    {
        return (new static)->getTable();
    }
}
