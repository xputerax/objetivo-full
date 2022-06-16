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
    
    // Test function to return number of Not Started APs
    public function getNotStartedAPCount(): int
    {
        $apList = ActionPlan::select('ap_status')
            ->join('goals', 'action_plans.goal_id', '=', 'goals.id')
            ->join('users', 'goals.user_id', '=', 'users.id')
            ->where('ap_status', '=', "not_started")
            ->where('users.id', '=', auth()->id())
            ->get();
        
        $apCount = $apList->count();

        return $apCount;
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

    protected function updateGoalStatus($status): void
    {
        // If all AP_STATUS == "completed" for current GOAL_ID
        // Update G_STATUS == "completed for current GOAL_ID
        $apStatusCompletedCount = ActionPlan::select('count(ap_status')
            ->where('ap_status', '=', "completed")
            ->get();

        $goalCount = Goal::select('count(goal)')
            /*
                CHANGE AP_STATUS TO G_STATUS ONCE ADDED INTO GOAL MODEL
            */
            ->where('ap_status', '=', "completed")
            ->get();

        $goals = Goal::all();

        foreach ($goals as $goal) {
            if ($apStatusCompletedCount == $goalCount) {
                // Query to update database
                $goal_id = $goal->id;
                Goal::where('id', $goal_id)
                    ->update(['g_status' => 'completed']);
            }
        }


        // If zero AP_STATUS == "completed" OR "in_progress"
        // Update G_STATUS == "not_started for current GOAL_ID"

        // else update G_STATUS == "not_started" for current GOAL_ID
    }
}
