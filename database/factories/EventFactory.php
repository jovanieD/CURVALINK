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
            'teacher_id' => '21',
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'event_date' => now(),
            'imageurl' => '/images/events.png',
            'location' => fake()->city(),   
        ];
    }
}
