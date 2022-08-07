<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
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
    return $this->hasMany('App\Models\Capital');
    }
}
