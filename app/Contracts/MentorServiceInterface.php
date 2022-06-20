<?php

namespace App\Contracts;

interface MentorServiceInterface
{
    public function setMentor($mentor_id, $goal_id);
    public function getMentorId($email);
}