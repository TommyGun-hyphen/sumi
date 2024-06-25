<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subcategory extends Model
{
    public $timestamps = false;

    public function manufacturers(){
        return $this->belongsToMany(Manufacturer::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
