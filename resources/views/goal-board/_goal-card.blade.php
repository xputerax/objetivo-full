@php
use Carbon\Carbon;
use App\Services\GoalService;
@endphp

<!-- Goal Card 1-->
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
                        {{-- <p class="fs-7 fw-bold">Mentor's Email: oyen@gmail.com</p> --}}
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#nonexistentmodal">
                                Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div> <!-- / .card-body -->
        </div> <!-- / .card -->
    </div>
    <!-- End Goal Card 1 -->

    @php
        $percentageCompleted = GoalService::getPercentageCompleted($goal->id);
    @endphp

    <script>
        var colorPalette = ['#26de81', '#fed330'];
        document.addEventListener("DOMContentLoaded", () => {
            echarts.init(document.querySelector("#pieChart{{ $goal->id }}")).setOption({
                tooltip: {
                    trigger: 'item'
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