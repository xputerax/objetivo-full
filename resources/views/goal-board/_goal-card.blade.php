@php
use Carbon\Carbon;
use App\Services\GoalService;
@endphp

<!-- Goal Card -->
@foreach ($goals as $goal)
    <div class="col-md-4 col-sm-6 col-lg-3">
        <div class="card info-card customers-card">
            <div class="card-body">
                {{-- TODO: change the route dynamically instead of redireecting to goal-board.index --}}
                <a class="card-title" href="{{ route('goal.show', [$goal->id]) }}">
                    <p class="fs-7 fw-bold"></p>
                    <p class="fs-7 fw-bold">{{ $goal->title }}</p> <br>
                </a>

                <div class="d-flex align-items-center">
                    <div>
                        <div id="pieChart{{ $goal->id }}" style="min-height: 200px;" class="echart"></div>
                        <p class="fs-7 fw-bold"></p>
                        <p class="fs-7 fw-bold">Due Date: {{ $goal->due_at->toFormattedDateString() }}</p>
                        <p class="fs-7 fw-bold">Mentor's Email: {{ $goal->mentor_email }}</p>
                        <div class="d-grid gap-2 d-md-block">
                            <div class= "row">
                                <div class= "col-6">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editGoal">
                                Edit
                            </button>
                        </div>
                        <div class= "col-6">
                            <form action="{{ route('delete-goal-card.destroy', $goal) }}" method="post">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        @method('delete')
                                        @csrf
                                    </form>
                            </div>
</div>
                        </div>  
                    </div>
                </div>
            </div> <!-- / .card-body -->
        </div> <!-- / .card -->
    </div>
    <!-- End Goal Card -->

    <!-- Edit Goal Modal-->
    <div class="modal fade" id="editGoal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('goal-card.update', [$goal->id]) }}" method="post">
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
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $goal->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">
                                    <strong>Goal Description</strong>
                                </label>
                                <textarea class="form-control" rows="5" cols="50" id="message-text" name="description" value="{{ old('description') ?? $goal->description }}" > </textarea>
                            </div>

                            <!-- <div class="mb-3">
                                <label for="inputAddress" class="form-label">
                                    <strong>Mentor Email</strong>
                                </label>
                                <input type="email" class="form-control" id="inputAddress" value="{{ old('mentor_email') ?? $goal->mentor_email }}">
                            </div> -->

                            <div class="mb-3">
                                <label for="inputTarget" class="form-label">
                                    <strong>Specific and Measurable Target</strong>
                                </label>
                                <input type="text" class="form-control" id="inputTarget" name="smart_goal" value="{{ old('smart_goal') ?? $goal->smart_goal }}">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <label for="message-text" class="col-form-label">
                                        <strong>Due Date</strong>
                                    </label>
                                    <input type="date" class="form-control" name="due_at" value="{{ old('due_at', date('Y-m-d')) ?? $goal->due_at }}">
                                </div>
                            </div> <!-- / .row -->

                            <hr>
                    </div> <!-- / .modal-body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div> <!-- / .modal-footer -->
                    <input type="hidden" value="{{ $user->id }} " name="user_id"/>

                </div> <!-- / .modal-content -->
            </form>
        </div> <!-- / .modal -->
    </div> <!-- / .modal -->

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
                    data: [
                        {
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
@endforeach