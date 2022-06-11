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

    protected $fillable = [
        'title',
        'description',
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
}
