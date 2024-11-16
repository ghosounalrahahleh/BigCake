<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product  = Product::inRandomOrder()->first();
        $quantity = fake()->numberBetween(1, 5);
        
        return [
            "product_id" => $product->id,
            "order_id"   => Order::inRandomOrder()->first()->id,
            "quantity"   => $quantity,
            "price"      => $product->price ,
        ];
    }
}
