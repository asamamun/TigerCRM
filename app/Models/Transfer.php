<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfer extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'sender_account',
        'receiver_account',
        'amount',
        'description',
    ];
    public function sender()
    {
    return $this->belongsTo('App\Models\Account','sender_account');
    }
    public function receiver()
    {
    return $this->belongsTo('App\Models\Account','receiver_account');
    }

}
