<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Objetivo / Profile</title>
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
                <span style="padding-right: 30px;"></span>
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('/img/logo.png') }}" alt="">
                    <span class="d-none d-lg-block">Objetivo</span>
                </a>
            </div><!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item dropdown">

                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-bell"></i>
                            <span class="badge bg-primary badge-number">4</span>
                        </a><!-- End Notification Icon -->

                        <!-- Start Notifications Dropdown Items -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                            <li class="dropdown-header">
                                You have 4 new notifications
                            </li>
                            <li>
                                <hr class="dropdown-divider">
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
                                <hr class="dropdown-divider">
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
                                <hr class="dropdown-divider">
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
                                <hr class="dropdown-divider">
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
                                <hr class="dropdown-divider">
                            </li>

                        </ul><!-- End Notification Dropdown Items -->

                    </li><!-- End Notification Nav -->

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="{{ asset('img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">John bin Pablo</span>
                        </a><!-- End Profile Iamge Icon -->

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
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

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

        <main id="main" class="main">


            <div class="pagetitle">
                <button type="button" class="btn btn-primary-outline" onclick="history.back()"><i
                    class="bi bi-chevron-double-left"></i></button>
                    <h1>Profile</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->

                <section class="section profile">
                    <div class="row">
                        <div class="col-xl-4">

                            <div class="card">
                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                    <img src="{{ asset('/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                                    <h2>John bin Pablo</h2>
                                    <h3>Web Designer</h3>
                                    <div class="social-links mt-2">
                                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Overview</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                                                Password</button>
                                            </li>

                                        </ul>
                                        <div class="tab-content pt-2">

                                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                                <h5 class="card-title">About</h5>
                                                <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                                    temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem
                                                    eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                                    <h5 class="card-title">Profile Details</h5>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                        <div class="col-lg-9 col-md-8">John bin Pablo</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                                        <div class="col-lg-9 col-md-8">University of Malaya</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Job</div>
                                                        <div class="col-lg-9 col-md-8">Web Designer</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                                        <div class="col-lg-9 col-md-8">Malaysia</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                                        <div class="col-lg-9 col-md-8">University of Malaya, 50603 Kuala Lumpur</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 l(abel">Phone</div>
                                                        <div class="col-lg-9 col-md-8">+(60) 12-345 6789</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                                        <div class="col-lg-9 col-md-8">john.pablo@gmail.com</div>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                                    <!-- Profile Edit Form -->
                                                    <form>
                                                        <div class="row mb-3">
                                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <img src="{{ asset('/img/profile-img.jpg') }}" alt="Profile">
                                                                <div class="pt-2">
                                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i
                                                                        class="bi bi-upload"></i></a>
                                                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                                                            class="bi bi-trash"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="fullName" type="text" class="form-control" id="fullName" value="John bin Pablo">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <textarea name="about" class="form-control" id="about"
                                                                        style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="company" type="text" class="form-control" id="company"
                                                                        value="University of Malaya">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="country" type="text" class="form-control" id="Country" value="Malaysia">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="address" type="text" class="form-control" id="Address"
                                                                        value="University of Malaya, 50603 Kuala Lumpur">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="phone" type="text" class="form-control" id="Phone" value="+(60) 12-345 6789">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="email" type="email" class="form-control" id="Email" value="john.pablo@gmail.com">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="twitter" type="text" class="form-control" id="Twitter"
                                                                        value="https://twitter.com/#">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="facebook" type="text" class="form-control" id="Facebook"
                                                                        value="https://facebook.com/#">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="instagram" type="text" class="form-control" id="Instagram"
                                                                        value="https://instagram.com/#">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="linkedin" type="text" class="form-control" id="Linkedin"
                                                                        value="https://linkedin.com/#">
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                </div>
                                                            </form><!-- End Profile Edit Form -->

                                                        </div>

                                                        <div class="tab-pane fade pt-3" id="profile-settings">

                                                            <!-- Settings Form -->
                                                            <form>

                                                                <div class="row mb-3">
                                                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                                            <label class="form-check-label" for="changesMade">
                                                                                Changes made to your account
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                                            <label class="form-check-label" for="newProducts">
                                                                                Information on new products and services
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="proOffers">
                                                                            <label class="form-check-label" for="proOffers">
                                                                                Marketing and promo offers
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                                            <label class="form-check-label" for="securityNotify">
                                                                                Security alerts
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                </div>
                                                            </form><!-- End settings Form -->

                                                        </div>

                                                        <div class="tab-pane fade pt-3" id="profile-change-password">
                                                            <!-- Change Password Form -->
                                                            <form>

                                                                <div class="row mb-3">
                                                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="password" type="password" class="form-control" id="currentPassword">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                                                    <div class="col-md-8 col-lg-9">
                                                                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                                </div>
                                                            </form><!-- End Change Password Form -->

                                                        </div>

                                                    </div><!-- End Bordered Tabs -->

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                            </main><!-- End #main -->

                            <!-- ======= Footer ======= -->
                            <footer id="footer" class="footer fixed-bottom">
                                <div class="copyright">
                                    &copy; <strong><span>Objetivo</span></strong>
                                </div>
                            </footer><!-- End Footer -->

                            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                                class="bi bi-arrow-up-short"></i></a>

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
                                {{-- <script src="{{ asset('js/back_button.js') }}"></script> --}}

                            </body>

                            </html>
