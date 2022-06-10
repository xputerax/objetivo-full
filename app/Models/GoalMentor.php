<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoalMentor extends Model
{
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function mentor()
    {
        return $this->belongsTo(User::class);
    }
}
