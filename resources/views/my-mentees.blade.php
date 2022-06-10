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
                    
                    @foreach ($mentees as $mentee)
                    <!-- Goal Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="mentor-mentee-profile-pic">
                                    {{ $mentee->username }}
                                </h5>
                                <div class="list-group">
                                    @foreach ($goals as $goal)
                                    @if($goal->user_id === $mentee->id)
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="list-title">{{ $goal->title }}</h5>
                                            <small class="list-date text-muted">{{ $goal->created_at }}</small>
                                        </div>
                                        <p class="list-content">{{ $goal->description }}</p>
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
