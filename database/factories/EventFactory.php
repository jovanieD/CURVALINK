<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => fake()->numberBetween(1, 11),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'start_datetime' => now(),
            'end_datetime' => now(),
            'location' => fake()->city(),   
        ];
    }
}
