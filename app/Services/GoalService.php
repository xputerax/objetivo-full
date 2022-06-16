<?php

namespace App\Services;

use App\Contracts\GoalServiceInterface;
use App\Models\Goal;
use App\Models\ActionPlan;
use App\Models\Activity;

class GoalService implements GoalServiceInterface
{
    private $user;
    private $actionPlans;

    public function forUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get all the goals for the current user
     */
    public function getGoals()
    {
        $goals = Goal::select('id','user_id','title','description','smart_goal','due_at','created_at','updated_at')
            ->where('user_id',2)  //Use $this->user->id for current user
            ->get();
        
        return $goals;
    }

    /**
     * Get goals by the goal ID
     * 
     * @param $goalid
     * @return App\Models\Goal
     */
    public function getGoalByID($goalid)
    {
        return Goal::find($goalid);
    }

    /**
     * Get all action plans for a specific goal
     * 
     * @param $goalid
     * @return Collection
     */
    public function getActionPlans($goalid) 
    {
        $actionPlans = ActionPlan::select('id', 'goal_id', 'title', 'ap_status', 'start_at', 'end_at')
            ->where('goal_id', $goalid)
            ->get();

        $this->actionPlans = $actionPlans;
        
        return $actionPlans;
    }

    /**
     * Get all activities for all action plans of the current goal
     * 
     * @return Collection
     */
    public function getActivities()
    {
        // Initializes an array that holds all action_plan_ID for this goal
        $actionPlansIdArray = array();
        foreach ($this->actionPlans as $actionPlan) {
            array_push($actionPlansIdArray, $actionPlan['id']);
        }

        // Retrieve all activities within the goal
        $activities = Activity::select('id', 'action_plan_id', 'title', 'a_status', 'created_at', 'updated_at')
            ->whereIn('action_plan_id', $actionPlansIdArray)
            ->get();

        return $activities;
    }
}