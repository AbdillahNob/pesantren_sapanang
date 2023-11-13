<?php 
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$no_file = $_GET['no_file'];

if( hapus($id, $no_file) > 0 ){
    echo"
        <script>
            alert('Berhasil Hapus User');
            window.location.replace('user.php');
        </script>
    ";
}else{
    echo"
        <script>
            alert('Gagal Hapus User');
            window.location.replace('user.php');
        </script>
    ";
}
