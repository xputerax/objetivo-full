<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenteeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        return view('my-mentees', ['user' => $user]);
    }
}
