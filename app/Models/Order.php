<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'user_id',
        'customer_id',       
        'nettotal',
        'discount',
        'grandtotal',
        'comment',
        'payment_type',
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
    public function User()
    {
    return $this->belongsTo('App\Models\User');
    }
    public function Customer()
    {
    return $this->belongsTo('App\Models\Customer');
    }
}
