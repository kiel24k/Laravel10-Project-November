<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'image' => fake()->name(),
            'name' => fake()->name(),
            'description' => fake()->name(),
            'price' => fake()->name(),
            'quantity' => fake()->name(),
        ];
    }
}
