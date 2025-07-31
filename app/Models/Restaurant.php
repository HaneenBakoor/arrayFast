<?php

namespace App\Models;

use App\Models\Addition;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
     protected $fillable = [
        'name',
        'description',
        'image',
        'opening_time',
        'closing_time',
        'estimated_delivery_time',
        'minimum_order_value',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function additions()
    {
        return $this->hasMany(Addition::class);
    }

}
