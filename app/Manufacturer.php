<?php

namespace App;

use App\Models\ManufacturerSubcategory;
use Illuminate\Database\Eloquent\Model;


class Manufacturer extends Model
{
    public $timestamps = false;

    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
