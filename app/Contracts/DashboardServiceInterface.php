<?php

namespace App\Contracts;

interface DashboardServiceInterface
{
    public function forUser($user): void;
    public function getInProgressCount(): int;
    public function getNotStartedCount(): int;
    public function getCompletedCount(): int;
    public function getGoalNotStartedCount(): int;
    public function getGoalInProgressCount(): int;
    public function getGoalCompletedCount(): int;
    public function queryUpdateGoalStatus(): void;
    public function getGoals();
}
