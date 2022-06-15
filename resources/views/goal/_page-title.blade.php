<!-- Start Page Title -->
<div class="pagetitle">
    <div class="row">
        <div class="col-10">
            <button type="button" class="btn btn-primary-outline" onclick="history.back()">
                <i class="bi bi-chevron-double-left"></i>
            </button>
            <h1>Goal: {{ $goal->title }}</h1>

            {{-- Make it dynamic --}}
            <h2>Learn Guitar</h2>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="goals.html">Goals</a></li>
                    <li class="breadcrumb-item active">Goal Board</li>
                </ol>
            </nav>
        </div>

        <div class="col-2" align="right">
            <img class="rounded-circle mx-1" width="35" height="35" alt="" src="{{ asset('/img/oyen.jpg') }}" data-holder-rendered="true">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mentorModal">
                Mentor
            </button>
        </div>
    </div>
</div>
<!-- End Page Title -->
