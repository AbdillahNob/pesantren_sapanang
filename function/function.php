<?php

use LDAP\Result;

$con = mysqli_connect("localhost", "root", "", "pesantren_sapanang");

// if(!$result){
//     echo mysqli_error($con);
// }else{
//     print_r($result);
// }
// var_dump($result);

function view($query)
{
    global $con;
    $result = mysqli_query($con, $query);

    return $result;
}

function insert($data, $no_file)
{
    global $con;

    $no_foto = $no_file;
    if ($no_foto != 2) {
        $gambar = upload($no_foto);

        //jika gambar tdk memenuhi syarat
        if (!$gambar) {
            return false;
        }
    }

    // Notes
    // 1. User
    // 2. Siswa
    // 3. Struktur
    // 4. Informasi
    if ($no_file == 1) {
        $nama = mysqli_real_escape_string($con, $data['nama']);
        $username = strtolower(stripslashes($data['username']));
        $password = mysqli_real_escape_string($con, $data['password']);
        $rePassword = mysqli_real_escape_string($con, $data['repassword']);

        // Validasi Konfirmasi password
        if ($password != $rePassword) {
            echo "
                <script>
                    alert('Konfirmasi Password Anda Salah !');
                </script>
            ";
            return false;
        }

        // Validasi untuk membatasi akun yg didaftar
        if ($username == "kepala sekolah" || $username == "guru" || $username == "staf") {

            $result = mysqli_query($con, "SELECT * FROM user WHERE username ='$username'");
            // Validasi apakah username yg didftr sdh ad di DB
            if(mysqli_num_rows($result)>0){
                echo"
                    <script>
                        alert('Maaf Username anda sdh di daftar sebelumnya');
                    </script>
                ";
            }
            
            $password = password_hash($password,PASSWORD_DEFAULT);
            $query = "INSERT INTO user (nama, username, password, gambar) VALUES ('$nama','$username','$password', '$gambar')";
        } 
        else {
            echo "
                <script>
                    alert('Maaf Anda tidak berhak daftar Akun !');
                </script>
            ";
        }
    }
}

function upload(){
    
}


