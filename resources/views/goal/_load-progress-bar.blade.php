<!-- Script to make progress bar respond dynamically -->
<script>
    function loadProgressBar() {
        $(document).ready(function() {
            var $checkboxes = $('.checkbox');
            var $progress = $('#CheckProgress');
            var total = $checkboxes.length;
            progressBar = document.getElementById('progress-bar-id');
    
            $checkboxes.on('change', function() {
                var checked = $checkboxes.filter(':checked').length;
                // var progressWidth = Math.floor((checked / total) * 100);
                var progressWidth = {{ $percentageCompleted }}
                $('.progress-bar').css('width', progressWidth + '%').attr('aria-valuenow', progressWidth);
                progressBar.innerHTML = progressWidth + "%";
            });
        });
    }
    window.onload = loadProgressBar;
</script>