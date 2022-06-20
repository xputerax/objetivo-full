<!-- action plan modal -->
<div class="modal fade" id="verticalycentered1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('action-plan.update') }}" method="post" novalidate>
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Add Action Plan</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div> <!-- / .modal-header -->

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="inputNanme4" class="form-label">
                            <strong>Action Plan Title</strong>
                        </label>
                        <input name="title" type="text" class="form-control" id="name"
                        value="{{ old('title') ?? $actionPlan->title }}">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="message-text" class="col-form-label">
                                <strong>Start Date</strong>
                            </label>
                            <input name="start_at" type="date" class="form-control" id="start_at"
                            value="{{ old('start_at') ?? $actionPlan->start_at }}">
                        </div>
                        <div class="col-6">
                            <label for="message-text" class="col-form-label">
                                <strong>Due Date</strong>
                            </label>
                            <input name="end_at" type="date" class="form-control" id="end_at"
                            value="{{ old('end_at') ?? $actionPlan->end_at }}">
                        </div>
                    </div>
                    <input type="hidden" value="{{ $goal->id }} " name="goal_id"/>

                    <hr>

                    <!--Action Plan & Action Plan List Cards-->
                    <!-- <section class="action-plan-section">
                        <strong>Activities</strong> <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <input class="form-control mb-2" placeholder="Activity" type="text"
                                    id="inputAction">
                                <ul id="actionPlans"></ul>
                                <button onclick="addAction()" class="btn btn-primary btn-sm w-100 mt-4">
                                    + Add New Activity
                                </button>
                            </div>
                        </div>
                    </section> -->
                </div> <!-- / .modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-outline-primary">Save Changes</button>
                </div> <!-- / .modal-footer -->

            </form>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal-dialog -->
</div> <!-- / .modal -->