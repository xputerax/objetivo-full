<?php

namespace Database\Seeders;

use App\Models\ActionPlan;
use App\Models\Activity;
use App\Models\Goal;
use App\Models\GoalComment;
use App\Models\User;
use App\Services\MentorService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Notifications\Action;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::factory()->createOne();
        $mentor = User::factory()->createOne();
        $mentor2 = User::factory()->createOne();

        $this->seedLearnGuitarGoal($user, $mentor);
        $this->seedReadBookGoal($user, $mentor2);
    }

    public function seedLearnGuitarGoal(User $user, $mentor)
    {
        $goal = new Goal([
            'title' => 'Learn guitar in 4 months',
            'description' => 'I need to learn it quickly!!',
            'g_status' => Goal::GOAL_NOT_STARTED,
            'smart_goal' => 'Play \'happy birthday\' in 4 months',
            'due_at' => now()->addMonths(4),
        ]);

        $goal->user()->associate($user);
        $goal->save();

        app(MentorService::class)->setMentor($mentor->id, $goal->id);

        $actionplan1 = new ActionPlan([
            'title' => 'Learn music theory',
            'ap_status' => ActionPlan::ACTIONPLAN_NOT_STARTED,
            'start_at' => now(),
            'end_at' => now()->addMonth(),
        ]);

        $actionplan1->goal()->associate($goal);
        $actionplan1->save();

        $ap1_ac1 = new Activity([
            'title' => 'Learn basic musical notes',
            'a_status' => Activity::ACTIVITY_PENDING,
        ]);

        $ap1_ac2 = new Activity([
            'title' => 'Learn CAGED system',
            'a_status' => Activity::ACTIVITY_PENDING,
        ]);

        $ap1_ac1->action_plan()->associate($actionplan1)->save();
        $ap1_ac2->action_plan()->associate($actionplan1)->save();

        $actionplan2 = new ActionPlan([
            'title' => 'Practice',
            'ap_status' => ActionPlan::ACTIONPLAN_NOT_STARTED,
            'start_at' => now(),
            'end_at' => now()->addMonth(),
        ]);

        $actionplan2->goal()->associate($goal);
        $actionplan2->save();

        $ap2_ac1 = new Activity([
            'title' => 'Play happy birthday without stuttering',
            'a_status' => Activity::ACTIVITY_PENDING,
        ]);
        $ap2_ac1->action_plan()->associate($actionplan2)->save();
    }

    public function seedReadBookGoal(User $user, $mentor)
    {
        $goal = new Goal([
            'title' => 'Finish 2 books in one month',
            'description' => 'Kalau nak anugerah nilam kena baca buku!!',
            'g_status' => Goal::GOAL_NOT_STARTED,
            'smart_goal' => 'Finish 2 books in 1 month',
            'due_at' => now()->addMonths(4),
        ]);

        $goal->user()->associate($user);
        $goal->save();

        $actionplan1 = new ActionPlan([
            'title' => 'Harry Potter 1',
            'ap_status' => ActionPlan::ACTIONPLAN_NOT_STARTED,
            'start_at' => now(),
            'end_at' => now()->addDays(15),
        ]);
        $actionplan1->goal()->associate($goal);
        $actionplan1->save();

        $actionplan1->activities()->saveMany([
            new Activity([
                'title' => 'Finish chapter 1',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
            new Activity([
                'title' => 'Finish chapter 2',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
            new Activity([
                'title' => 'Finish chapter 3',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
            new Activity([
                'title' => 'Finish chapter 4',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
        ]);

        $actionplan2 = new ActionPlan([
            'title' => 'His Dark Materials Book 1',
            'ap_status' => ActionPlan::ACTIONPLAN_NOT_STARTED,
            'start_at' => now()->addDays(15),
            'end_at' => now()->addMonth(),
        ]);
        $actionplan2->goal()->associate($goal);
        $actionplan2->save();

        $actionplan2->activities()->saveMany([
            new Activity([
                'title' => 'Part 1',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
            new Activity([
                'title' => 'Part 2',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
            new Activity([
                'title' => 'Part 3',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
            new Activity([
                'title' => 'Part 4',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
            new Activity([
                'title' => 'Part 5',
                'a_status' => Activity::ACTIVITY_PENDING,
            ]),
        ]);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function runOld()
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
