<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $goal_id
 * @property string $title
 * @property string $ap_status
 * @property Carbon $start_at
 * @property Carbon $end_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Goal $goal
 * @property Collection<Activity> $activities
 */
class ActionPlan extends Model
{
    use HasFactory;

    const ACTIONPLAN_NOT_STARTED = 'not_started';
    const ACTIONPLAN_IN_PROGRESS = 'in_progress';
    const ACTIONPLAN_COMPLETED = 'completed';

    protected $fillable = [
        'title',
        'ap_status',
        'start_at',
        'end_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
