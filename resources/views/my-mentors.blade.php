@extends('layouts.app')

@section('title', 'My Mentors')

@php
$highlighted_page = 'my_mentors';
$temp = 0;
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

                    @foreach($goals as $goal1)
                    @if($goal1->mentor_id == $temp)
                    @continue
                    @endif
                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{--
                                    <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    --}}
                                    {{ $goal1->username }}
                                </h5>
                                <div class="list-group">
                                    @foreach($goals as $goal2)
                                    @if($goal1->mentor_id == $goal2->mentor_id)
                                    <a href="{{ route('goal.show', [$goal2->id]) }}" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">{{ $goal2->title }}</h5>
                                            <small class="list-date text-muted">{{ $goal2->created_at }}</small>
                                        </div>
                                        <p class="list-content">{{ $goal2->description }}</p>
                                    </a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- End Goal Card -->
                    @php
                        $temp = $goal1->mentor_id;
                    @endphp
                    @endforeach

                </div>
            </div>

        </div>
    </section>
</main>
@endsection
