<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MentorController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $goals = DB::table('goal_mentors')
            ->join('users', 'goal_mentors.mentor_id', '=', 'users.id')
            ->join('goals', 'goal_mentors.goal_id', '=', 'goals.id')
            ->select('goals.user_id', 'goal_mentors.mentor_id', 'users.username', 'goal_mentors.goal_id', 'goals.id', 'goals.title', 'goals.description', 'goals.created_at')
            ->where('goals.user_id', "=", auth()->id())
            ->orderBy('goal_mentors.mentor_id', 'asc')
            ->get();

        return view('my-mentors', ['user' => $user, 'goals' => $goals]);
    }
}
