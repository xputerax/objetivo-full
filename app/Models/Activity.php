<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $action_plan_id
 * @property string $title
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property ActionPlan $action_plan
 */
class Activity extends Model
{
    const ACTIVITY_NOT_STARTED = 'not_started';
    const ACTIVITY_IN_PROGRESS = 'in_progress';
    const ACTIVITY_COMPLETED = 'completed';

    use HasFactory;

    protected $fillable = [
        'title',
        'status',
    ];

    public function action_plan()
    {
        return $this->belongsTo(ActionPlan::class);
    }
}
