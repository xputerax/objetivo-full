<?php

namespace App\Services;

use App\Contracts\GoalServiceInterface;
use App\Models\Goal;
use App\Models\ActionPlan;
use App\Models\Activity;
use App\Models\GoalComment;
use App\Models\User;

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

    /**
     * Get all comments for the specified goal id
     * 
     * @param $goalid
     * @return Collection
     */
    public function getComments($goalid) 
    {
        $comments = GoalComment::select('id','goal_id','user_id','body','created_at','updated_at')
            ->where('goal_id',$goalid)
            ->latest()
            ->get();

        //Append name to an individual model
        $users = User::all();
        foreach($comments as $comment) 
        {
            foreach($users as $user) 
            {
                if($comment['user_id'] == $user['id']) 
                {
                    $comment['username'] = $user['name'];
                    $comment['timeinterval'] = $this->getInterval($comment['created_at']);
                    break;
                }
            }
        }

        return $comments;
    }

    public function getInterval($from_date) {
        $timeformat = 'Y-m-d H:i:s';
        //Date in Date object
        $duedate = date($timeformat,strtotime($from_date));
        $currdate = date($timeformat);

        //Calculate difference in hours
        $hours = (strtotime($duedate) - strtotime($currdate))/3600;
        $hours -= 8; //Correct the timezone
        $hours = (int)$hours; //Convert to integer

        return abs($hours);
    }
}