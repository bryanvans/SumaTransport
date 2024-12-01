<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/minia/layouts/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2024 05:56:23 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard jadwal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="dashboardassets/images/favicon.ico">

        <!-- DataTables -->
        <link href="dashboardassets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="dashboardassets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="dashboardassets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- preloader css -->
        <link rel="stylesheet" href="dashboardassets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="dashboardassets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="dashboardassets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="dashboardassets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> 

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="http://127.0.0.1:8000/dashboardassets/images/bus-icon.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="http://127.0.0.1:8000/dashboardassets/images/bus-icon.svg" alt="" height="24"> <span class="logo-txt">SumaTransport</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="http://127.0.0.1:8000/dashboardassets/images/bus-icon.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="http://127.0.0.1:8000/dashboardassets/images/bus-icon.svg" alt="" height="24"> <span class="logo-txt">SumaTransport</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="dashboardassets/images/flags/indonesia.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="dashboardassets/images/flags/indonesia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Indonesia</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="dashboardassets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="dashboardassets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="dashboardassets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="dashboardassets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>
                       
                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#!" class="text-reset notification-item">
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="dashboardassets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Shawn L.</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                                <a href="/dashboard">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="/busdashboard">
                                     <i data-feather= "truck"></i>
                                    <span data-key="t-dashboard">Bus</span>
                                </a>
                            </li>
                            <li>
                                <a href="/jadwalbus">
                                    <i data-feather="calendar"></i>
                                    <span data-key="t-dashboard">Jadwal</span>
                                </a>
                            </li>
                            <li>
                                <a href="/rutebus">
                                    <i data-feather="map"></i>
                                    <span data-key="t-dashboard">Rute</span>
                                </a>
                            </li>
                            <li>
                                <a href="/qnadashboard">
                                    <i data-feather="help-circle"></i>
                                    <span data-key="t-dashboard">QnA</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Tabel Jadwal Bus</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                            <li class="breadcrumb-item active"><a href="{{ route('jadwalbus') }}">Jadwal</a></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
    <div>
        <h4 class="card-title">Jadwal Bus</h4>
        <p class="card-title-desc">
            Keterangan ID Bus :<br>
            111TI..... = Tiomaz<br>
            121BT.... = KBT<br>
            311PT.... = KPT<br>
            466KA.... = Karya Agung
        </p>
    </div>

    <!-- Tombol Tambah Data di paling kanan, dengan margin atas -->
    <!-- Tombol untuk membuka modal -->
<!-- Table to display existing bus schedules -->
<div class="container mt-4">
    <h3>Jadwal Bus</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Bus</th>
                <th>Waktu Keberangkatan</th>
                <th>Waktu Tiba</th>
                <th>Dari</th>
                <th>Tujuan</th>
                <th>Jumlah Kursi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        @if ($busSchedule->isNotEmpty())
    @foreach ($busSchedules as $schedule)
        <tr>
            <td>{{ $schedule->id_bus }}</td>
            <td>{{ $schedule->waktu_keberangkatan }}</td>
            <td>{{ $schedule->waktu_tiba }}</td>
            <td>{{ $schedule->dari }}</td>
            <td>{{ $schedule->tujuan }}</td>
            <td>{{ $schedule->jumlah_kursi }}</td>
            <td>{{ $schedule->tanggal }}</td>
            <td>
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="8" class="text-center">Tidak ada jadwal bus tersedia.</td>
    </tr>
@endif


    </table>

    <!-- Button to trigger the modal for adding a new bus schedule -->
    <button type="button" class="btn btn-primary waves-effect waves-light mt-3" data-bs-toggle="modal" data-bs-target="#addBusScheduleModal">
        Tambah Data
    </button>
</div>

<!-- Modal for adding a new bus schedule -->
<div class="modal fade" id="addBusScheduleModal" tabindex="-1" aria-labelledby="addBusScheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBusScheduleModalLabel">Tambah Jadwal Bus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for adding data -->
                <form action="{{ route('bus-schedules.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_bus">ID Bus</label>
                        <input type="text" id="id_bus" name="id_bus" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu_keberangkatan">Waktu Keberangkatan</label>
                        <input type="text" id="waktu_keberangkatan" name="waktu_keberangkatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu_tiba">Waktu Tiba</label>
                        <input type="text" id="waktu_tiba" name="waktu_tiba" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="dari">Dari</label>
                        <input type="text" id="dari" name="dari" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <input type="text" id="tujuan" name="tujuan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kursi">Jumlah Kursi</label>
                        <input type="number" id="jumlah_kursi" name="jumlah_kursi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                                <!-- end cardaa -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © SumaTransport.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">


                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    </div>


                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    </div>


                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="dashboardassets/libs/jquery/jquery.min.js"></script>
        <script src="dashboardassets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dashboardassets/libs/metismenu/metisMenu.min.js"></script>
        <script src="dashboardassets/libs/simplebar/simplebar.min.js"></script>
        <script src="dashboardassets/libs/node-waves/waves.min.js"></script>
        <script src="dashboardassets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="dashboardassets/libs/pace-js/pace.min.js"></script>

        <!-- Required datatable js -->
        <script src="dashboardassets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="dashboardassets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="dashboardassets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="dashboardassets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="dashboardassets/libs/jszip/jszip.min.js"></script>
        <script src="dashboardassets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="dashboardassets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="dashboardassets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="dashboardassets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="dashboardassets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="dashboardassets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="dashboardassets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="dashboardassets/js/pages/datatables.init.js"></script>    

        <script src="dashboardassets/js/app.js"></script>
        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/minia/layouts/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2024 05:56:26 GMT -->
</html>
