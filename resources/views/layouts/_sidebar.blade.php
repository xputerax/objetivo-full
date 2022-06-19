@php
    $highlighted_page = $highlighted_page ?? 'dashboard';
@endphp
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ $highlighted_page == 'dashboard' ? '': 'collapsed' }}" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $highlighted_page == 'profile' ? '': 'collapsed' }}" href="{{ route('profile.show') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $highlighted_page == 'goals' ? '': 'collapsed' }}" href="{{ route('goal-board.index') }}">
                <i class="bi bi-clipboard-data"></i>
                <span>Goal Board</span>
            </a>
        </li><!-- End Goals Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $highlighted_page == 'my_mentors' ? '': 'collapsed' }}" href="{{ route('mentors.index') }}">
                <i class="bi bi-people"></i>
                <span>My Mentors</span>
            </a>
        </li><!-- End My Mentors Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $highlighted_page == 'my_mentees' ? '': 'collapsed' }}" href="{{ route('mentees.index') }}">
                <i class="bi bi-people"></i>
                <span>My Mentees</span>
            </a>
        </li><!-- End My Mentees Page Nav -->

        <img src="https://static.toiimg.com/photo/msid-67586673/67586673.jpg?3918697" alt="cat" width="40" height="auto" />

    </ul>

</aside><!-- End Sidebar-->
