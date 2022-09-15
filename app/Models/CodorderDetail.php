<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodorderDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'total',
    ];
    public function codorder()
    {
    return $this->belongsTo('App\Models\Codorder');
    }
    public function Product()
    {
    return $this->belongsTo('App\Models\Product');
    }
}
