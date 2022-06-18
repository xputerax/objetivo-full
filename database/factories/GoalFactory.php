<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'g_status' => \App\Models\Goal::GOAL_NOT_STARTED,
            'smart_goal' => $this->faker->sentence(),
            'due_at' => now()->addDays($this->faker->numberBetween(0, 10)),
            'last_viewed_at' => now()
        ];
    }
}
