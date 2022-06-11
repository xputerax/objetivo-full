<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GoalMentors extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'goal_mentors';

    public function goals(Model $model)
    {
        return $this->belongsTo(Goal::class);
    }

    public function users($model)
    {
        return $this->belongsTo(User::class);
    }
}
