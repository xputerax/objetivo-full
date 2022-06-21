<?php

namespace App\Services;

use App\Contracts\MentorServiceInterface;
use App\Models\User;
use App\Models\GoalMentors;

class MentorService implements MentorServiceInterface
{
    public function setMentor($mentor_id, $goal_id)
    {
        if($mentor_id == -1){
            return false;
        }else{
            $mentor = new GoalMentors;
            $mentor->goal_id = $goal_id;
            $mentor->mentor_id = $mentor_id;
            $mentor->save();
            return true;
        }
    }

    public function getMentorId($email)
    {
        if(User::where('email', '=', $email)->exists()){
            $mentor = User::select('id')
            ->where('email', '=', $email)
            ->first();

            $mentor_id = $mentor->id;
            return $mentor_id;
        }
        return -1;
    }
}
