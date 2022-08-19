<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'name',
        'slug',
        'barcode',
        'feature',
        'description',
        'information',
        'regular_price',
        'price',
        'wholesale_price',
        'purchase_price',
        'discount',
        'quantity'
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


    public function Brand()
    {
    return $this->belongsTo('App\Models\Brand');
    }
    public function Supplier()
    {
    return $this->belongsTo('App\Models\Supplier');
    }
    public function Category()
    {
    return $this->belongsTo('App\Models\Category');
    }
    public function Subcategory()
    {
    return $this->belongsTo('App\Models\Subcategory');
    }
    public function OrderDtails()
    {
    return $this->hasMany('App\Models\OrderDetail');
    }
    public function InvoiceDtails()
    {
    return $this->hasMany('App\Models\InvoiceDetail');
    }
    public function productimages()
    {
    return $this->hasMany('App\Models\Productimage');
    }
}
