<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $action_plan_id
 * @property string $title
 * @property string $a_status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property ActionPlan $action_plan
 */
class Activity extends Model
{
    const ACTIVITY_PENDING = 'pending';
    const ACTIVITY_COMPLETED = 'completed';

    use HasFactory;

    protected $fillable = [
        'title',
        'a_status',
    ];

    public function action_plan()
    {
        return $this->belongsTo(ActionPlan::class);
    }
}
