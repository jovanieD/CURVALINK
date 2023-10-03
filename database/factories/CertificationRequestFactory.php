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
            'requestor' => $faker->name,
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'address' => $faker->address,
            'municipality' => $faker->city,
            'state_province' => $faker->state,
            'postal_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'purpose' => $faker->sentence,
        ];
    }
}
