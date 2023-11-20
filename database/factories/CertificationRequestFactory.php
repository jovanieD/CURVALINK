<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CertificationRequest>
 */
class CertificationRequestFactory extends Factory
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
            'firstname' => fake()->name(),
            'lastname' => fake()->name(),
            'address' => fake()->address(),
            'municipality' => fake()->city(),
            'province' => fake()->state(),
            'postal' => fake()->postcode(),
            'phonenumber' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'purpose' => fake()->sentence(),
            'status' => "Process",
        ];
    }
}

