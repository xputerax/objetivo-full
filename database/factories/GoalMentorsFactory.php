<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GoalMentorsFactory>
 */
class GoalMentorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 day' );
        return [ 
            'goal_id' => \App\Models\Goal::inRandomOrder()->first()->id,
            'mentor_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
