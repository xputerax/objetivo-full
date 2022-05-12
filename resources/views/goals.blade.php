<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Objetivo / Goals</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
            <span style="padding-right: 30px;"></span>
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
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
                                <a href="goal-board-v2.html">
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
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
                            <a class="dropdown-item d-flex align-items-center" href="profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="profile.html">
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
                            <a class="dropdown-item d-flex align-items-center" href="login.html">
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
                <a class="nav-link collapsed" href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="goals.html">
                    <i class="bi bi-clipboard-data"></i>
                    <span>Goals</span>
                </a>
            </li><!-- End Goals Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="mentor.html">
                    <i class="bi bi-people"></i>
                    <span>My Mentors</span>
                </a>
            </li><!-- End My Mentors Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="mentee.html">
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
                <h1>Goals ML</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Goals</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-12">
                        <div class="row">

                            <!-- Add goal -->
                            <div class="d-grid gap-2" style="padding-bottom: 30px;">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#verticalycentered1">
                                Add Goal
                            </button>
                            <div class="modal fade" id="verticalycentered1" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><strong>Add Goal</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="inputNanme4" class="form-label"><strong>Goal
                                                        Title</strong></label>
                                                        <input type="text" class="form-control" id="inputNanme4">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label"><strong>Goal
                                                            Description</strong></label>
                                                            <textarea class="form-control" rows="5" cols="50"
                                                            id="message-text"> </textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputAddress"
                                                            class="form-label"><strong>Mentor Email</strong></label>
                                                            <input type="text" class="form-control"
                                                            id="inputAddress" placeholder="oyen@gmail.com">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputTarget"
                                                            class="form-label"><strong>Specific and Measurable Target</strong></label>
                                                            <input type="text" class="form-control"
                                                            id="inputTarget" placeholder="Type in your target">
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="message-text" class="col-form-label"><strong>Start
                                                                    Date</strong></label>
                                                                    <input type="date" class="form-control">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="message-text" class="col-form-label"><strong>Due
                                                                        Date</strong></label>
                                                                        <input type="date" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <hr>

                                                            <!--Action Plan & Action Plan List Cards-->
                                                            <section class="action-plan-section"> <strong>Action Plan</strong> <br>
                                                                <div class="row">
                                                                    <div class="col-lg-12" >
                                                                        <input class="form-control mb-2" placeholder="Action Plan" type="text" id="inputAction">

                                                                        <ul id="actionPlans">
                                                                        </ul>

                                                                        <button onclick="addAction()" class="btn btn-primary btn-sm w-100 mt-4">+ Add
                                                                            New Action Plan</button>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Goal Description-->
                                                        </div>
                                                    </div>
                                                </div><!-- End Vertically centered Modal-->

                                                <!-- Goal Card 1-->

                                                <div class="col-md-4 col-sm-6 col-lg-3">
                                                    <div class="card info-card customers-card">
                                                        <div class="card-body">
                                                            <a class="card-title" href="goal-board.html">
                                                                <p class="fs-7 fw-bold"></p>
                                                                <p class="fs-7 fw-bold">Learn guitar in 4 months</p> <br>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <div id="pieChart" style="min-height: 200px;" class="echart"></div>


                                                                    <script>
                                                                        document.addEventListener("DOMContentLoaded", () => {
                                                                            echarts.init(document.querySelector("#pieChart")).setOption({

                                                                                tooltip: {
                                                                                    trigger: 'item'
                                                                                },

                                                                                series: [{
                                                                                    name: '',
                                                                                    type: 'pie',
                                                                                    radius: '70%',

                                                                                    data: [{
                                                                                        value: 10,
                                                                                        name: 'Not started'

                                                                                    },
                                                                                    {
                                                                                        value: 50,
                                                                                        name: 'Completed'

                                                                                    },
                                                                                    {
                                                                                        value: 40,
                                                                                        name: 'In Progress'
                                                                                    }
                                                                                    ],
                                                                                    emphasis: {
                                                                                        itemStyle: {
                                                                                            shadowBlur: 10,
                                                                                            shadowOffsetX: 0,
                                                                                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                                                        }
                                                                                    }
                                                                                }]
                                                                            });
                                                                        });
                                                                    </script>
                                                                    <!-- End Pie Chart -->

                                                                    <p class="fs-7 fw-bold"></p>
                                                                    <p class="fs-7 fw-bold">Due Date: 27/08/2022</p>
                                                                    <p class="fs-7 fw-bold">Mentor Email: oyen@gmail.com</p>
                                                                    <div class="d-grid gap-2 d-md-block">

                                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                        data-bs-target="#verticalycentered2">
                                                                        Edit
                                                                    </button>
                                                                    <div class="modal fade" id="verticalycentered2" tabindex="-1">
                                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"><strong>Edit Goal</strong></h5>
                                                                                    <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form class="row g-3">
                                                                                        <div class="col-12">
                                                                                            <label for="inputNanme4" class="form-label"><strong>Goal Title</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputNanme4"
                                                                                            value="Learn guitar in 3 months">
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDescription" class="form-label"><strong>Goal Description</strong></label>
                                                                                            <textarea class="form-control" style="height: 150px">Practice guitar around 30 minutes a day, 3-5 days a week, with medium intensity</textarea>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDate" class="form label"><strong>Due Date</strong></label>
                                                                                            <input type="date" class="form-control"
                                                                                            id="inputDate" value="2022-08-27">
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <label for="inputAddress"
                                                                                            class="form-label"><strong>Mentor Email</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputAddress" value="oyen@gmail.com">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                                                                        changes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn btn-danger" type="button"
                                                                        onclick="confirm('Are you sure you want to delete this goal?')">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- End Goal Card -->

                                                <!-- Goal Card 2-->
                                                <div class="col-md-4 col-sm-6 col-lg-3">
                                                    <div class="card info-card customers-card">
                                                        <div class="card-body">
                                                            <a class="card-title" href="goal-board-v2.html">
                                                                <p class="fs-7 fw-bold"></p>
                                                                <p class="fs-7 fw-bold">Design website in 2 months</p><br>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <div id="pieChart2" style="min-height: 200px;" class="echart"></div>


                                                                    <script>
                                                                        document.addEventListener("DOMContentLoaded", () => {
                                                                            echarts.init(document.querySelector("#pieChart2")).setOption({

                                                                                tooltip: {
                                                                                    trigger: 'item'
                                                                                },

                                                                                series: [{
                                                                                    name: '',
                                                                                    type: 'pie',
                                                                                    radius: '70%',

                                                                                    data: [{
                                                                                        value: 20,
                                                                                        name: 'Not started'

                                                                                    },
                                                                                    {
                                                                                        value: 70,
                                                                                        name: 'Completed'

                                                                                    },
                                                                                    {
                                                                                        value: 10,
                                                                                        name: 'In Progress'
                                                                                    }
                                                                                    ],

                                                                                    emphasis: {
                                                                                        itemStyle: {
                                                                                            shadowBlur: 10,
                                                                                            shadowOffsetX: 0,
                                                                                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                                                        }
                                                                                    }
                                                                                }]
                                                                            });
                                                                        });
                                                                    </script>
                                                                    <!-- End Pie Chart -->

                                                                    <p class="fs-7 fw-bold"></p>
                                                                    <p class="fs-7 fw-bold">Due Date: 24/06/2022</p>
                                                                    <p class="fs-7 fw-bold">Mentor Email: oyen@gmail.com</p>
                                                                    <div class="d-grid gap-2 d-md-block">

                                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                        data-bs-target="#verticalycentered3">
                                                                        Edit
                                                                    </button>
                                                                    <div class="modal fade" id="verticalycentered3" tabindex="-1">
                                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"><strong>Edit Goal</strong></h5>
                                                                                    <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form class="row g-3">

                                                                                        <div class="col-12">
                                                                                            <label for="inputNanme4" class="form-label"><strong>Goal Title</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputNanme4"
                                                                                            value="Design website in 2 months">
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDescription" class="form-label"><strong>Goal Description</strong></label>
                                                                                            <textarea class="form-control" style="height: 150px">Design website around 4 hours a day, 3-5 days a week, for 2 months</textarea>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDate" class="form label"><strong>Due Date</strong></label>
                                                                                            <input type="date" class="form-control"
                                                                                            id="inputDate" value="2022-06-24">
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <label for="inputAddress"
                                                                                            class="form-label"><strong>Mentor Email</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputAddress" value="oyen@gmail.com">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                                                                        changes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn btn-danger" type="button"
                                                                        onclick="confirm('Are you sure you want to delete this goal?')">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- End Goal Card -->

                                                <!-- Goal Card 3-->
                                                <div class="col-md-4 col-sm-6 col-lg-3">
                                                    <div class="card info-card customers-card">
                                                        <div class="card-body">
                                                            <a class="card-title" href="goal-board.html">
                                                                <p class="fs-7 fw-bold"></p>
                                                                <p class="fs-7 fw-bold">Learn Korean language within 3 months</p>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <div id="pieChart3" style="min-height: 200px;" class="echart"></div>


                                                                    <script>
                                                                        document.addEventListener("DOMContentLoaded", () => {
                                                                            echarts.init(document.querySelector("#pieChart3")).setOption({

                                                                                tooltip: {
                                                                                    trigger: 'item'
                                                                                },

                                                                                series: [{
                                                                                    name: '',
                                                                                    type: 'pie',
                                                                                    radius: '70%',

                                                                                    data: [{
                                                                                        value: 20,
                                                                                        name: 'Not started'

                                                                                    },
                                                                                    {
                                                                                        value: 40,
                                                                                        name: 'Completed'

                                                                                    },
                                                                                    {
                                                                                        value: 40,
                                                                                        name: 'In Progress'
                                                                                    }
                                                                                    ],

                                                                                    emphasis: {
                                                                                        itemStyle: {
                                                                                            shadowBlur: 10,
                                                                                            shadowOffsetX: 0,
                                                                                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                                                        }
                                                                                    }
                                                                                }]
                                                                            });
                                                                        });
                                                                    </script>
                                                                    <!-- End Pie Chart -->

                                                                    <p class="fs-7 fw-bold"></p>
                                                                    <p class="fs-7 fw-bold">Due Date: 28/07/2022</p>
                                                                    <p class="fs-7 fw-bold">Mentor Email: oyen@gmail.com</p>
                                                                    <div class="d-grid gap-2 d-md-block">

                                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                        data-bs-target="#verticalycentered4">
                                                                        Edit
                                                                    </button>
                                                                    <div class="modal fade" id="verticalycentered4" tabindex="-1">
                                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"><strong>Edit Goal</strong></h5>
                                                                                    <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form class="row g-3">
                                                                                        <div class="col-12">
                                                                                            <label for="inputNanme4" class="form-label"><strong>Goal Title</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputNanme4"
                                                                                            value="Learn Korean language within 3 months">
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDescription" class="form-label"><strong>Goal Description</strong></label>
                                                                                            <textarea class="form-control" style="height: 150px">Learn Korean language 1 hour a day, 3-5 days a week, for 3 months</textarea>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDate" class="form label"><strong>Due Date</strong></label>
                                                                                            <input type="date" class="form-control"
                                                                                            id="inputDate" value="2022-07-28">
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <label for="inputAddress"
                                                                                            class="form-label"><strong>Mentor Email</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputAddress" value="oyen@gmail.com">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                                                                        changes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn btn-danger" type="button"
                                                                        onclick="confirm('Are you sure you want to delete this goal?')">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- End Goal Card -->

                                                <!-- Goal Card 4 -->
                                                <div class="col-md-4 col-sm-6 col-lg-3">
                                                    <div class="card info-card customers-card">
                                                        <div class="card-body">
                                                            <a class="card-title" href="goal-board.html">
                                                                <p class="fs-7 fw-bold"></p>
                                                                <p class="fs-7 fw-bold">Read 2 books in 1 month</p><br>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <div id="pieChart4" style="min-height: 200px;" class="echart"></div>


                                                                    <script>
                                                                        document.addEventListener("DOMContentLoaded", () => {
                                                                            echarts.init(document.querySelector("#pieChart4")).setOption({

                                                                                tooltip: {
                                                                                    trigger: 'item'
                                                                                },

                                                                                series: [{
                                                                                    name: '',
                                                                                    type: 'pie',
                                                                                    radius: '70%',

                                                                                    data: [{
                                                                                        value: 20,
                                                                                        name: 'Not started'

                                                                                    },
                                                                                    {
                                                                                        value: 30,
                                                                                        name: 'Completed'

                                                                                    },
                                                                                    {
                                                                                        value: 50,
                                                                                        name: 'In Progress'
                                                                                    }
                                                                                    ],

                                                                                    emphasis: {
                                                                                        itemStyle: {
                                                                                            shadowBlur: 10,
                                                                                            shadowOffsetX: 0,
                                                                                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                                                        }
                                                                                    }
                                                                                }]
                                                                            });
                                                                        });
                                                                    </script>
                                                                    <!-- End Pie Chart -->

                                                                    <p class="fs-7 fw-bold"></p>
                                                                    <p class="fs-7 fw-bold">Due Date: 25/05/2022</p>
                                                                    <p class="fs-7 fw-bold">Mentor Email: oyen@gmail.com</p>
                                                                    <div class="d-grid gap-2 d-md-block">

                                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                        data-bs-target="#verticalycentered5">
                                                                        Edit
                                                                    </button>
                                                                    <div class="modal fade" id="verticalycentered5" tabindex="-1">
                                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"><strong>Edit Goal</strong></h5>
                                                                                    <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form class="row g-3">
                                                                                        <div class="col-12">
                                                                                            <label for="inputNanme4" class="form-label"><strong>Goal Title</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputNanme4"
                                                                                            value="Read 2 books in 1 month">
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDescription" class="form-label"><strong>Goal Description</strong></label>
                                                                                            <textarea class="form-control" style="height: 150px">Read two books in 1 month to deepen knowledge about sociology for sociology class</textarea>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <label for="inputDate" class="form label"><strong>Due Date</strong></label>
                                                                                            <input type="date" class="form-control"
                                                                                            id="inputDate" value="2022-05-25">
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <label for="inputAddress"
                                                                                            class="form-label"><strong>Mentors's Email</strong></label>
                                                                                            <input type="text" class="form-control"
                                                                                            id="inputAddress" value="oyen@gmail.com">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                                                                        changes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn btn-danger" type="button"
                                                                        onclick="confirm('Are you sure you want to delete this goal?')">Delete</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- End Goal Card -->
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </main>
                            <!-- ======= Footer ======= -->
                            <footer id="footer" class="footer fixed-bottom">
                                <div class="copyright">
                                    &copy; <strong><span>Objetivo</span></strong>
                                </div>
                            </footer><!-- End Footer -->

                            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                                class="bi bi-arrow-up-short"></i></a>

                                <!-- Vendor JS Files -->
                                <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
                                <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                                <script src="{{ asset('vendor/chart.js/chart.min.js') }}"></script>
                                <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
                                <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
                                <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
                                <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
                                <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

                                <!-- Template Main JS File -->
                                <script src="{{ asset('js/app.js') }}"></script>
                                <script src="{{ asset('/js/add_actions.js') }}"></script>



                            </body>

                            </html>
