<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'purchase_price' => $this->faker->randomFloat(2, 10, 200),
            'retail_price' => null, // Initially null before markup is applied
            'quantity' => $this->faker->numberBetween(1, 100)
        ];
    }
}
