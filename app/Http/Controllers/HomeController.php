<?php

namespace App\Http\Controllers;

use App\Contracts\DashboardServiceInterface;
use Illuminate\Http\Request;
use App\Models\Goal;

class HomeController extends Controller
{
    private $dashboardService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DashboardServiceInterface $dashboardService)
    {
        $this->middleware('auth');
        $this->dashboardService = $dashboardService;
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $this->dashboardService->forUser($user = $request->user());

        $data = [
            'not_started_count' => $this->dashboardService->getNotStartedCount(),
            'in_progress_count' => $this->dashboardService->getInProgressCount(),
            'completed_count' => $this->dashboardService->getCompletedCount(),
            'user' => $user,
        ];

        return view('home', $data);
    }

    /** Function to check due dates for each goal of the current user
     * 
     * @param Request $request
     * @return Array
     */
    public function checkDueDate(Request $request) {
        $user = $request->user();
        $userid = $user->id;
        //Get id, user_id and due date for current user from database
        //Returns json
        $reminderdata = Goal::select('id','user_id','title','due_at')
            ->where('user_id','=',$userid)
            ->get();

        //Decode the json file
        $datarr = json_decode($reminderdata, true);
        
        //Calculate the interval(in hours) from current time to due date for each goal in the database
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timeformat = 'Y-m-d H:i:s';
        foreach ($datarr as $item) {
            //Date in Date object
            $duedate = date($timeformat,strtotime($item['due_at']));
            $currdate = date($timeformat);

            //Calculate difference in hours
            $hours = abs(strtotime($duedate) - strtotime($currdate))/3600;
            $hours += 8; //Correct the timezone
            $hours = (int)$hours; //Convert to integer
        }
    }
}
