<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function images()
    {
        return $this->hasMany(Product_image::class);
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie', 'category_id', 'id');
    }

    public function types()
    {
        return $this->hasMany('App\Models\ProductType', 'product_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review', 'product_id', 'id');
    }

    public function productImage()
    {
        return $this->hasMany(Product_image::class)->take(1);
    }

}
