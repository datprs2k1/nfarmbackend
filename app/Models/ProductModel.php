<?php

namespace App\Models;

use App\Enums\Post\PostStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ProductModel extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'description',
        'detail',
        'future',
        'status',
        'category_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'image' => 'array',
    ];

    protected $appends = ['status_text'];

    public function getStatusTextAttribute()
    {
        return PostStatusEnum::getStatus()[$this->status];
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class);
    }

    public function prices()
    {
        return $this->hasMany(PriceModel::class, 'product_id', 'id');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
