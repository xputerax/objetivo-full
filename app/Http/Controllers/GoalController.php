<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goal;
use App\Models\User;
use App\Models\ActionPlan;
use App\Models\Activity;
use App\Contracts\GoalServiceInterface;
use App\Contracts\MentorServiceInterface;
use App\Http\Requests\AssignMentorRequest;
use App\Http\Requests\UpdateGoalRequest;
use App\Http\Requests\StoreGoalRequest;

class GoalController extends Controller
{
    private $goalService;
    private $mentorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(GoalServiceInterface $goalService, MentorServiceInterface $mentorService) 
    {
        $this->middleware('auth');
        $this->goalService = $goalService;
        $this->mentorService = $mentorService;
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
     * @param  \Illuminate\Http\StoreGoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoalRequest $request)
    {

        $goal = new Goal;
        $goal->user_id = $request->user_id;
        $goal->title = $request->title;
        $goal->description = $request->description;
        $goal->smart_goal = $request->smart_goal;
        $goal->g_status = "not_started";
        $goal->due_at = $request->due_at;
        $goal->last_viewed_at = now();
        $goal->created_at = now();
        $goal->updated_at = now();
        $goal->save();
        
        return redirect("/goal-board");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $goalId
     * @return \Illuminate\Http\Response
     */
    public function show($goalId)
    {   
        $this->goalService->queryUpdateActivityStatus();
        $this->goalService->queryUpdateLastViewedAt($goalId);

        $user = auth()->user();

        $data = [
            'goal' => $this->goalService->getGoalByID($goalId),
            'user' => $user,
            'actionPlans' => $this->goalService->getActionPlans($goalId),
            'activities' => $this->goalService->getActivities(),
            'comments' => $this->goalService->getComments($goalId),
            'percentageCompleted' => $this->goalService->getPercentageCompleted($goalId),
            'allUsers' => User::all(),
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
     * @param  \App\Http\Requests\UpdateGoalRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoalRequest $request, $id)
    {
        $goal = Goal::find($id);
        
        $goal->title = $request->title;
        $goal->description = $request->description;
        // $goal->mentor_email = $request->mentor_email;
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

    public function updateGoalMentor(AssignMentorRequest $request)
    {
        // dd($request);
        $mentor_id = $this->mentorService->getMentorId($request->email);
        $isValid = $this->mentorService->setMentor($mentor_id, $request->goal_id);
        if($isValid == true){
            return redirect()->back()->with('successmessage', 'Mentor assigned successfully!');
        }else{
            return redirect()->back()->with('errormessage', "User not found! Please try again with a valid user email.");
        };
    }
}
