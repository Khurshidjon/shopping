<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $fillable = ['images', 'product_id'];


    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}