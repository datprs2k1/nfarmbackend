<?php

namespace App\Models;

use App\Enums\Price\PriceStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class PriceModel extends Model
{
    use HasFactory, SoftDeletes, Searchable;

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

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'detail' => $this->detail,
            'price' => $this->price,
            'note' => $this->note,
            'status' => $this->status,
            'warranty' => $this->warranty,
        ];
    }
}
