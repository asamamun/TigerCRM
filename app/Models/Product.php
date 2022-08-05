<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'barcode',
        'image',
        'feature',
        'description',
        'information',
        'regular_price',
        'price',
        'wholesale_price',
        'purchase_price',
        'discount',
        'quantity'
    ];
    public function Category()
    {
    return $this->belongsTo('App\Models\Category');
    }
    public function Subcategory()
    {
    return $this->belongsTo('App\Models\Subcategory');
    }
    public function Brand()
    {
    return $this->belongsTo('App\Models\Brand');
    }
    public function Supplier()
    {
    return $this->belongsToMany('App\Models\Supplier');
    }
}
