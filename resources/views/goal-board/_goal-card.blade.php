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
                        <div id="pieChart1" style="min-height: 200px;" class="echart"></div>
                        <p class="fs-7 fw-bold"></p>
                        <p class="fs-7 fw-bold">Due Date: {{ $goal->due_at }}</p>
                        <p class="fs-7 fw-bold">Mentor Email: oyen@gmail.com</p>
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
    @endforeach
<!-- End Goal Card 1 -->
