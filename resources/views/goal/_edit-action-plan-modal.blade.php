<!-- Edit action plan modal -->
<div class="modal fade" id="editActionPlanModal-{{ $actionPlan->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('action-plan.update', $actionPlan['id']) }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="goal_id" value="{{ $goal->id }}">

                <div class="modal-header">
                    <h5 class="modal-title"><strong>Edit Action Plan</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div> <!-- / .modal-header -->
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="inputNanme4" class="form-label">
                            <strong>Action Plan Title</strong>
                        </label>
                        <input type="text" class="form-control" name="title"
                            value="{{ old('title') ?? $actionPlan->title }}">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="message-text" class="col-form-label">
                                <strong>Start Date</strong>
                            </label>
                            <input type="date" class="form-control" name="start_at"
                                value="{{ old('start_at', date('Y-m-d')) ?? $actionPlan->start_at }}">
                        </div>
                        <div class="col-6">
                            <label for="message-text" class="col-form-label">
                                <strong>Due Date</strong>
                            </label>
                            <input type="date" class="form-control" name="end_at"
                                value="{{ old('end_at', date('Y-m-d')) ?? $actionPlan->end_at }}">
                        </div>
                    </div>
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
</div>
<!-- / .modal -->
