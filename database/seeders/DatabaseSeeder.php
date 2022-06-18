<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)
            ->has(
                \App\Models\Goal::factory(5)->state(new Sequence(
                    ['g_status' => \App\Models\Goal::GOAL_NOT_STARTED],
                    ['g_status' => \App\Models\Goal::GOAL_IN_PROGRESS],
                    ['g_status' => \App\Models\Goal::GOAL_COMPLETED],
                ))
                    ->has(
                        \App\Models\ActionPlan::factory(5)->state(new Sequence(
                            ['ap_status' => \App\Models\ActionPlan::ACTIONPLAN_NOT_STARTED],
                            ['ap_status' => \App\Models\ActionPlan::ACTIONPLAN_IN_PROGRESS],
                            ['ap_status' => \App\Models\ActionPlan::ACTIONPLAN_COMPLETED],
                        ))
                            ->has(
                                \App\Models\Activity::factory(3)->state(new Sequence(
                                    ['a_status' => \App\Models\Activity::ACTIVITY_PENDING],
                                    ['a_status' => \App\Models\Activity::ACTIVITY_COMPLETED],
                                )),
                                'activities'
                            ),
                        'action_plans'
                    )->has(\App\Models\GoalComment::factory(5)
                        ->has(\App\Models\CommentVote::factory(1)))
            )
            ->create();

        \App\Models\GoalMentors::factory(50)
            ->create();
    }
}
