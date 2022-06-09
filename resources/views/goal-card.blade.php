@extends('layouts.app')

@section('title', 'Goal Card')

@section('content')
<main id="main" class="main">
    @include('goal-card._page-title')
    @include('goal-card._progress-bar')
    @include('goal-card._goal-description')

    @include('goal-card._action-plan-list')

    @include('goal-card._comment-section')

    @include('goal-card._mentor-modal')
    @include('goal-card._action-plan-modal')
</main>

<!-- Script to make progress bar respond dynamically -->
<script>
    $(document).ready(function () {
        var $checkboxes = $('.checkbox');
        var $progress = $('#CheckProgress');
        var total = $checkboxes.length;
        progressBar = document.getElementById('progress-bar-id');

        $checkboxes.on('change', function () {
            var checked = $checkboxes.filter(':checked').length;
            var progressWidth = Math.floor((checked / total) * 100);
            $('.progress-bar').css('width', progressWidth + '%').attr('aria-valuenow', progressWidth);
            progressBar.innerHTML = progressWidth + "%";
        });
    });
</script>

<!-- Template Main JS File -->
<script src="{{ asset('/js/add_task1.js') }}"></script>
<script src="{{ asset('/js/add_activity.js') }}"></script>
@endsection
