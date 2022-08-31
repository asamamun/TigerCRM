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
    public function Customers()
    {
    return $this->hasMany('App\Models\Customer');
    }
    public function Products()
    {
    return $this->hasMany('App\Models\Product');
    }
}
