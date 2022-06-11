<!-- Comment Section -->
<section class="section comment-section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comments Section</h5>

                    <div>
                        <form>
                            <textarea name="comment" class="form-control" style="height: 100px" placeholder="Type your comment..."></textarea>
                            <br>
                            <button type="submit" class="btn btn-outline-primary">Submit comment</button>
                        </form>
                    </div>

                    <br>

                    <div class="card">
                        <div class="comment-card-body">
                            <h5 class="comment-title">
                                <img src="{{ asset('/img/yor.jpg') }}" width="50" height="50" alt="Profile" class="comment-profile-pic">
                                Yor Forger
                                <span class="badge bg-primary">You</span>
                                <div style="float: right">
                                    <button class="btn btn-outline-danger">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </div>
                            </h5>
                            <p class="time-posted">&nbsp; 1 hour ago</p>
                            <br><br>
                            <p>Thank you for the tip! I shall work on it.</p>
                            <div>
                                <button class="btn btn-light rounded-pill">
                                    <i class="bx bxs-like"></i>
                                </button>
                                <button class="btn btn-light rounded-pill">
                                    <i class="bx bxs-dislike"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--End of Previous Comment Div-->

                    <div class="card">
                        <div class="comment-card-body">
                            <h5 class="comment-title">
                                <img src="{{ asset('img/oyen.jpg') }}" width="50" height="50" alt="Profile" class="comment-profile-pic">
                                John Bin Pablo
                                <span class="badge bg-success">Mentor</span>
                                <div style="float: right">
                                    <button class="btn btn-outline-danger">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </div>
                            </h5>
                            <p class="time-posted">&nbsp; 3 hours ago</p>
                            <br><br>
                            <p>
                                You're doing great so far! I suggest that you set 2 hours a day everyday to practice learn Javascript!
                            </p>
                            <div>
                                <button class="btn btn-light rounded-pill">
                                    <i class="bx bxs-like"></i>
                                </button>
                                <button class="btn btn-light rounded-pill">
                                    <i class="bx bxs-dislike"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--End of Previous Comment Div-->
                </div> <!-- / .card-body -->
            </div> <!-- / .card -->
        </div> <!-- / .col -->
    </div> <!-- / .row -->
</section>
<!--End of comment section-->
