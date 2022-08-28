<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_id',
        'nettotal',
        'discount',
        'grandtotal',
        'comment',
        'payment_type',
        'trxId',
    ];
    public function InvoiceDtails()
    {
    return $this->hasMany('App\Models\InvoiceDetail');
    }
    public function Account()
    {
    return $this->belongsTo('App\Models\Account','payment_type');
    }
    public function Supplier()
    {
    return $this->belongsTo('App\Models\Supplier');
    }
}
