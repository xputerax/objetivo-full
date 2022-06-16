@extends('layouts.app')

@section('title', 'Dashboard')

@php
    $highlighted_page = 'dashboard';
@endphp

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Dashboard Content -->
            <div class="col-lg">
                <div class="row">
                    @include('home._in-progress-stats')
                    @include('home._not-started-stats')
                    @include('home._completed-stats')
                </div>

                <div class="row">
                    @include('home._recently-opened-goals')
                </div> <!-- / .row -->
            </div> <!-- / .col-lg -->
            <!-- End Dashboard Content -->
        </div> <!-- / .row -->
    </section>
</main> <!-- End #main -->
@endsection
