<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommentVote>
 */
class CommentVoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'goal_comment_id' => \App\Models\GoalComment::inRandomOrder()->first()->id,
            'vote_type' => $this->faker->numberBetween(0,2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
