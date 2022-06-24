@php
use Carbon\Carbon;
use App\Services\GoalService;
@endphp

<!-- Goal Card -->
<div class="col-md-4 col-sm-6 col-lg-3">
    <div class="card info-card customers-card">
        <div class="card-body">
            <a class="card-title" href="{{ route('goal.show', [$goal->id]) }}">
                <p class="fs-7 fw-bold"></p>
                <p class="fs-7 fw-bold">{{ $goal->title }}</p> <br>
            </a>

            <div class="d-flex align-items-center">
                <div>
                    <div id="pieChart{{ $goal->id }}" style="min-height: 200px;" class="echart"></div>
                    <p class="fs-7 fw-bold"></p>
                    <p class="fs-7 fw-bold">Due Date: {{ $goal->due_at->toFormattedDateString() }}</p>
                    {{-- <p class="fs-7 fw-bold">Mentor's Email: {{ $goal->mentor_email }}</p> --}}
                    <div class="d-grid gap-2 d-md-block">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editGoal-{{ $goal->id }}">
                                    Edit
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteGoal-{{ $goal->id }}">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .card-body -->
    </div> <!-- / .card -->
</div>
<!-- End Goal Card -->

@php
    $percentageCompleted = GoalService::getPercentageCompleted($goal->id);
@endphp

<script>
    var colorPalette = ['#26de81', '#fed330'];
    document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#pieChart{{ $goal->id }}")).setOption({
            tooltip: {
                trigger: 'item',
                formatter: '{c}%'
            },
            series: [{
                name: '',
                type: 'pie',
                radius: '70%',
                color: colorPalette,
                data: [{
                        value: {{ $percentageCompleted }},
                        name: 'Completed'
                    },
                    {
                        value: {{ 100 - $percentageCompleted }},
                        name: 'Pending'
                    }
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
    });
</script>

<!-- Edit Goal Modal-->
<div class="modal fade" id="editGoal-{{ $goal->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('goal-card.update', ['id' => $goal->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Edit Goal</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> <!-- / modal-header -->

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            <strong>Goal Title</strong>
                        </label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title') ?? $goal->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">
                            <strong>Goal Description</strong>
                        </label>
                        <textarea class="form-control" rows="3" id="message-text" name="description"> {{ old('description') ?? $goal->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="inputTarget" class="form-label">
                            <strong>Specific and Measurable Target</strong>
                        </label>
                        <input type="text" class="form-control" id="inputTarget" name="smart_goal"
                            value="{{ old('smart_goal') ?? $goal->smart_goal }}" required>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="message-text" class="col-form-label">
                                <strong>Due Date</strong>
                            </label>
                            <input type="date" class="form-control" id="due_at" name="due_at"
                                value="{{ old('due_at', date('Y-m-d')) ?? $goal->due_at }}" required>
                        </div>
                    </div> <!-- / .row -->

                    <hr>
                </div> <!-- / .modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div> <!-- / .modal-footer -->
                <input type="hidden" value="{{ $user->id }} " name="user_id" />
            </form>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal -->
</div> <!-- / .modal -->

<!-- Delete Goal Modal -->
<div class="modal fade" id="deleteGoal-{{ $goal->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deleting a Goal</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>You have selected to delete the <strong>{{ $goal->title }}</strong> goal.</p>
                <p>Please confirm your deletion.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('delete-goal-card.destroy', $goal) }}" method="post">
                    @csrf
                    <button type="button" class="btn btn-danger">Delete</button>
                    @method('delete')
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


