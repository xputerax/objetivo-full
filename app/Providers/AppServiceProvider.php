<?php

namespace App\Providers;

use App\Services\DashboardService;
use App\Contracts\DashboardServiceInterface;
use App\Contracts\CommentServiceInterface;
use App\Services\CommentService;
use Illuminate\Support\ServiceProvider;
use App\Services\GoalService;
use App\Contracts\GoalServiceInterface;

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
        $this->app->bind(CommentServiceInterface::class, function () {
            return new CommentService();
        });
        $this->app->bind(GoalServiceInterface::class, function () {
            return new GoalService();
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
