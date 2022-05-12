@extends('layouts.app')

@section('title', 'My Mentees')

@php
    $highlighted_page = 'my_mentees';
@endphp

@section('content')
<main id="main" class="main">
    @include('my-mentees._page-title')
    @include('my-mentees._search')

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
                                    Kamariah
                                </h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Get good at HTML</h5>
                                            <small class="list-date text-muted">3 days ago</small>
                                        </div>
                                        <p class="list-content">Watch lectures</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Learn Javascript</h5>
                                            <small class="list-date text-muted">7 days ago</small>
                                        </div>
                                        <p class="list-content">https://docs.microsoft.com/en-us/shows/beginners-series-to-javascript/?wt.mc_id=nodebeginner-ch9-cxa</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Watch videos on Bootstrap</h5>
                                            <small class="list-date text-muted">10 days ago</small>
                                        </div>
                                        <p class="list-content">https://youtu.be/4sosXZsdy-s</p>
                                    </a>
                                </div>
                            </div> <!-- / .card-body -->
                        </div> <!-- / .card -->
                    </div><!-- End Goal Card -->

                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    Abu Bakar
                                </h5>
                                <div class="list-group">
                                    <a href="goal-board.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Learn how to strum a bass guitar</h5>
                                            <small class="list-date text-muted">7 days ago</small>
                                        </div>
                                        <p class="list-content">Watch videos</p>
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
                                    Tee Kai Siong
                                </h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Do leet code exercises</h5>
                                            <small class="list-date text-muted">2 days ago</small>
                                        </div>
                                        <p class="list-content">30 DAYS CHALLENGE!!!</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Learn Data Structures</h5>
                                            <small class="list-date text-muted">10 days ago</small>
                                        </div>
                                        <p class="list-content">Watch videos</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Goal Card -->

                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    Subramaniam
                                </h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Learn how to play drum</h5>
                                            <small class="list-date text-muted">1 day ago</small>
                                        </div>
                                        <p class="list-content"></p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Learn C#</h5>
                                            <small class="list-date text-muted">6 days ago</small>
                                        </div>
                                        <p class="list-content"></p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Learn Java</h5>
                                            <small class="list-date text-muted">10 days ago</small>
                                        </div>
                                        <p class="list-content">Seems easy</p>
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
                                    Malekani
                                </h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Meeting for Hackathon</h5>
                                            <small class="list-date text-muted">2 days ago</small>
                                        </div>
                                        <p class="list-content">First meeting with the team!</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">Register for hackathon</h5>
                                            <small class="list-date text-muted">5 days ago</small>
                                        </div>
                                        <p class="list-content">Due date is coming</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Goal Card -->

                </div> <!-- / .row -->
            </div> <!-- / .col -->

        </div> <!-- / .row -->
    </section>
</main>
@endsection
