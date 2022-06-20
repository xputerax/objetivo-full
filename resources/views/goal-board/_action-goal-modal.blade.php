<!-- Edit Modal -->
<div class="modal fade" id="edit{{$goal->id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <strong>Edit Goal</strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div> <!-- / modal-header -->

            <div class="modal-body">
                {!! Form::model($goals, [ 'method' => 'post','route' => ['goal-board.update', $goal->id] ]) !!}
                    <div class="mb-3">
                        {!! Form::label('title', 'Goal Title') !!}
                        {!! Form::text('title', $goal->title, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('description', 'Description') !!}
                        {!! Form::textarea('description', $goal->description, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('due_at', 'Due At') !!}
                        {!! Form::date('due_at', $goal->due_at, ['class' => 'form-control']) !!}
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div><!-- / .modal-footer -->
    </div><!-- / .modal-content -->
  </div><!-- / .modal -->
</div><!-- / .modal -->


<!-- Delete Modal -->
<div class="modal fade" id="delete{{$goal->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Delete Goal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($goals, [ 'method' => 'destroy','route' => ['goal-board.destroy', $goal->id] ]) !!}
                <h4 class="text-center">Are you sure you want to delete Goal?</h4>
                <h5 class="text-center">Title: {{$goal->title}}</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>