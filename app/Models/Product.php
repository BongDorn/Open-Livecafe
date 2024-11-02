<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock',
         // Ensure this is included for the relationship
    ];

    // Define the relationship to category (many-to-one)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Other methods...
}

