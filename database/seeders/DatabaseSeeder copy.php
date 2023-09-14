<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();


        $agents = 20;
        $clients = 50;
        $meetings = 50;
        $listings = 100;


        for ($i = 0; $i < $agents; $i++) {
            $company = fake()->company();
            $firstName = fake()->firstName();
            $lastName = fake()->lastName();

            // \App\Models\Agent::factory()->create([
            \App\Models\User::factory()->create([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'address' => fake()->streetAddress(), // street + #
                'postcode' => rand(1111, 9999),
                'city' => fake()->city(),
                'telephone' => '+324' . rand(5, 9) . rand(000000, 999999),
                'email' =>
                strtolower($firstName) . '.' .
                    strtolower($lastName) .
                    // rand(1, 9999) .
                    '@' .
                    strtolower(preg_replace('/\W+/', '', $company))
                    . '.com',
                'website' =>
                'https://www.' . strtolower(preg_replace('/\W+/', '', fake()->company())) . '.com',

                'company' =>
                $company,
                'vat_number' => 'BE' . rand(0000, 9999) . '.' . rand(000, 999) . '.' . rand(000, 999),
                'password' => bcrypt('Password'),
                'is_admin' => fake()->boolean(),
            ]);
        }

        \App\Models\Listing::factory(50)->create([
            'agent_id' => rand(1, $agents),
        ]);

        \App\Models\Client::factory($clients)->create();

        \App\Models\Meeting::factory($meetings)->create(
            [
                'client_id' => rand(1, $clients),
                'agent_id' => rand(1, $agents),
                'listing_id' => rand(1, $listings),
                'datetime' => now(),
            ]
        );
    }
}
