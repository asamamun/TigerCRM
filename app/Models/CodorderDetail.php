<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodorderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'codorder_id',
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
