@extends('layouts.app')

@section('title', 'My Profile')

@php
    $highlighted_page = 'profile';
@endphp

@section('content')
<main id="main" class="main">
    @include('profile._page-title')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        @include('profile._nav')

                        <div class="tab-content pt-2">
                            @include('profile.tabs._edit')
                            @include('profile.tabs._change-password')
                        </div><!-- / .tab-content -->
                    </div> <!-- / .card-body -->
                </div> <!-- .card -->
            </div> <!-- .col -->
        </div> <!-- .row -->
    </section> <!-- / profile section -->
</main><!-- End #main -->
@endsection
