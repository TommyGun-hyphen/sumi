<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturerSubcategory extends Model
{
    use HasFactory;
    protected $table = "manufacturer_subcategory";
    protected $columns = ["manufacturer_id", "subcategory_id"];
}
