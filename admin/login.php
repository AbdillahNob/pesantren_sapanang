<?php 
require '../function/function.php';
require '../admin/template/call_sweetAlert.php';
session_start();

// Validasi apabila msh ad cookie di client browser
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $username = $_COOKIE['key'];

    $data = tampil("SELECT * FROM user WHERE id_user = $id");
    $validasi = mysqli_fetch_assoc($data);

    if($username == hash('sha256', $validasi['username'])){
        $_SESSION['hal'] = true;
        $_SESSION['username'] = $validasi['username'];
    }
}

// Jgn Login klu belum Log-Out
if(isset($_SESSION['hal'])){
    echo "
        <script>
            window.location.replace('super_dashboard.php');
        </script>
    ";
}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $result = tampil("SELECT * FROM user WHERE username ='$username'");
    
    if(mysqli_num_rows($result) > 0){
        $password = $_POST['password'];
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
                $_SESSION['hal'] = true;
                $_SESSION['username'] = $row['username'];

            if(isset($_POST['remember'])){
                setcookie('id', $row['id_user'], time()+60*60*24);
                setcookie('key', hash('sha256', $row['username']), time()+60*60*24);
            }
            echo"
                <script>
                    setTimeout(function () {
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Berhasil Login',
                            icon: 'success',
                            timer: '6200',
                            showConfirmButton: false
                        });
                    },10);
                    window.setTimeout(function(){
                        window.location.replace('super_dashboard.php');
                    },3000);
                </script>
            ";
        }else{
            echo"
                <script>
                    setTimeout(function () {
                        Swal.fire({
                            title: 'INFO',
                            text: 'Maaf Password anda Salah !',
                            icon: 'error',
                            timer: '6200',
                            showConfirmButton: false
                        });
                    },10);
                    window.setTimeout(function(){
                        window.location.replace('login.php');
                    },3000);
                </script>
            ";
        }
    }else{
        echo "
            <script>
            setTimeout(function () {
                Swal.fire({
                    title: 'INFO',
                    text: 'Maaf Username anda belum terdaftar !',
                    icon: 'warning',
                    timer: '6200',
                    showConfirmButton: false
                });
            },10);
            window.setTimeout(function(){
                window.location.replace('login.php');
            },3000);
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
    <title>Pesantren Nurul Hidayah Sapanang</title>
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
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">Login</button>
                           
                            </form>
                            <div class="register-link">
                                <p>
                                    Sudah Punya Akun ?
                                    <a href="register.php">Registrasi Akun</a>
                                </p>
                            </div>
                
                            <a href="../index.php"><i class="fa fa-home"></i></a>
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