<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
     protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'sub_category_id'
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
