<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
    ];
    public function Customer()
    {
    return $this->belongsTo('App\Models\Customer');
    }
    public function Product()
    {
    return $this->belongsTo('App\Models\Product');
    }
}
