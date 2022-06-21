<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {
        $activity = new Activity;
        $activity->action_plan_id = $request->ap_id;
        $activity->title = $request->a_title;
        $activity->a_status = 'pending';
        $activity->created_at = now();
        $activity->updated_at = now();
        $activity->save();

        return redirect()->route('goal.show',$request->goal_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityRequest $request, $activityID)
    {
        $activity = Activity::find($activityID);
        $activity->a_status = $request->astatus;
        $activity->save();

        return redirect()->route('goal.show',$request->goal_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->route('goal.show', [ 'id'=> $activity->action_plan->goal->id ]);
    }
}
