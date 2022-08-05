<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'icon',
    ];
    public function Category()
    {
    return $this->belongsTo('App\Models\Category');
    }
    public function Product()
    {
    return $this->hasMany('App\Models\Product');
    }
}
