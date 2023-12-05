<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderModel extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    protected $table = 'orders';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'ward',
        'district',
        'province',
        'note',
        'total',
        'status',
        'user_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetailModel::class, 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }

    public function transactions() {
        return $this->hasMany(TransactionModel::class,'order_id', 'id');
    }
}
