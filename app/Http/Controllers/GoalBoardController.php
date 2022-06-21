<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGoalRequest;
use App\Http\Requests\UpdateGoalRequest;
use App\Models\Goal;
use Illuminate\Http\Request;
use App\Contracts\GoalServiceInterface;

class GoalBoardController extends Controller
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
        $this->goalService->forUser($user = $request->user());

        $data = [
            'user' => $user,
            'goals' => $this->goalService->getGoals(),
        ];

        return view('goal-board', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoalRequest  $request
     * @param  string  $id
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
        $goal->delete();

        return redirect("/goal-board");
    }
}
