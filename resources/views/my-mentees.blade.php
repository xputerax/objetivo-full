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

                    @foreach ($goals as $goal1)
                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    {{ $goal1->username }}
                                </h5>
                                <div class="list-group">
                                    @foreach ($goals as $goal2)
                                    @if($goal2->user_id == $goal1->id)
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">{{ $goal2->title }}</h5>
                                            <small class="list-date text-muted">{{ $goal2->created_at }}</small>
                                        </div>
                                        <p class="list-content">{{ $goal2->description }}</p>
                                    </a>
                                    @endif
                                    @endforeach
                                </div>
                            </div> <!-- / .card-body -->
                        </div> <!-- / .card -->
                    </div><!-- End Goal Card -->
                    @endforeach

                </div> <!-- / .row -->
            </div> <!-- / .col -->

        </div> <!-- / .row -->
    </section>
</main>
@endsection