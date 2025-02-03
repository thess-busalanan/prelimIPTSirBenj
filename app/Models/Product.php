<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = ['product_name', 'description', 'category_id', 'purchase_price', 'retail_price', 'quantity'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    
}
