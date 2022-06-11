<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActionPlan>
 */
class ActionPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start_at = now()->addDays(
            $this->faker->numberBetween(0, 10)
        );

        $end_at = (clone $start_at)->addDays(
            $this->faker->numberBetween(0, 10)
        );

        return [
            'title' => $this->faker->sentence(),
            'ap_status' => \App\Models\ActionPlan::ACTIONPLAN_NOT_STARTED,
            'start_at' => $start_at,
            'end_at' => $end_at,
        ];
    }
}
