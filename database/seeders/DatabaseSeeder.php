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
                \App\Models\Goal::factory(5)
                    ->has(
                        \App\Models\ActionPlan::factory(5)
                            ->has(
                                \App\Models\Activity::factory(3)->state(new Sequence(
                                    ['a_status' => \App\Models\Activity::ACTIVITY_PENDING],
                                    ['a_status' => \App\Models\Activity::ACTIVITY_COMPLETED],
                                )),
                                'activities'
                            ),
                        'action_plans'
                    )
            )
        ->create();
    }
}
