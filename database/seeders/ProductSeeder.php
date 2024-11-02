<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        \DB::transaction(function () {
            Product::create([
                'name' => 'Caffe Latte 1',
                'description' => 'Description for Product 1',
                'price' => 1.99,
                'image' => 'upload/products/1730350150.jpg',
                'stock' => 10,
            ]);

            Product::create([
                'name' => 'Hot Latte 2',
                'description' => 'Description for Hot Latte 2',
                'price' => 2.99,
                'image' => 'upload/products/1730351755.jpg',
                'stock' => 5,
            ]);

            // Add more products as needed or use factory
            Product::factory()->count(10)->create();
        });

        // Add more products as needed
    }
}
