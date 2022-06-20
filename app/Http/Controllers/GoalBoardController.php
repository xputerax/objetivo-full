<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGoalRequest;
use App\Http\Requests\UpdateGoalRequest;
use App\Models\Goal;
use Illuminate\Http\Request;
use App\Contracts\GoalServiceInterface;

class GoalBoardController extends Controller
{

    private $GoalService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(GoalServiceInterface $GoalService)
    {
        $this->middleware('auth');
        $this->GoalService = $GoalService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->GoalService->forUser($user = $request->user());

        $data = [
            'user' => $user,
            'goals' => $this->GoalService->getGoals(),
        ];

        return view('goal-board', $data);
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
     * @param  \App\Http\Requests\StoreGoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoalRequest  $request
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */


    public function update(UpdateGoalRequest $request, $id)
    {
        $goal = Goal::find($id);
        $goal->title = $request->title;
        $goal->description = $request->description;
        $goal->smart_goal = $request->smart_goal;
        $goal->due_at = $request->due_at;
        $goal->smart_goal = $request->smart_goal;
        $goal->updated_at = now();
        $goal->save();

        return redirect("/goal-board");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {

        Goal::destroy($goal['id']);

        return redirect("/goal-board");
    }
}