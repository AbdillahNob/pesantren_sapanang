<?php 
session_start();

$_SESSION=[];
session_unset();
session_destroy();

setcookie("idd", "", time()-1);
setcookie("keyy", "", time()-1);
header('location:login.php');
?>