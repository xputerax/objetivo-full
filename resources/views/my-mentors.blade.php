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

                    @foreach($mentors as $mentor)
                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    {{ $mentor->username }}
                                </h5>
                                <div class="list-group">
                                    @foreach($goals as $goal)
                                    @if($mentor->mentor_id == $goal->mentor_id)
                                    <a href="goal-board-mentor.html" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">{{ $goal->title }}</h5>
                                            <small class="list-date text-muted">{{ $goal->created_at }}</small>
                                        </div>
                                        <p class="list-content">{{ $goal->description }}</p>
                                    </a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- End Goal Card -->
                    @endforeach

                </div>
            </div>

        </div>
    </section>
</main>
@endsection
