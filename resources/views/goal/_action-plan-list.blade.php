    <!-- Action Plan List Cards -->
    <section class="section action-plan-list-card-section">
        <div class="row">

            <!-- 1st card -->
            <div class="col-lg-4">
                {{-- Action Plan Card --}}
                @foreach ($actionPlans as $actionPlan)
                    <div class="card">
                        <div class="card-header">{{ $actionPlan->title }}</div>
                        <div class="card-body">
                            <div class="row align-items-center mt-3 mb-2">
                                <form>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="Add activity" type="text" name="a_title">
                                        <input type="hidden" value="{{ $actionPlan->id }} " name="ap_id"/>
                                        <input type="hidden" value="pending" name="a_status"/>
                                    </div>
                                    <div class="col-1">
                                    <button type="submit" class="btn btn-outline-primary">Submit activity</button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul class=" list-group" id="list">
                                        @foreach ($activities as $activity)
                                            @if ($activity->action_plan_id === $actionPlan->id)
                                                <!-- Activity -->
                                                <li class="list-group-item " id="list0">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <input class="checkbox" name="checkbox" type="checkbox"
                                                                value="checked"
                                                                @if ($activity->a_status === 'completed') checked @endif>
                                                        </div>
                                                        <div class="col-10">
                                                            <span class="p"
                                                                id="text0">{{ $activity->title }}</span>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-danger btn-sm mt-2"
                                                        onClick="deleteList(0)">Delete</button>
                                                    <button class="btn btn-primary btn-sm mt-2"
                                                        onClick="editList(0)">Edit</button>
                                                    <!-- End Activity -->
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- End Action Plan Card --}}
            </div>

            <!-- 2nd card -->
            <!-- <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Strum practice</div>
                    <div class="card-body">
                        <div class="task-input">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <i class="bi bi-list"></i>
                                </div>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Add a new task">
                                </div>
                            </div>
                        </div>
                        <div class="controls">
                            <div class="filters">
                                <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified"
                                    role="tablist">
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button id="all" class="nav-link w-100 active" id="home-tab"
                                            data-bs-toggle="tab" data-bs-target="#bordered-justified-home"
                                            type="button" role="tab" aria-controls="home"
                                            aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button id="pending" class="nav-link w-100" id="profile-tab"
                                            data-bs-toggle="tab" data-bs-target="#bordered-justified-profile"
                                            type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Pending</button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button id="completed" class="nav-link w-100" id="contact-tab"
                                            data-bs-toggle="tab" data-bs-target="#bordered-justified-contact"
                                            type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Completed</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="mt-2" id="taskLists">
                        </ul>
                    </div>
                </div>
            </div> -->

            <!-- 3rd card -->
            <!-- <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Perform at concert</div>
                    <div class="card-body">
                        <div class="row align-items-center mt-3 mb-2">
                            <div class="col-9">
                                <input class="form-control" placeholder="Add activity" type="text" id="inputText">
                            </div>
                            <div class="col-1">
                                <button onclick="addList()" class="btn btn-primary btn-sm">Add</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class=" list-group" id="list"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


            <!-- action plan modal -->
            <div class="col-4" style="padding-left: 0px;">
                <!-- Add action plan button -->
                <div class="d-grid gap-2" style="padding-bottom: 30px;">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#verticalycentered1">
                        Add Action Plan
                    </button>
                </div>

                <div class="modal fade" id="verticalycentered1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('submit-action-plan.store') }}" method="post">
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
                                        <input type="text" class="form-control" name="title">
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="message-text" class="col-form-label">
                                                <strong>Start Date</strong>
                                            </label>
                                            <input type="date" class="form-control" name="start_at">
                                        </div>
                                        <div class="col-6">
                                            <label for="message-text" class="col-form-label">
                                                <strong>Due Date</strong>
                                            </label>
                                            <input type="date" class="form-control" name="end_at">
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
            </div> <!-- / .col -->
        </div> <!-- / .row -->
    </section>
