@extends('layouts.app')

@section('title', 'Goal Board')

@php
$highlighted_page = 'goals';
@endphp

@section('content')
    <main id="main" class="main">
        @include('goal-board._page-title')

        <section class="section dashboard">
            @include('goal-board._add-goal')

            <div class="row">
                @foreach ($goals as $goal)
                @include('goal-board._goal-card', [ 'goal' => $goal ])
                @endforeach
            </div> <!-- / .row -->
        </section>
    </main>

    <script src="{{ asset('/js/add_actions.js') }}"></script>
@endsection
