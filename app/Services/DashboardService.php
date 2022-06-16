<?php

namespace App\Services;

use App\Contracts\DashboardServiceInterface;
use App\Models\Goal;
use App\Models\ActionPlan;
use Illuminate\Support\Facades\DB;

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

    protected function queryUpdateGoalStatus($status): void
    {
        // If all AP_STATUS == "completed" for current GOAL_ID
        // Update G_STATUS == "completed" for current GOAL_ID
        $apStatusCompletedCount = ActionPlan::select('count(ap_status')
            ->where('ap_status', '=', "completed")
            ->get();

        $gStatusCompletedCount = Goal::select('count(goal)')
            ->where('g_status', '=', "completed")
            ->get();

        $goals = Goal::all();

        foreach ($goals as $goal) {
            if ($apStatusCompletedCount == $gStatusCompletedCount) {
                // Query to update database
                Goal::where('id', $goal->id)
                    ->update(['g_status' => 'completed']);
            }
            // If zero AP_STATUS == "completed" OR "in_progress"
            // Update G_STATUS == "not_started" for current GOAL_ID"
            else if ($apStatusCompletedCount == 0 || $apStatusCompletedCount == 0) {
                Goal::where('id', $goal->id)
                    ->update(['g_status' => 'not_started']);
            } else {
                Goal::where('id', $goal->id)
                    ->update(['g_status' => 'in_progress']);                
            }
        }



        // else update G_STATUS == "in_progress" for current GOAL_ID
    }

    // Test function to return number of Not Started APs
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
}
