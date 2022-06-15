<?php

namespace App\Contracts;

interface CommentServiceInterface
{
    public function forGoal($goal);
    public function getCommentsByGoal();
}