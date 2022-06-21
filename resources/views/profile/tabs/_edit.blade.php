<div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
    <!-- Profile Edit Form -->
    <form method="post" action="{{ route('profile.update') }}" novalidate>
        @csrf

        {{--
        <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">
                Profile Image
            </label>
            <div class="col-md-8 col-lg-9">
                <img src="{{ asset('/img/profile-img.jpg') }}" alt="Profile">

                <div class="pt-2">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image">
                        <i class="bi bi-upload"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image">
                        <i class="bi bi-trash"></i>
                    </a>
                </div>
            </div> <!-- .col -->
        </div> <!-- .row -->
        --}}

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
            <div class="col-md-8 col-lg-9">
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    value="{{ old('name') ?? $user->name }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
            <div class="col-md-8 col-lg-9">
                <input name="username" type="text" class="form-control" id="username"
                    value="{{ $user->username }}" disabled readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-9">
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ old('email') ?? $user->email }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-md-4 offset-lg-3 col-md-8 col-lg-9">
                <button type="submit" class="btn btn-primary">
                    Save Changes
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
    </form><!-- End Profile Edit Form -->
</div> <!-- / profile-edit tab pane -->
