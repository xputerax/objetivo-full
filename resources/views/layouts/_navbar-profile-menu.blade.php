<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
        <h6>John bin Pablo</h6>
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
        <hr class="dropdown-divider">
    </li>

    <li>
        <a class="dropdown-item d-flex align-items-center active" href="{{ route('profile.show') }}">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
        </a>
    </li>
    <li>
        <hr class="dropdown-divider">
    </li>

    <li>
        <hr class="dropdown-divider">
    </li>

    <li>
        <a class="dropdown-item d-flex align-items-center" href="{{ route('login') }}">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
        </a>
    </li>
</ul><!-- End Profile Dropdown Items -->
