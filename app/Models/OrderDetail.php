<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'total',
    ];
    public function Order()
    {
    return $this->belongsTo('App\Models\Order');
    }
    public function Product()
    {
    return $this->belongsTo('App\Models\Product');
    }
}
