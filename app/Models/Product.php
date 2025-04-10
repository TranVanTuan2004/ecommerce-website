<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id', 'created_at', 'updated_at'];

    // Một product thuộc về một category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
