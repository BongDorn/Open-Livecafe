<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'price',
        'address',
        'quantity',
        'image',
        'delivery_status',
        'payment_method',
        'payment_status',
        'payment_id',
        'user_id',
        // Ensure this is included for the relationship
    ];
}
