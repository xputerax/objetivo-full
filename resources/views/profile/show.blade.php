<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Objetivo / Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts._styles')
</head>

<body>
    @include('layouts._header')
    @include('layouts._sidebar')

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
</body>

</html>
