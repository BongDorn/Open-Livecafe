<?php

// database/seeders/CategorySeeder.php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Devices and gadgets',
        ]);

        Category::create([
            'name' => 'Books',
            'description' => 'Printed and digital books',
        ]);

        // Add more categories as needed
    }
}
