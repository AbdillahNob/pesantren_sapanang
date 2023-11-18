<?php
session_start();
// require '../../function/function.php';

if (!isset($_SESSION['halaman'])) {
    echo "
        <script>
            window.location.replace('login.php');
        </script>
    ";
}
$username = $_SESSION['username'];

$con = mysqli_connect("localhost", "root", "", "pesantren_sapanang");
$query_total = mysqli_query($con, "SELECT * FROM user");


$query_user = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($con, $query_user);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Pesantren Nurul Hidayah Sapanang</title>
    <link rel="shortcut icon" href="../images/pesantren.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/logo-2.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/logo-3.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/logo-4.png">

    <style type="text/css">
        .upper {
            text-transform: uppercase;
        }
    </style>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet"> -->

</head>

<body class="animsition">

    <!-- Utama -->
    <div class="page-wrapper">
        <!-- MENU SIDEBAR Desktop-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-100">
                        <img src="images/user/<?= $data['gambar']; ?>" class="img-fluid" alt="Responsive image" />
                    </div>
                    <h4 class="name"><?= $data['nama']; ?></h4>
                    <b><a class="upper"><?= $data['status']; ?></a></b>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="#">
                                <a href="super_dashboard.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                </a>
                            </a>
                        </li>
                        <?php if ($data['status'] == 'admin') : ?>
                            <li>
                                <a href="user.php">
                                    <i class="fas fa-user-circle"></i>User</a>
                                <span class="inbox-num"><?= mysqli_num_rows($query_total); ?></span>
                            </li>
                        <?php endif; ?>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>Data
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="siswa.php">
                                        <i class="fas fa-users"></i>Siswa</a>
                                </li>
                                <li>
                                    <a href="struktur.php">
                                        <i class="fas fa-address-card"></i>Struktur</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="informasi.php">
                                <i class="fas fa-info-circle"></i>Informasi</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR Desktop-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>

                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">

                                </div>

                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="form.php">
                                                <i class="zmdi zmdi-account"></i>Register Akun</a>
                                        </div>

                                        <div class="account-dropdown__item">
                                            <a href="log_out.php" onclick="return confirm('Yakin mau keluar ?')">
                                                <i class="zmdi zmdi-close-circle"></i>Keluar</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header Desktop -->

            <!-- SideBar Mobile -->
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-100">
                            <img src="images/user/<?= $data['gambar']; ?>" alt="Responsive image" />
                        </div>
                        <h4 class="name"><?= $data['nama']; ?></h4>
                        <b><a class="upper"><?= $data['status']; ?></a></b>
                    </div>

                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a class="js-arrow" href="#">
                                    <a href="super_dashboard.php">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard
                                    </a>
                                </a>
                            </li>
                            <?php if ($data['status'] == 'admin') : ?>
                                <li>
                                    <a href="user.php">
                                        <i class="fas fa-user-circle"></i>User</a>
                                    <span class="inbox-num"><?= mysqli_num_rows($query_total); ?></span>
                                </li>
                            <?php endif; ?>

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-book"></i>Data
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="siswa.php">
                                            <i class="fas fa-users"></i>Siswa</a>
                                    </li>
                                    <li>
                                        <a href="struktur.php">
                                            <i class="fas fa-address-card"></i>Struktur</a>
                                    </li>
                                </ul>
                            </li>s
                            <li>
                                <a href="informasi.php">
                                    <i class="fas fa-info-circle"></i>Informasi
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </aside>
            <!-- End Sidebar Mobile -->