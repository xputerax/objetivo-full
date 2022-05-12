<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.show') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('goals.index') }}">
                <i class="bi bi-clipboard-data"></i>
                <span>Goals</span>
            </a>
        </li><!-- End Goals Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('mentors.index') }}">
                <i class="bi bi-people"></i>
                <span>My Mentors</span>
            </a>
        </li><!-- End My Mentors Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('mentees.index') }}">
                <i class="bi bi-people"></i>
                <span>My Mentees</span>
            </a>
        </li><!-- End My Mentees Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
