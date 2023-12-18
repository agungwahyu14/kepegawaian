<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }} </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>

                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="">Sistem Kepegawaian</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="">SK</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown">
                            <a href="/" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <a href="/pegawai" class="nav-link"><i class="fas fa-users"></i><span>Pegawai</span></a>
                        </li>
                        <li class="menu-header">Data</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-table"></i><span>Data</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index.html">Absensi</a></li>
                                <li><a class="nav-link" href="index-0.html">Gaji</a></li>
                                <li><a class="nav-link" href="index.html">Feedback</a></li>
                                <li><a class="nav-link" href="index.html">Cuti</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Laporan</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Laporan</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index.html">Absensi</a></li>
                                <li><a class="nav-link" href="index-0.html">Gaji</a></li>
                                <li><a class="nav-link" href="index.html">Feedback</a></li>
                                <li><a class="nav-link" href="index.html">Cuti</a></li>
                            </ul>
                    </ul>
                    </li>


            </div>


            <!-- Main Content -->
            <div class="container-fluid">
                @yield('content')
            </div>


        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="assets/modules/jquery.sparkline.min.js"></script>
    <script src="assets/modules/chart.min.js"></script>
    <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="assets/modules/summernote/summernote-bs4.js"></script>
    <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
