<!--Goal Description Start-->
<div class="card">
    <div class="card-body">
        <h5 class="card-desc-title">Description</h5>
        <p>{{ $goal->description }}</p>
        <h6 class="card-desc-title" style="font-size: 16px;">Due Date</h6>
        <p>{{ $goal['due_at']->toFormattedDateString() }}</p>
        <h6 class="card-desc-title" style="font-size: 16px;">Specific and Measurable Target</h6>
        <p>{{ $goal->smart_goal }}</p>
    </div>
</div>
<!--Goal Description End-->
