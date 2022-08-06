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
    public function Subcategories()
    {
    return $this->hasMany('App\Models\Subcategory');
    }
    public function Products()
    {
    return $this->hasMany('App\Models\Product');
    }
}
