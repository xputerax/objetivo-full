<!-- Comment Section -->
<section class="section comment-section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comments Section</h5>

                    <div>
                        <form action="{{ route('submit-comment.store') }}" method="post">
                        @csrf
                            <textarea type="text" name="comment" class="form-control" style="height: 100px" placeholder="Type your comment..."></textarea>
                            <input type="hidden" value="{{ $goal->id }}" name="goalid"/>
                            <input type="hidden" value="{{ $user->id }}" name="userid"/>
                            <input type="hidden" value=0 name="votetype"/>
                            <br>
                            <button type="submit" class="btn btn-outline-primary">Submit comment</button>
                        </form>
                    </div>

                    <br>

                    @foreach ($comments as $comment)
                    <div class="card">
                        <div class="comment-card-body">
                            <h5 class="comment-title">
                                {{--
                                <img src="{{ asset('/img/blankprofile.png') }}" width="50" height="50" alt="Profile" class="comment-profile-pic">
                                --}}
                                {{ $comment['username'] }}
                                @if ($comment['user_id'] == $user->id)
                                <span class="badge bg-primary">You</span>
                                @else
                                <span class="badge bg-success">Mentor</span>
                                @endif

                                @if ($comment['user_id'] == $user->id)
                                <div style="float: right">
                                    <form action="{{ route('delete-comment.destroy', $comment) }}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                        @method('delete')
                                        @csrf
                                    </form>
                                </div>
                                @endif
                            </h5>
                            @if ($comment['timeintervalMinutes'] != false)
                            <p class="time-posted">&nbsp; {{ $comment['timeintervalMinutes'] }} minute ago</p>
                            @elseif ($comment['timeintervalDay'] != false)
                            <p class="time-posted">&nbsp; {{ $comment['timeintervalDay'] }} days ago</p>
                            @else
                            <p class="time-posted">&nbsp; {{ $comment['timeinterval'] }} hours ago</p>
                            @endif
                            <br><br>
                            <p>{{ $comment['body'] }}</p>
                            @if ($comment['user_id'] != $user->id)
                            <div style="display:flex;">
                                <form action="{{ route('vote-comment.update', $comment['commentvoteid']) }}" method="post">
                                    @csrf
                                    <button class="btn btn-light rounded-pill">
                                        @if ($comment['commentvote'] == 1)
                                        <i class="bx bxs-like"> 1 like</i>
                                        @else
                                        <i class="bx bxs-like"> 0 likes</i>
                                        @endif
                                    </button>
                                    @if ($comment['commentvote'] == 1)
                                    <input type="hidden" value=0 name="votetype"/>
                                    @else
                                    <input type="hidden" value=1 name="votetype"/>
                                    @endif
                                    <input type="hidden" value="{{ $goal->id }}" name="goalid"/>
                                    @method('put')
                                </form>
                                <form action="{{ route('vote-comment.update', $comment['commentvoteid']) }}" method="post">
                                    @csrf
                                    <button class="btn btn-light rounded-pill">
                                        @if ($comment['commentvote'] == 2)
                                        <i class="bx bxs-dislike"> 1 dislike</i>
                                        @else
                                        <i class="bx bxs-dislike"> 0 dislikes</i>
                                        @endif
                                    </button>
                                    @if ($comment['commentvote'] == 2)
                                    <input type="hidden" value=0 name="votetype"/>
                                    @else
                                    <input type="hidden" value=2 name="votetype"/>
                                    @endif
                                    <input type="hidden" value="{{ $goal->id }}" name="goalid"/>
                                    @method('put')
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!--End of Previous Comment Div-->
                    @endforeach
                </div> <!-- / .card-body -->
            </div> <!-- / .card -->
        </div> <!-- / .col -->
    </div> <!-- / .row -->
</section>
<!--End of comment section-->
