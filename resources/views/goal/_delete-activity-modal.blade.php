<!-- Delete Activity Confirmation Modal -->
<div class="modal fade" id="deleteActivityModal-{{ $activity->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deleting an Activiy Plan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>You have selected to delete the <strong>{{ $activity->title }}</strong> action plan.</p>
                <p>Please confirm your deletion.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('delete-activity.destroy', $activity) }}" method="post">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @csrf
                    @method('delete')
                </form>
                <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
