<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoalComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'created_at',
        'updated_at',
        'due_at',
    ];

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentVote()
    {
        return $this->hasOne(CommentVote::class);
    }
}
