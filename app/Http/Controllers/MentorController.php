<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        return view('my-mentors', ['user' => $user]);
    }
}
