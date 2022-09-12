<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'accountnumber',
        'balance',
    ];
    public function Expenses()
    {
    return $this->hasMany('App\Models\Expense','payment_type');
    }
    public function capitals()
    {
    return $this->hasMany('App\Models\Capital', 'payment_type');
    }
    public function Sender()
    {
    return $this->hasMany('App\Models\Transfer','sender_account');
    }
    public function Receiver()
    {
    return $this->hasMany('App\Models\Transfer','receiver_account');
    }
    public function Orders()
    {
    return $this->hasMany('App\Models\Order','payment_type');
    }
    public function Invoices()
    {
    return $this->hasMany('App\Models\Order','payment_type');
    }
}
