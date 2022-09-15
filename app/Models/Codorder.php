<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codorder extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',       
        'address',       
        'subtotal',
        'shipping',
        'total',
        'payment_type',
        'delivery_status',
    ];

    public function codorderdtails()
    {
    return $this->hasMany('App\Models\CodorderDetail');
    }
    public function Customer()
    {
    return $this->belongsTo('App\Models\Customer');
    }
}
