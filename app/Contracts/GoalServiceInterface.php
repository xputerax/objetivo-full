<?php

namespace App\Contracts;

interface GoalServiceInterface
{
    public function forUser($user);
    public function getGoals();
    public function getActionPlans();
    public function getActivities();
}