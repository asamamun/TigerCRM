<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'product_id',
        'quantity',
        'price',
        'total',
    ];
    public function Invoice()
    {
    return $this->belongsTo('App\Models\Invoice');
    }
    public function Product()
    {
    return $this->belongsTo('App\Models\Product');
    }
}
