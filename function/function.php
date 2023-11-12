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

    // Notes
    // 1. User
    // 2. Siswa
    // 3. Struktur
    // 4. Informasi
    if ($no_file == 1) {
        $nama = mysqli_real_escape_string($con, $data['nama']);
        $username = strtolower(stripslashes($data['username']));
        $password = mysqli_real_escape_string($con, $data['password']);
        $rePassword = mysqli_real_escape_string($con, $data['rePassword']);

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
        if ($username == 'kepala sekolah' || $username == 'guru' || $username == 'staf') {

            $result = mysqli_query($con, "SELECT * FROM user WHERE username ='$username'");
            // Validasi apakah username yg didftr sdh ad di DB
            if (mysqli_num_rows($result) > 0) {
                echo "
                    <script>
                        alert('Maaf Username anda sdh di daftar sebelumnya');
                    </script>
                ";
                return false;
            }

            // fungsi upload tdk diluar krna apabila ggl tambah tpi input gmbr benar maka gmbr ttp trkrm ke server
            $gambar = upload($no_foto);
            // jika gambar tdk sesuai kriteria
            if(!$gambar){
                return false;
            }

            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO user (nama, username, password, gambar) VALUES 
                                        ('$nama',
                                        '$username',
                                        '$password', 
                                        '$gambar')
                                        ";
        } else {
            echo "
                <script>
                    alert('Maaf Anda tidak berhak daftar Akun !');
                </script>
            ";
            return false;
        }
    }

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function upload($no_foto)
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpFile = $_FILES['gambar']['tmp_name'];

    // Validasi ekstensi foto
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiFoto = explode(".", $namaFile);
    $ekstensiFoto = strtolower(end($ekstensiFoto));
    if (!in_array($ekstensiFoto, $ekstensiValid)) {
        echo "
            <script>
                alert('Ekstensi foto anda harus jpg,jpeg dan png !');
            </script>
        ";
        return false;
    }

    if ($ukuranFile > 10000000) {
        echo "
            <script>
                alert('Ukuran foto anda terlalu besar !');
            </script>
        ";
        return false;
    }
    // Notes
    // 1. User
    // 2. Siswa
    // 3. Struktur
    // 4. Informasi
    if ($no_foto == 1) {
        $fileDir = "../images/user/";
    }

    $namaFotoBaru = uniqid();
    $namaFotoBaru .= ".";
    $namaFotoBaru .= $ekstensiFoto;

    $fileUpload = $fileDir . basename($namaFotoBaru);

    // ambil foto dari server lalu pindahkan ke $fileupload yg isiny folder 
    move_uploaded_file($tmpFile, $fileUpload);

    return $namaFotoBaru;
}
