{{-- <!-- Progress Bar -->
<section id="progress-bar-section" class="progress-bar-section">
    <div class="progress-bar-title">Progress Bar</div>
    <div class="progress">
        <span class="progress-bar bg-success"
            id="progress-bar-id" role="progressbar"
            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
        </span>
    </div> <!-- / .progress -->
</section>
<!-- End Progress Bar --> --}}

<section id="progress-bar-section" class="progress-bar-section">
    <div class="progress-bar-title">Progress Bar</div>
    <div class="progress">
        {{-- <div class="container">
            <div class="progress progress-striped">
                <div class="progress-bar">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="progress2 progress-moved">
                <div class="progress-bar2">
                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="progress progress-infinite">
                <div class="progress-bar3">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="progress-bar-section" class="progress-bar-section">
    <div class="progress-bar-title">Progress Bar</div>
    <div class="progress">
        <span class="progress-bar bg-success" id="progress-bar-id" role="progressbar" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="100">
        </span>
    </div>
</section>

<!-- Script to make progress bar respond dynamically -->
<script>
    $(document).ready(function() {
        var $checkboxes = $('.checkbox');
        var $progress = $('#CheckProgress');
        var total = $checkboxes.length;
        progressBar = document.getElementById('progress-bar-id');

        $checkboxes.on('change', function() {
            var checked = $checkboxes.filter(':checked').length;
            var progressWidth = Math.floor((checked / total) * 100);
            $('.progress-bar').css('width', progressWidth + '%').attr('aria-valuenow', progressWidth);
            progressBar.innerHTML = progressWidth + "%";
        });
    });
</script>
