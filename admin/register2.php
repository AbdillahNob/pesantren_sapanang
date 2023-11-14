<?php
session_start();
require '../function/function.php';

$nama = $_SESSION['nama'];
$username = $_SESSION['username'];
$status = $_SESSION['status'];

// var_dump($_SESSION['nama']);


if (isset($_POST['submit'])) {

    $no_file = $_GET['no_file'];
    if (insert($_POST, $no_file) > 0) {
        echo "
            <script>
                alert('Berhasil Tambah Akun');
                window.location.replace('login.php');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal Tambah Akun');
                window.location.replace('register.php');
            </script>
        ";
    }
}

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
    <title>Register Akun</title>
    <link rel="shortcut icon" href="../images/pesantren.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/logo-2.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/logo-3.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/logo-4.png">

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="?no_file=1" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="nama" value="<?= $nama ?>">
                                <input type="hidden" name="username" value="<?= $username ?>">
                                <input type="hidden" name="status" value="<?= $status ?>">

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Masukkan Password" required>
                                </div>

                                <div class="form-group">
                                    <label for="rePassword">Konfirmasi Password</label>
                                    <input class="au-input au-input--full" type="text" name="rePassword" placeholder="Konfirmasi password" required>
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input class="au-input au-input--full" type="file" name="gambar" required>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">Submit</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    Sudah Punya Akun ?
                                    <a href="login.php">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->