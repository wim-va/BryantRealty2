<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => fake()->name(),
            // 'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),

            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'address' => fake()->streetAddress(), // street + #
            'postcode' => rand(1111, 9999),
            'city' => fake()->city(),
            'telephone' => '+324' . rand(5, 9) . rand(000000, 999999),
            'email' => fake()->safeEmail(),
            // $site = 
            'website' =>
            fake()->company() . '.com',
            //  $site,
            'company' => 'https://www.' . strtolower(preg_replace('/\W+/', '', fake()->company())) . '.com',
            'vat_number' => 'BE' . rand(0000, 9999) . '.' . rand(000, 999) . '.' . rand(000, 999),
            'password' => bcrypt('Password'),
            'is_admin' => fake()->boolean(),
            'is_agent' => fake()->boolean(),


        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
