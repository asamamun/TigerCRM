<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Capital extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'amount',
        'payment_type',
        'description',
    ];
    public function Account()
    {
    return $this->belongsTo('App\Models\Account', 'payment_type');
    }
}
