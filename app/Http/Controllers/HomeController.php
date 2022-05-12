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
        $this->dashboardService->forUser($request->user());

        $data = [
            'not_started_count' => $this->dashboardService->getNotStartedCount(),
            'in_progress_count' => $this->dashboardService->getInProgressCount(),
            'completed_count' => $this->dashboardService->getCompletedCount(),
        ];

        return view('home', $data);
    }
}
