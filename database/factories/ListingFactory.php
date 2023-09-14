<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beds' => rand(1, 8),
            'baths' => rand(1, 8),
            'area' => rand(100, 10000),
            'city' => fake()->city(),
            'postcode' => fake()->postcode(),
            'street' => fake()->streetName(),
            'street_nr' => rand(1, 500),
            'price' => rand(50000, 5000000),
            'user_id' => rand(1, 20),
        ];
    }
}
