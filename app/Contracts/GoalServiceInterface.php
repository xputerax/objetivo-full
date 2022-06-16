<?php

namespace App\Contracts;

interface GoalServiceInterface
{
    public function forUser($user);
    public function getGoals();
    public function getGoalByID($goalid);
    public function getActionPlans($goalid);
    public function getActivities();
    public function getComments($goalid);
    public function getInterval($from_date);
}