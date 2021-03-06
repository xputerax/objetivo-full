<?php

namespace App\Providers;

use App\Services\DashboardService;
use App\Contracts\DashboardServiceInterface;
use App\Contracts\CommentServiceInterface;
use App\Services\CommentService;
use Illuminate\Support\ServiceProvider;
use App\Services\GoalService;
use App\Contracts\GoalServiceInterface;
use App\Contracts\MentorServiceInterface;
use App\Services\MentorService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DashboardServiceInterface::class, function () {
            return new DashboardService();
        });
        $this->app->bind(GoalServiceInterface::class, function () {
            return new GoalService();
        });
        $this->app->bind(MentorServiceInterface::class, function () {
            return new MentorService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
