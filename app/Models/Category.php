<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'description',
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    //search by slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Subcategories()
    {
    return $this->hasMany('App\Models\Subcategory');
    }
    public function Products()
    {
    return $this->hasMany('App\Models\Product');
    }
}
