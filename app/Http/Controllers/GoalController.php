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
use App\Contracts\GoalServiceInterface;

class GoalController extends Controller
{
    private $goalService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(GoalServiceInterface $goalService)
    {
        $this->middleware('auth');
        $this->goalService = $goalService;
    }

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
     * @param  int  $goalId
     * @return \Illuminate\Http\Response
     */
    public function show($goalId)
    {
        $user = auth()->user();

        $data = [
            'goal' => $this->goalService->getGoalByID($goalId),
            'user' => $user,
            'actionPlans' => $this->goalService->getActionPlans($goalId),
            'activities' => $this->goalService->getActivities(),
            'comments' => $this->goalService->getComments($goalId),
        ];

        return view('goal', $data);
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
