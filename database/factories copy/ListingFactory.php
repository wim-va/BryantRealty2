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
            'name' => fake()->word(rand(2, 5)),
            'address' => fake()->streetAddress(),
            'postcode' => rand(1111, 9999),
            'city' => fake()->city(),
            'beds' => rand(1, 10),
            'baths' => rand(1, 10),
            'rooms' => rand(1, 10),
            'space' => rand(10, 5000),
            'price' => rand(10000, 5000000),
            'headline' => fake()->sentence(3, 8),
            'description' => fake()->paragraph(),
            'user_id' => rand(1, 20),
        ];
    }
}
