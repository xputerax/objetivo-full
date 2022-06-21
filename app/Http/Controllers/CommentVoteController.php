<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentVoteRequest;
use App\Http\Requests\UpdateCommentVoteRequest;
use App\Models\CommentVote;

class CommentVoteController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentVoteRequest  $request
     * @param  int $commentVoteID
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentVoteRequest $request, $commentVoteID)
    {
        $commentVote = CommentVote::find($commentVoteID);
        $commentVote->vote_type = $request->votetype;
        $commentVote->save();

        return redirect()->route('goal.show',$request->goalid);
    }
}
