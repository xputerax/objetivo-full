<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActionPlanRequest;
use App\Http\Requests\UpdateActionPlanRequest;
use App\Models\ActionPlan;

class ActionPlanController extends Controller
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
     * @param  \App\Http\Requests\StoreActionPlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActionPlanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActionPlan  $actionPlan
     * @return \Illuminate\Http\Response
     */
    public function show(ActionPlan $actionPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActionPlan  $actionPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(ActionPlan $actionPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActionPlanRequest  $request
     * @param  \App\Models\ActionPlan  $actionPlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActionPlanRequest $request, ActionPlan $actionPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActionPlan  $actionPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActionPlan $actionPlan)
    {
        //
    }
}
