<?php

namespace App\Http\Controllers;

use App\Contracts\DashboardServiceInterface;
use Illuminate\Http\Request;

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
        $this->dashboardService->queryUpdateGoalStatus();
        $this->dashboardService->forUser($user = $request->user());

        $data = [
            'not_started_count' => $this->dashboardService->getGoalNotStartedCount(),
            'in_progress_count' => $this->dashboardService->getGoalInProgressCount(),
            'completed_count' => $this->dashboardService->getGoalCompletedCount(),
            'goals' => $this->dashboardService->getGoals(),
            'user' => $user,
        ];

        return view('home', $data);
    }
}
