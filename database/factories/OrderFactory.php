<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total_amount' => fake()->numberBetween(20, 60),
            'user_id' => User::inRandomOrder()->first()->id,
            'status'  => "PROCESSING",
            'weight'  => fake()->randomFloat(2, 0, 20),
        ];
    }
}
