<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;
    protected $fillable = [
        'name',
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
    
    public function Products()
    {
    return $this->hasMany('App\Models\Product');
    }
}
