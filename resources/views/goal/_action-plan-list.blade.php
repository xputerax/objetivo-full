  <!-- Action Plan List Cards -->
  <section class="section action-plan-list-card-section">
        <div class="row justify-content-end">
            <!-- Add action plan button -->
            <div class="col-4 align-self-end">
                <div class="d-grid gap-2" style="padding-bottom: 30px;">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addActionPlanModal">
                        Add Action Plan
                    </button>
                </div>
            </div>
        </div> <!-- end .row -->

        <div class="row">
        @foreach ($actionPlans as $actionPlan)
            <div class="col-lg-4">
                @include('goal._action-plan-card', ['actionPlan' => $actionPlan, 'activities' => $activities])
            </div>
        @endforeach
        </div> <!-- / .row -->

        @foreach ($actionPlans as $actionPlan)
        @include('goal._delete-action-plan-modal', ['actionPlan' => $actionPlan])
        @endforeach

        @include('goal._add-action-plan-modal', ['goal' => $goal])

        <!-- Edit action plan modals -->
        @foreach ($actionPlans as $actionPlan)
        @include('goal._edit-action-plan-modal', [ 'actionPlan' => $actionPlan, 'goal' => $goal ])
        @endforeach

        @foreach ($activities as $activity)
        @include('goal._delete-activity-modal', [ 'activity' => $activity ])
        @endforeach
  </section>
