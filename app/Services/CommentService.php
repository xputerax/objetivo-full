<?php

namespace App\Services;

use App\Contracts\CommentServiceInterface;
use App\Models\Goal;
use App\Models\GoalComment;

class CommentService implements CommentServiceInterface
{
    private $goal;

    public function forGoal($goal)
    {
        $this->goal = $goal;
    }

    public function getCommentsByGoal()
    {
        //Get all 
        $commentarr = Goal::select('id','goal_id','user_id','body','created_at')
            ->where('goal_id',$this->goal->id)
            ->get()
            ->toArray();
    }
}