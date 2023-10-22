<?php

namespace App\Models;

use App\Enums\Price\PriceStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'prices';
    protected $fillable = [
        "product_id",
        "description",
        "detail",
        "price",
        "name",
        "note",
        "status",
        "warranty"
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    protected $appends = ['status_text'];

    public function getStatusTextAttribute()
    {
        return PriceStatusEnum::getStatus()[$this->status];
    }

    public function product()
    {
        return $this->hasOne(ProductModel::class, 'id', 'product_id');
    }
}
