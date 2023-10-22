<?php

namespace App\Models;

use App\Enums\Category\CategoryStatusEnum;
use App\Enums\Category\CategoryTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
        'type',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    protected $appends = ['status_text', 'type_text'];

    public function getTypeTextAttribute()
    {
        return CategoryTypeEnum::getTypes()[$this->type];
    }

    public function getStatusTextAttribute()
    {
        return CategoryStatusEnum::getStatus()[$this->status];
    }

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'category_id', 'id');
    }
}
