<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goal;
use App\Models\User;
use App\Models\ActionPlan;
use App\Models\Activity;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $actionPlans = DB::table('action_plans')
        //     ->select('action_plans.id', 'action_plans.goal_id', 'action_plans.title')
        //     ->get();
        // $activities = DB::table('activities')
        //     ->select('activities.id', 'activities.action_plan_id', 'activities.title')
        //     ->get();

        $actionPlans = DB::select('SELECT * FROM action_plans WHERE goal_id < 6');
        $activities = DB::select('SELECT * FROM activities');
        $user = $request->user();
        return view('goal', [
            'user' => $user,
            'actionPlans' => $actionPlans,
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Gets ID from table GOALS
        $goal = Goal::find($id);
        $user = auth()->user();
        $actionPlans = ActionPlan::select('id', 'goal_id', 'title', 'ap_status', 'start_at', 'end_at')
            ->where('goal_id', $id)
            ->get();

        // Initializes an array that holds all action_plan_ID for this goal
        $actionPlansIdArray = array();
        foreach ($actionPlans as $actionPlan) {
            array_push($actionPlansIdArray, $actionPlan['id']);
        }

        // Retrieve all activities within the goal
        $activities = Activity::select('id', 'action_plan_id', 'title', 'a_status', 'created_at', 'updated_at')
            ->whereIn('action_plan_id', $actionPlansIdArray)
            ->get();
        
        return view('goal', [
            'goal' => $goal,
            'user' => $user,
            'actionPlans' => $actionPlans,
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
