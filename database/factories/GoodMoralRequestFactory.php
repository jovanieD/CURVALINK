<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GoodMoralRequest>
 */
class GoodMoralRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 11,
            'idnumber' => fake()->randomNumber(),
            'firstname' => fake()->name(),
            'middlename' => fake()->name(),
            'lastname' => fake()->name(),
            'purpose' => fake()->sentence(),
            'requestorfirstname' => fake()->name(),
            'requestorlastname' => fake()->name(),
            'requestorsaddress' => fake()->address(),
            'requestorscity' => fake()->city(),
            'requestorsprovince' => fake()->state(),
        ];
    }
    
}
