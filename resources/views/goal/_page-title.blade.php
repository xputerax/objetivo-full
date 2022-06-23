<!-- Start Page Title -->
<div class="pagetitle">
    <div class="row">
        <div class="col-10">
            <button type="button" class="btn btn-primary-outline" onclick="history.back()">
                <i class="bi bi-chevron-double-left"></i>
            </button>
            <h1>{{ $goal->title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ "../home" }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{"../goal-board"}}">Goal Board</a></li>
                    <li class="breadcrumb-item active">Goal</li>
                </ol>
            </nav>
        </div>

        <div class="col-2" align="right">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mentorModal">
                Manage Mentor
            </button>
        </div>
    </div>
</div>
<!-- End Page Title -->
