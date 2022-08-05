<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'description',
    ];
    public function Subcategory()
    {
    return $this->hasMany('App\Models\Subcategory');
    }
    public function Product()
    {
    return $this->hasMany('App\Models\Product');
    }
}
