<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public $timestamps = false;


    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
}
