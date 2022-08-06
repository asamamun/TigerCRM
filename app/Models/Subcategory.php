<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'icon',
        'description',
    ];
    public function Category()
    {
    return $this->belongsTo('App\Models\Category');
    }
    public function Products()
    {
    return $this->hasMany('App\Models\Product');
    }
}
