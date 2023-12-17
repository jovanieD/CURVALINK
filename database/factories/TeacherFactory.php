<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstNameMale(),
            'lastname' => fake()->lastName(),
            'gender'=> 'Male',
            'rank' => fake()->randomElement(['Teacher I', 'Teacher II', 'Teacher III']),
            'subject_handle' => fake()->word(),
            'grade_level' => fake()->randomElement(['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5']),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$zu/uskLIl.VKZnFluiBDWO82cAM8gBM/FcGjlEu6eHvcUxb9GATYW', // P@$$word
            'remember_token' => Str::random(10),
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
