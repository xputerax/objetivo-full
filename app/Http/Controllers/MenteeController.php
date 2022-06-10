<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MenteeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        // dd($request->user());
        $goals = DB::table('goals')
                    ->select('goals.user_id', 'goals.title', 'goals.description', 'goals.created_at')
                    ->get();
        $mentees = DB::table('users')
                    ->select('users.id', 'users.username')
                    ->get();
        return view('my-mentees', ['user' => $user, 'mentees' => $mentees, 'goals' => $goals]);
    }
}
