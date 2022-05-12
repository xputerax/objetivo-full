<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGoalCommentRequest;
use App\Http\Requests\UpdateGoalCommentRequest;
use App\Models\GoalComment;

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
        //
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
        //
    }
}