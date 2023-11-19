<?php 
    session_start();

    if(isset($_SESSION['halaman'])){
        echo"
            <script>
                window.location.replace('admin/super_dashboard.php');
            </script>
        ";
        exit;
    }
?>

<!doctype html>

<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>Pesantren Nurul Hidayah Sapanang </title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/pesantren.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/logo-2.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/logo-3.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/logo-4.png">


     <!--styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>

	<body  data-spy="scroll" data-target="#main-menu">
 

  <!--Start Page loader -->
  <div id="pageloader">   
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->
   
      
   <!--Start Navigation-->
		<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="index.html">
									<img src="images/logo.png" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">
                                
									<li> <a href="index.php#home">Home</a> </li>
                                    
                                    <li> <a href="index.php#history">Sejarah</a> </li>
                                    
                                     <li> <a href="index.php#team">Struktur</a> </li>
																		
									<li> <a href="index.php#informasi">Informasi</a></li>

                                    <li><a href="admin/login.php">Login</a></li>
										
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->