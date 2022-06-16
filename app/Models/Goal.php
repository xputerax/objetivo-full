<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $g_status
 * @property string $smart_goal
 * @property Carbon $due_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property User $user The user that owns this goal
 * @property Collection<ActionPlan> $action_plans   The list of action plans associated with this goal
 * @property Collection<Activity> $activities   The list of activities associated with this goal
 */
class Goal extends Model
{
    use HasFactory;

    const GOAL_NOT_STARTED = 'not_started';
    const GOAL_IN_PROGRESS = 'in_progress';
    const GOAL_COMPLETED = 'completed';

    protected $fillable = [
        'title',
        'description',
        'g_status',
        'smart_goal',
        'due_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'due_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function action_plans()
    {
        return $this->hasMany(ActionPlan::class);
    }

    public function activities()
    {
        return $this->hasManyThrough(Activity::class, ActionPlan::class);
    }

    public function mentor()
    {
        return $this->hasMany(GoalMentors::class);
    }

    public function goalComment() {
        return $this->hasMany(GoalComment::class);
    }
}
