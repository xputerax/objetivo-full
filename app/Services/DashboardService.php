<?php

namespace App\Services;

use App\Contracts\DashboardServiceInterface;
use App\Models\Goal;
use App\Models\ActionPlan;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardService implements DashboardServiceInterface
{
    private $user;

    public function forUser($user): void
    {
        $this->user = $user;
    }

    public function getInProgressCount(): int
    {
        $status = 'in_progress';
        return $this->getCountForStatus($status);
    }

    public function getNotStartedCount(): int
    {
        $status = 'not_started';
        return $this->getCountForStatus($status);
    }

    public function getCompletedCount(): int
    {
        $status = 'completed';
        return $this->getCountForStatus($status);
    }

    protected function isValidStatus($status): bool
    {
        return in_array($status, [
            ActionPlan::ACTIONPLAN_COMPLETED, ActionPlan::ACTIONPLAN_IN_PROGRESS, ActionPlan::ACTIONPLAN_NOT_STARTED
        ]);
    }

    protected function getCountForStatus($status): int
    {
        if (!$this->isValidStatus($status)) {
            throw new \InvalidArgumentException('Invalid activity status');
        }

        $ret = DB::table('goals')
            ->join('action_plans', 'action_plans.goal_id', '=', 'goals.id')
            ->join('activities', 'activities.action_plan_id', '=', 'action_plans.id')
            ->where('goals.user_id', '=', $this->user->id)
            ->where('action_plans.ap_status', '=', $status)
            ->selectRaw('COALESCE(count(goals.id), 0) c')
            ->first('c');

        return $ret->c;
    }

    // Updates field G_STATUS based on all A_STATUS under the goal
    // Accepts current user_id as parameter
    public function queryUpdateGoalStatus($userId): void
    {
        $goals = Goal::where('user_id', '=', $userId)
            ->get();

        foreach ($goals as $goal) {
            $actCount = Activity::select('activities.id', 'action_plan_id', 'a_status')
                ->join('action_plans', 'activities.action_plan_id', '=', 'action_plans.id')
                ->join('goals', 'action_plans.goal_id', '=', 'goals.id')
                ->where('goals.id', '=', $goal->id)
                ->count();

            $actCompletedCount = Activity::select('activities.id', 'action_plan_id', 'a_status')
                ->join('action_plans', 'activities.action_plan_id', '=', 'action_plans.id')
                ->join('goals', 'action_plans.goal_id', '=', 'goals.id')
                ->where('goals.id', '=', $goal->id)
                ->where('a_status', '=', 'completed')
                ->count();

            $actPendingCount = Activity::select('activities.id', 'action_plan_id', 'a_status')
                ->join('action_plans', 'activities.action_plan_id', '=', 'action_plans.id')
                ->join('goals', 'action_plans.goal_id', '=', 'goals.id')
                ->where('goals.id', '=', $goal->id)
                ->where('a_status', '=', 'pending')
                ->count();


            // If all A_STATUS == "completed" for current GOAL_ID
            // Update G_STATUS == "completed" for current GOAL_ID
            if ($actCompletedCount == $actCount) {
                // Query to update database
                Goal::where('id', '=', $goal->id)
                    ->update(['g_status' => 'completed']);
            }
            // If all A_STATUS == "pending" for current GOAL_ID
            // Update G_STATUS == "not_started" for current GOAL_ID"
            else if ($actPendingCount == $actCount) {
                Goal::where('id', '=', $goal->id)
                    ->update(['g_status' => 'not_started']);
            }
            // else update G_STATUS == "in_progress" for current GOAL_ID
            else {
                Goal::where('id', '=', $goal->id)
                    ->update(['g_status' => 'in_progress']);
            }
        }
    }

    public function getGoalNotStartedCount(): int
    {
        // $apList = ActionPlan::select('ap_status')
        //     ->join('goals', 'action_plans.goal_id', '=', 'goals.id')
        //     ->join('users', 'goals.user_id', '=', 'users.id')
        //     ->where('ap_status', '=', "not_started")
        //     ->where('users.id', '=', auth()->id())
        //     ->get();

        $goalNotStartedList = Goal::select('g_status')
            ->where('g_status', '=', 'not_started')
            ->where('user_id', '=', auth()->id())
            ->count();

        return $goalNotStartedList;
    }

    public function getGoalInProgressCount(): int
    {
        $goalNotStartedList = Goal::select('g_status')
            ->where('g_status', '=', 'in_progress')
            ->where('user_id', '=', auth()->id())
            ->count();

        return $goalNotStartedList;
    }
    public function getGoalCompletedCount(): int
    {
        $goalNotStartedList = Goal::select('g_status')
            ->where('g_status', '=', 'completed')
            ->where('user_id', '=', auth()->id())
            ->count();

        return $goalNotStartedList;
    }

    public function getGoals()
    {
        $goals = Goal::select('goals.id', 'title', 'due_at', 'users.name', 'g_status', 'user_id')
            ->join('goal_mentors', 'goal_mentors.goal_id', '=', 'goals.id')
            ->join('users', 'users.id', '=', 'goal_mentors.mentor_id')
            ->where('goals.user_id', '=', auth()->id())
            ->orderBy('last_viewed_at', 'DESC')
            ->get();

        return $goals;
    }
}
