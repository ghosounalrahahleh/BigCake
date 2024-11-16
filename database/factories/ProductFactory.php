<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'discount_percentage' => 0,
            'description' => fake()->text(),
            'quantity'    => fake()->numberBetween(5, 20),
            'price' => fake()->numberBetween(2, 7),
            'type'  => fake()->randomElement(["SWEETS", "BAKERIES"]),
            'name'  => "Product" . fake()->numberBetween(1, 100),
        ];
    }
}
