<div class="modal fade" id="add_goal_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('submit-goal.store') }}" method="post">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title">
                        <strong>Add Goal</strong>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div> <!-- / modal-header -->
                

                <div class="modal-body">
                        <div class="mb-3">
                            <label for="inputNanme4" class="form-label">
                                <strong>Goal Title</strong>
                            </label>
                            <input type="text" class="form-control" id="inputNanme4" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">
                                <strong>Goal Description</strong>
                            </label>
                            <textarea class="form-control" rows="5" cols="50" id="message-text" name="description" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="inputTarget" class="form-label">
                                <strong>Specific and Measurable Target</strong>
                            </label>
                            <input type="text" class="form-control" id="inputTarget" name="smart_goal" placeholder="Type in your target" required>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <label for="message-text" class="col-form-label">
                                    <strong>Due Date</strong>
                                </label>
                                <input type="date" name="due_at" class="form-control" required>
                            </div>
                        </div> <!-- / .row -->

                        <hr>
                </div> <!-- / .modal-body-->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Save Changes</button>
                </div> <!-- / .modal-footer -->

                <input type="hidden" value="{{ $user->id }} " name="user_id"/>

            </form>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal -->
</div> <!-- / .modal -->
