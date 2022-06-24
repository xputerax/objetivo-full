<!-- Delete Action Plan Confirmation Modal -->
<div class="modal fade" id="deleteActionPlanModal-{{ $actionPlan->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deleting an Action Plan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    You have selected to delete the <strong>{{ $actionPlan->title }}</strong> action plan.
                </p>
                <p>Please confirm your deletion.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('delete-action-plan.destroy', $actionPlan) }}" method="post">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @method('delete')
                    @csrf
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
