<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form137Request>
 */
class Form137RequestFactory extends Factory
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
            'principalname' => fake()->name(),
            'name' => fake()->name(),
            'grade' => fake()->randomElement(['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6']),
            'schoolyear' => fake()->year(),
            'adviser' => fake()->name(),
            'requestorname' => fake()->name(),
            'request' => fake()->randomElement(['First Request', 'Second Request', 'Third Request','Urgent']),
            'remarks' => fake()->paragraph(),
            'status' => "Process",
        ];
    }
    
}
