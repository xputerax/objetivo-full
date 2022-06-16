<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MenteeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        // $goals = DB::table('goals')
        //     ->select('goals.user_id', 'goals.title', 'goals.description', 'goals.created_at')
        //     ->get();
        // $mentees = DB::table('users')
        //     ->select('users.id', 'users.username')
        //     ->get();
        // $verification = DB::table('goal_mentors')
        //     ->select('goal_mentors.mentor_id')
        //     ->get();

        $goals = DB::table('goal_mentors')
            ->join('goals', 'goal_mentors.goal_id', '=', 'goals.id')
            ->join('users', 'goals.user_id', '=', 'users.id')
            ->select('goals.user_id', 'goal_mentors.mentor_id', 'users.username', 'goal_mentors.goal_id', 'users.id', 'goals.title', 'goals.description', 'goals.created_at')
            ->where('goal_mentors.mentor_id','=', auth()->id())
            //->distinct()
            ->get();

        return view('my-mentees', ['user' => $user, 'goals' => $goals]);
    }
}
