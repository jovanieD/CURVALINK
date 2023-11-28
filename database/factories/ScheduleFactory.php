<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\GoodMoralRequest; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startTimestamp = $this->faker->dateTimeBetween('now', '+1 month')->getTimestamp();
        $endTimestamp = $this->faker->dateTimeBetween('@' . $startTimestamp, '@' . ($startTimestamp + 86400))->getTimestamp();

        $startDate = date('Y-m-d', $startTimestamp);
        $endDate = date('Y-m-d', $endTimestamp);

        $goodMoral = GoodMoralRequest::factory()->create();

        return [
            'user_id' => 11,
            'document' => $this->faker->sentence,
            'startdate' => $startDate,
            'enddate' => $endDate,
            'remarks' => $this->faker->paragraph,
            'schedulable_type' => 'App\\Models\\GoodMoralRequest', // Replace with your actual morphable model namespace
            'schedulable_id' => $goodMoral->id,
        ];
    }
}
