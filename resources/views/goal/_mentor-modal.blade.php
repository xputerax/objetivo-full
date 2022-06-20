<!-- Mentor Modal -->
<div class="modal fade" id="mentorModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">
                    Manage Mentor
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('submit-mentor.updateGoalMentor') }}" method="post">
                    @csrf
                    <label for="modal-email" class="form-label">Email address:</label>
                    <input type="email" name="email" class="form-control" placeholder="e.g. mentor@gmail.com"/>
                    <input type="hidden" value="{{ $goal->id }}" name="goal_id"/>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
                </form>
        </div>
    </div>
</div>
