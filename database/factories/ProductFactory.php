<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 20),
            'image' => 'upload/products/' . $this->faker->image('public/upload/products', 400, 300, null, false),
            'stock' => $this->faker->numberBetween(1, 20),
        ];
    }
}
