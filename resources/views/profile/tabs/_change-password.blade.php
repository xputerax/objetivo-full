<div class="tab-pane fade pt-3" id="profile-change-password">
    <!-- Change Password Form -->
    <form method="POST" action="{{ route('profile.change_pw') }}" novalidate>
        @csrf

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
            <div class="col-md-8 col-lg-9">
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="new_password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
            <div class="col-md-8 col-lg-9">
                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password">
                @error('new_password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="new_password_confirmation" class="col-md-4 col-lg-3 col-form-label">New Password Confirmation</label>
            <div class="col-md-8 col-lg-9">
                <input name="new_password_confirmation" type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="new_password_confirmation">
                @error('new_password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-md-4 offset-lg-3 col-md-8 col-lg-9">
                <button type="submit" class="btn btn-primary">
                    Change Password
                </button>
            </div>
        </div>

        @if(session('message'))
        <div class="row">
            <div class="col">
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
        </div>
        @endif
    </form><!-- End Change Password Form -->
</div> <!-- / profile-change-password tab pane -->
