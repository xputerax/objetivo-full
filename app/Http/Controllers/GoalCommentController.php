<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGoalCommentRequest;
use App\Http\Requests\UpdateGoalCommentRequest;
use App\Models\GoalComment;
use App\Models\CommentVote;

class GoalCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGoalCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoalCommentRequest $request)
    {
        $goalComment = new GoalComment;
        $goalComment->goal_id = $request->goalid;
        $goalComment->user_id = $request->userid;
        $goalComment->body = $request->comment;
        $goalComment->save();

        $commentVote = new CommentVote;
        $commentVote->goal_comment_id = $goalComment->id;
        $commentVote->vote_type = $request->votetype;
        $commentVote->save();

        return redirect()->route('goal.show',$request->goalid);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoalComment  $goalComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoalComment $goalComment)
    {
        $goalComment->delete();

        return redirect()->route('goal.show',$goalComment['goal_id']);
    }
}
