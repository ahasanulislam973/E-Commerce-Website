<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductManagement extends Model
{
    use HasFactory;

        // Define the relationship with User
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        // Define the relationship with Product
        public function product()
        {
            return $this->belongsTo(Product::class, 'product_id');
        }
}
