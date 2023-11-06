<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetailModel extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    protected $table = 'order_details';
    protected $fillable = [
        'price_id',
        'total',
        'quantity',
        'order_id',
        'user_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    public function price()
    {
        return $this->belongsTo(PriceModel::class, 'price_id', 'id');
    }
}
