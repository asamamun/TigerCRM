<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'icon',
    ];
    public function Product()
    {
    return $this->hasMany('App\Models\Product');
    }
}
