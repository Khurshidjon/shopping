<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    use Sluggable;

    /*----------------------------------------------------------------------------------------------------------------*/

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*------------------------------------------------------------------------------------------------------*/

    protected $fillable = ['name', 'slug', 'description', 'price', 'details', 'category_id'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    /*------------------------------------------------------------------------------------------------------*/

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function images()
    {
        return $this->hasMany(ProductPhoto::class);
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function category()
    {
        return $this->belongsTo( Category::class);
    }

    /*------------------------------------------------------------------------------------------------------*/

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 1);
    }

    /*------------------------------------------------------------------------------------------------------*/

}
