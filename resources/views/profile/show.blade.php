@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<main id="main" class="main">
    @include('profile._page-title')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                @include('profile._user-card')
            </div> <!-- .col -->

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        @include('profile._nav')

                        <div class="tab-content pt-2">
                            @include('profile.tabs._overview')
                            @include('profile.tabs._edit')
                            @include('profile.tabs._settings')
                            @include('profile.tabs._change-password')
                        </div><!-- / .tab-content -->
                    </div> <!-- / .card-body -->
                </div> <!-- .card -->
            </div> <!-- .col -->
        </div> <!-- .row -->
    </section> <!-- / profile section -->
</main><!-- End #main -->

@include('layouts._footer')
@include('layouts._scripts')
@endsection
