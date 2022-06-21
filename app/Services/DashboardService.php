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
    /** @var \App\Models\User */
    private $user;

    public function forUser($user): void
    {
        $this->user = $user;
    }

    public function getInProgressCount(): int
    {
        return $this->getCountForStatus(ActionPlan::ACTIONPLAN_IN_PROGRESS);
    }

    public function getNotStartedCount(): int
    {
        return $this->getCountForStatus(ActionPlan::ACTIONPLAN_NOT_STARTED);
    }

    public function getCompletedCount(): int
    {
        return $this->getCountForStatus(ActionPlan::ACTIONPLAN_COMPLETED);
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
            throw new \InvalidArgumentException(sprintf("Invalid activity status '%s'", $status));
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
                ->where('a_status', '=', Activity::ACTIVITY_COMPLETED)
                ->count();

            $actPendingCount = Activity::select('activities.id', 'action_plan_id', 'a_status')
                ->join('action_plans', 'activities.action_plan_id', '=', 'action_plans.id')
                ->join('goals', 'action_plans.goal_id', '=', 'goals.id')
                ->where('goals.id', '=', $goal->id)
                ->where('a_status', '=', Activity::ACTIVITY_PENDING)
                ->count();

            // If all A_STATUS == "completed" for current GOAL_ID
            // Update G_STATUS == "completed" for current GOAL_ID
            if ($actCompletedCount == $actCount) {
                // Query to update database
                Goal::where('id', '=', $goal->id)
                    ->update(['g_status' => Goal::GOAL_COMPLETED]);
            }
            // If all A_STATUS == "pending" for current GOAL_ID
            // Update G_STATUS == "not_started" for current GOAL_ID"
            else if ($actPendingCount == $actCount) {
                Goal::where('id', '=', $goal->id)
                    ->update(['g_status' => Goal::GOAL_NOT_STARTED]);
            }
            // else update G_STATUS == "in_progress" for current GOAL_ID
            else {
                Goal::where('id', '=', $goal->id)
                    ->update(['g_status' => Goal::GOAL_IN_PROGRESS]);
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
            ->where('g_status', '=', Goal::GOAL_NOT_STARTED)
            ->where('user_id', '=', $this->user->id)
            ->count();

        return $goalNotStartedList;
    }

    public function getGoalInProgressCount(): int
    {
        $goalNotStartedList = Goal::select('g_status')
            ->where('g_status', '=', Goal::GOAL_IN_PROGRESS)
            ->where('user_id', '=', $this->user->id)
            ->count();

        return $goalNotStartedList;
    }
    public function getGoalCompletedCount(): int
    {
        $goalNotStartedList = Goal::select('g_status')
            ->where('g_status', '=', Goal::GOAL_COMPLETED)
            ->where('user_id', '=', $this->user->id)
            ->count();

        return $goalNotStartedList;
    }

    public function getGoals()
    {
        $goals = Goal::select('goals.id', 'title', 'due_at', 'users.name', 'g_status', 'user_id', 'last_viewed_at')
            ->join('goal_mentors', 'goal_mentors.goal_id', '=', 'goals.id')
            ->join('users', 'users.id', '=', 'goal_mentors.mentor_id')
            ->where('goals.user_id', '=', $this->user->id)
            ->orderBy('last_viewed_at', 'DESC')
            ->get();

        return $goals;
    }
}
