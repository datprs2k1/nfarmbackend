<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartModel extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    protected $table = 'carts';
    protected $fillable = [
        'quantity',
        'price_id',
        'user_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    public function Price()
    {
        return $this->belongsTo(PriceModel::class);
    }
}
