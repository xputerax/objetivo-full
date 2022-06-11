<?php

namespace App\Services;

use App\Contracts\DashboardServiceInterface;
use App\Models\Activity;
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
        if (!$this->isValidStatus($status))
        {
            throw new \InvalidArgumentException('Invalid activity status');
        }

        $ret = DB::table('goals')
            ->join('action_plans', 'action_plans.goal_id', '=', 'goals.id')
            ->join('activities', 'activities.action_plan_id', '=', 'action_plans.id')
            ->where('goals.user_id', '=', $this->user->id)
            ->where('activities.status', '=', $status)
            ->selectRaw('COALESCE(count(goals.id), 0) c')
            ->first('c');

        return $ret->c;
    }
}
