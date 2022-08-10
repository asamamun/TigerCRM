<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'nettotal',
        'discount',
        'grandtotal',
        'comment',
        'trxId',
    ];
    public function OrderDtails()
    {
    return $this->hasMany('App\Models\OrderDetail');
    }
    public function Account()
    {
    return $this->belongsTo('App\Models\Account','payment_type');
    }
}
