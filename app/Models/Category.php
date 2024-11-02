<?php

// app/Models/Category.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
    ];

    // Define the relationship to products (one-to-many)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

