<?php 
require '../function/function.php';
require 'template/call_sweetAlert.php';

$id = $_GET['id'];
$no_file = $_GET['no_file'];

if(hapus($id, $no_file) > 0 ){
    echo "
    <script>
        setTimeout(function () {
            Swal.fire({
                title: 'Berhasil',
                text: 'Berhasil Hapus Informasi',
                icon: 'success',
                timer: '6200',
                showConfirmButton: false
            });
        },10);
        window.setTimeout(function(){
            window.location.replace('informasi.php');
        },3000);
    </script>
";
} else {
echo "
    <script>
        setTimeout(function () {
            Swal.fire({
                title: 'INFO',
                text: 'Gagal Hapus Informasi',
                icon: 'warning',
                timer: '6200',
                showConfirmButton: false
            });
        },10);
        window.setTimeout(function(){
            window.location.replace('informasi.php');
        },3000);
    </script>
";
}





?>