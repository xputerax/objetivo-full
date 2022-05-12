<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
        <h6>{{ $user->name }}</h6>
        <span>Web Designer</span>
    </li>

    <li>
        <hr class="dropdown-divider">
    </li>

    <li>
        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
        </a>
    </li>

    <li>
        <form action="{{ route('logout') }}" id="logoutForm" method="POST">
            @csrf
        </form>
        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);" onclick="document.querySelector('#logoutForm').submit();">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
        </a>
    </li>
</ul><!-- End Profile Dropdown Items -->
