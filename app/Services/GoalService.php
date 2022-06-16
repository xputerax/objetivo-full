<?php

namespace App\Services;

use App\Contracts\GoalServiceInterface;
use App\Models\Goal;

class GoalService implements GoalServiceInterface
{
    private $user;

    public function forUser($user)
    {
        $this->user = $user;
    }

    public function getGoals()
    {
        $goals = Goal::select('id','user_id','title','description','smart_goal','due_at','created_at','updated_at')
            ->where('user_id',2)  //Use $this->user->id for current user
            ->get();
        
        return $goals;
    }

    public function getActionPlans() 
    {

    }

    public function getActivities()
    {

    }
}