<?php

namespace App\Contracts;

interface DashboardServiceInterface
{
    public function forUser($user): void;
    public function getInProgressCount(): int;
    public function getNotStartedCount(): int;
    public function getCompletedCount(): int;
}
