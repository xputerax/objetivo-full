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
        \App\Models\User::factory(50)
            ->has(
                \App\Models\Goal::factory(10)
                    ->has(
                        \App\Models\ActionPlan::factory(5)
                            ->has(
                                \App\Models\Activity::factory(10)->state(new Sequence(
                                    ['a_status' => \App\Models\ActionPlan::ACTIONPLAN_NOT_STARTED],
                                    ['a_status' => \App\Models\ActionPlan::ACTIONPLAN_IN_PROGRESS],
                                    ['a_status' => \App\Models\ActionPlan::ACTIONPLAN_COMPLETED],
                                )),
                                'activities'
                            ),
                        'action_plans'
                    )
            )
        ->create();
    }
}
