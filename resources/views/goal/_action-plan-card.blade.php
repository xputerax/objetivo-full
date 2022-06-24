<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-9">
                <h6 class="card-desc-title px-3" style="font-size: 16px;">{{ $actionPlan->title }}
                </h6>
            </div>
            <div class="col-1">
                <button type="button" class="btn card-desc-title" data-bs-toggle="modal"
                    data-bs-target="#editActionPlanModal-{{ $actionPlan->id }}">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </div>
            <div class="col-1">
                <button type="submit" class="btn card-desc-title" data-bs-toggle="modal"
                    data-bs-target="#deleteActionPlanModal-{{ $actionPlan->id }}">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
        <p class="px-3">Due Date: {{ $actionPlan['end_at']->toFormattedDateString() }}</p>
    </div>

    <div class="card-body">
        <!-- Add Activity Section -->
        <form action="{{ route('submit-activity.store') }}" method="post">
            @csrf
            <div class="row justify-content-center mt-3 mb-2">
                <div class="col-10">
                    <input class="form-control" placeholder="Add activity" type="text"
                        name="a_title">
                    <input type="hidden" value="{{ $actionPlan->id }}" name="ap_id" />
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-primary">Add</button>
                </div>
                <input type="hidden" value="{{ $goal->id }}" name="goal_id" />
            </div>
        </form>

        <!-- Activity List -->
        <div class="row">
            <div class="col-12">
                <ul class=" list-group" id="list">
                    @foreach ($activities as $activity)
                        @if ($activity->action_plan_id === $actionPlan->id)
                            <!-- Activity -->
                            <li class="list-group-item" id="list0">
                                <div class="row">
                                    <form
                                        action="{{ route('mark-activity.update', ['activityID' => $activity->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('put')
                                        <div class="col-1">
                                            <input type="hidden" value="{{ $goal->id }}"
                                                name="goal_id" />
                                            <input name="a_checkbox" class="checkbox" type="checkbox"
                                                onChange="this.form.submit()"
                                                @if ($activity->a_status === 'completed') checked @endif />

                                            @if ($activity->a_status === 'completed')
                                                <input type="hidden" name="astatus"
                                                    value="pending" />
                                            @else
                                                <input type="hidden" name="astatus"
                                                    value="completed" />
                                            @endif

                                        </div>
                                    </form>
                                    <div class="col-10">
                                        @if ($activity->a_status === 'completed')
                                            <s>{{ $activity->title }}</s>
                                        @else
                                            {{ $activity->title }}
                                        @endif
                                    </div>
                                </div>
                                <!-- Delete Activity -->
                                <button type="submit" class="btn btn-danger btn-sm mt-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteActivityModal-{{ $activity->id }}">
                                    Delete
                                </button>
                                <!-- End Activity -->
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
