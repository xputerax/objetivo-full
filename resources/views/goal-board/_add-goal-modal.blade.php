<div class="modal fade" id="add_goal_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <strong>Add Goal</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div> <!-- / modal-header -->

            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="inputNanme4" class="form-label">
                            <strong>Goal Title</strong>
                        </label>
                        <input type="text" class="form-control" id="inputNanme4">
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">
                            <strong>Goal Description</strong>
                        </label>
                        <textarea class="form-control" rows="5" cols="50" id="message-text"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="inputAddress" class="form-label">
                            <strong>Mentor Email</strong>
                        </label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="oyen@gmail.com">
                    </div>

                    <div class="mb-3">
                        <label for="inputTarget" class="form-label">
                            <strong>Specific and Measurable Target</strong>
                        </label>
                        <input type="text" class="form-control" id="inputTarget" placeholder="Type in your target">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="message-text" class="col-form-label">
                                <strong>Start Date</strong>
                            </label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="col-6">
                            <label for="message-text" class="col-form-label">
                                <strong>Due Date</strong>
                            </label>
                            <input type="date" class="form-control">
                        </div>
                    </div> <!-- / .row -->

                    <hr>

                    <!--Action Plan & Action Plan List Cards-->
                    <section class="action-plan-section">
                        <strong>Action Plan</strong> <br>

                        <div class="row">
                            <div class="col-lg-12">
                                <input class="form-control mb-2" placeholder="Action Plan" type="text" id="inputAction">

                                <ul id="actionPlans"></ul>

                                <button onclick="addAction()" class="btn btn-primary btn-sm w-100 mt-4">
                                    + Add New Action Plan
                                </button>
                            </div> <!-- / .col -->
                        </div> <!-- / .row -->
                    </section>
                </form>
            </div> <!-- / .modal-body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div> <!-- / .modal-footer -->
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal -->
</div> <!-- / .modal -->
