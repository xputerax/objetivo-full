@extends('layouts.app')

@section('title', 'My Mentors')

@php
    $highlighted_page = 'my_mentors';
@endphp

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <button type="button" class="btn btn-primary-outline" onclick="history.back()">
            <i class="bi bi-chevron-double-left"></i>
        </button>
        <h1>My Mentors</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">My Mentors</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    Ahmad Basir
                                </h5>
                                <div class="list-group">
                                    <a href="goal-board-mentor.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Submit Web Programming Assignment</h5>
                                            <small class="list-date text-muted">1 day ago</small>
                                        </div>
                                        <p class="list-content"></p>
                                    </a>
                                    <a href="goal-board-mentor.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Get fit</h5>
                                            <small class="list-date text-muted">5 days ago</small>
                                        </div>
                                        <p class="list-content">Go to the gym</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Goal Card -->

                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    Choi Kit Sam
                                </h5>
                                <div class="list-group">
                                    <a href="goal-board-mentor.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Practice for upcoming violin competition</h5>
                                            <small class="list-date text-muted">5 days ago</small>
                                        </div>
                                        <p class="list-content"></p>
                                    </a>
                                    <a href="goal-board-mentor.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Update YouTube content</h5>
                                            <small class="list-date text-muted">10 days ago</small>
                                        </div>
                                        <p class="list-content"></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Goal Card -->

                </div>
            </div>

        </div>
    </section>
</main>
@endsection
