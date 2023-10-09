<?php

namespace App\Models;

use App\Enums\Post\PostStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';
    protected $fillable = [
        'name',
        'description',
        'content',
        'image',
        'status',
        'category_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    protected $appends = ['status_text'];

    public function getStatusTextAttribute() {
        return PostStatusEnum::getStatus()[$this->status];
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class);
    }
}
