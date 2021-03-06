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
        <span class="progress-bar bg-success" id="progress-bar-id" role="progressbar" aria-valuenow="0" aria-valuemin="0"
            aria-valuemax="100">
        </span>
    </div>
</section>

<!-- Script to make progress bar respond dynamically -->
<script type="text/javascript">
    $(document).ready(function() {
        var $checkboxes = $('.checkbox');
        var total = $checkboxes.length;
        progressBar = document.getElementById('progress-bar-id');
        var progressWidth = {{ $percentageCompleted }};

        $('.progress-bar').css('width', progressWidth + '%').attr('aria-valuenow', progressWidth);
        progressBar.innerHTML = progressWidth + "%";
    });
</script>
