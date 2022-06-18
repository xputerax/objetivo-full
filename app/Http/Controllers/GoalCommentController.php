<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGoalCommentRequest;
use App\Http\Requests\UpdateGoalCommentRequest;
use App\Models\GoalComment;
use App\Models\CommentVote;

class GoalCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
        $goalComment->created_at = now();
        $goalComment->updated_at = now();
        $goalComment->save();
        
        $commentVote = new CommentVote;
        $commentVote->goal_comment_id = $goalComment->id;
        $commentVote->vote_type = $request->votetype;
        $commentVote->created_at = now();
        $commentVote->updated_at = now();
        $commentVote->save();

        return redirect()->route('goal.show',$request->goalid);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoalComment  $goalComment
     * @return \Illuminate\Http\Response
     */
    public function show(GoalComment $goalComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoalComment  $goalComment
     * @return \Illuminate\Http\Response
     */
    public function edit(GoalComment $goalComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoalCommentRequest  $request
     * @param  \App\Models\GoalComment  $goalComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoalCommentRequest $request, GoalComment $goalComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoalComment  $goalComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoalComment $goalComment)
    {
        GoalComment::destroy($goalComment['id']);

        return redirect()->route('goal.show',$goalComment['goal_id']);
    }
}
