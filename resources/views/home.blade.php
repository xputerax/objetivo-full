<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Objetivo / Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>


<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
            <span style="padding-right: 30px"></span>
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('img/logo.png') }}" alt="" />
                <span class="d-none d-lg-block">Objetivo</span>
            </a>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <!-- Start Notifications Dropdown Items -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">You have 4 new notifications</li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <a href="goal-board.html">
                                    <h4>Goal 1: Learn Guitar</h4>
                                    <p>Action Plan 1: Study Chords due in 6 hours</p>
                                    <p>30 min. ago</p>
                                </a>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <a href="goal-board.html">
                                    <h4>Goal 1: Learn Guitar</h4>
                                    <p>Action Plan 2: Strum practice due in 1 day</p>
                                    <p>1 hr. ago</p>
                                </a>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <a href="goal-board.html">
                                    <h4>Goal 2: Design Website</h4>
                                    <p>Action Plan 1: Design lo-fi prototype due in 1 hour</p>
                                    <p>2 hrs. ago</p>
                                </a>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <a href="goal-board.html">
                                    <h4>Goal 3: Learn Korean Language</h4>
                                    <p>Action Plan 1: Watch K-drama due in 30</p>
                                    <p>4 hrs. ago</p>
                                </a>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                    </ul>
                    <!-- End Notification Dropdown Items -->
                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('img/profile-img.jpg') }}" alt="Profile" class="rounded-circle" />
                        <span class="d-none d-md-block dropdown-toggle ps-2">John bin Pablo</span>
                    </a>
                    <!-- End Profile Image Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>John bin Pablo</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav> <!-- End Icons Navigation -->
    </header> <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('profile.show') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('goals.index') }}">
                    <i class="bi bi-clipboard-data"></i>
                    <span>Goals</span>
                </a>
            </li>
            <!-- End Goals Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('mentors.index') }}">
                    <i class="bi bi-people"></i>
                    <span>My Mentors</span>
                </a>
            </li>
            <!-- End My Mentors Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('mentees.index') }}">
                    <i class="bi bi-people"></i>
                    <span>My Mentees</span>
                </a>
            </li>
            <!-- End My Mentees Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Dashboard Content -->
                <div class="col-lg">
                    <div class="row">
                        <!-- In Progress Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sales-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        In Progress<br /><span>Today</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $in_progress_count }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End In Progress Card -->

                        <!-- Not Started Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Not Started<br /><span>This Month</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-exclamation-lg"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $not_started_count }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Not Started Card -->

                        <!-- Completed Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card customers-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Completed<br /><span>All Time</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-check2-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $completed_count }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Completed Card -->
                    </div>

                    <div class="row">
                        <!-- Recently Opened Goals -->
                        <div class="col">
                            <div class="card recently-opened-goals overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Recently Opened Goals <span>| Today</span>
                                    </h5>
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Goal Title</th>
                                                <th scope="col">Target Date</th>
                                                <th scope="col">Mentor</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Goal 1 -->
                                            <tr>
                                                <td>
                                                    <a href="goal-board.html" class="text-primary">Learn guitar in 4 months
                                                        <td>27/08/2022</td>
                                                        <td>Kanye Barat</td>
                                                        <td>
                                                            <span class="badge bg-warning">In Progress</span>
                                                        </td>
                                                    </tr>
                                                    <!-- End Goal 1 -->

                                                    <!-- Goal 2 -->
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-primary"
                                                            >Design website in 2 months</a
                                                            >
                                                        </td>
                                                        <td>24/06/2022</td>
                                                        <td>Frank Laut</td>
                                                        <td>
                                                            <span class="badge bg-warning">In Progress</span>
                                                        </td>
                                                    </tr>
                                                    <!-- End Goal 2 -->

                                                    <!-- Goal 3 -->
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-primary"
                                                            >Learn Korean language within 3 months</a
                                                            >
                                                        </td>
                                                        <td>28/07/2022</td>
                                                        <td>Kim JU</td>
                                                        <td>
                                                            <span class="badge bg-warning">In Progress</span>
                                                        </td>
                                                    </tr>
                                                    <!-- End Goal 3 -->

                                                    <!-- Goal 4 -->
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-primary"
                                                            >Learn JavaScript</a
                                                            >
                                                        </td>
                                                        <td>06/10/2022</td>
                                                        <td>Ben Awad</td>
                                                        <td>
                                                            <span class="badge bg-danger">Not Started</span>
                                                        </td>
                                                    </tr>

                                                    <!-- End Goal 4 -->

                                                    <!-- Goal 5 -->
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-primary"
                                                            >Lose 5kg</a
                                                            >
                                                        </td>
                                                        <td>15/02/2022</td>
                                                        <td>Joe Rogan</td>
                                                        <td>
                                                            <span class="badge bg-success">Completed</span>
                                                        </td>
                                                    </tr>
                                                    <!-- End Goal 5 -->

                                                    <!-- Goal 6 -->
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-primary"
                                                            >Read 2 books in 1 month</a
                                                            >
                                                        </td>
                                                        <td>25/05/2022</td>
                                                        <td>Tai Lopez</td>
                                                        <td>
                                                            <span class="badge bg-warning">In Progress</span>
                                                        </td>
                                                    </tr>
                                                    <!-- End Goal 6 -->

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Recently Opened Goals -->
                            </div>
                        </div>
                        <!-- End Dashboard Content -->
                    </div>
                </div>
            </div>
        </section>
    </main> <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer fixed-bottom">
        <div class="copyright">
            &copy; <strong><span>Objetivo</span></strong>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
