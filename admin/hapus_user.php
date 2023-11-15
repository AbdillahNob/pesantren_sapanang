<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$no_file = $_GET['no_file'];

if (hapus($id, $no_file) > 0) {
    echo "
        <script>
            setTimeout(function () {
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Berhasil Hapus User',
                    icon: 'success',
                    timer: '6200',
                    showConfirmButton: false
                });
            },10);
            window.setTimeout(function(){
                window.location.replace('user.php');
            },3000);
        </script>
    ";
} else {
    echo "
        <script>
            setTimeout(function () {
                Swal.fire({
                    title: 'INFO',
                    text: 'Gagal Tambah User',
                    icon: 'warning',
                    timer: '6200',
                    showConfirmButton: false
                });
            },10);
            window.setTimeout(function(){
                window.location.replace('user.php');
            },3000);
        </script>
    ";
}

require 'template/footer.php';