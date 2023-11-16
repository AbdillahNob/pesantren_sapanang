<?php

use LDAP\Result;

$con = mysqli_connect("localhost", "root", "", "pesantren_sapanang");

// if(!$result){
//     echo mysqli_error($con);
// }else{
//     print_r($result);
// }
// var_dump($result);

function tampil($query)
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
        $status = $data['status'];

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

            $result = mysqli_query($con, "SELECT * FROM user WHERE status = '$status'");
            // Validasi agr role ADMIN hanya 1.
            if (mysqli_num_rows($result) > 0 && $status == 'admin') {
                echo "
                    <script>
                        alert('Admin hanya boleh 1 akun !');
                    </script>
                ";
                return false;
            }


            // fungsi upload tdk diluar krna apabila ggl tambah tpi input gmbr benar maka gmbr ttp trkrm ke server
            $gambar = upload($no_foto);
            // jika gambar tdk sesuai kriteria
            if (!$gambar) {
                return false;
            }

            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO user (nama, username, status, password, gambar) VALUES 
                                        ('$nama',
                                        '$username',
                                        '$status',
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
    } else if($no_file == 2){
        $nis = $data['nis'];
        $nama = $data['nama'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $status = $data['status'];
        $tgl_masuk = $data['tanggal_masuk'];
        $tempat_lahir = $data['tempat_lahir'];
        $tgl_lahir = $data['tanggal_lahir'];
        $kelas = $data['kelas'];

        // Validasi apakah jenis kelamin ada/tdk
        if(!$jenis_kelamin){
            echo "
                <script>
                    alert('Anda tidak isi Jenis Kelamin Anda !');
                </script>
            ";
            return false;
        }

        // Validasi jumlah digit nis yg di input
        $j_nis = strlen($nis);
        if($j_nis != 10){
            echo "
                <script>
                    alert('Maaf Nis anda kurang dari 10 digit');
                </script>
            ";
            return false;
        }

        $query = "INSERT INTO siswa (nis, nama_siswa, jenis_kelamin, status, tgl_masuk, tempat_lahir, tgl_lahir, kelas) VALUES
                                    ('$nis',
                                    '$nama',
                                    '$jenis_kelamin',
                                    '$status',
                                    '$tgl_masuk',
                                    '$tempat_lahir',
                                    '$tgl_lahir',
                                    '$kelas')
                                    ";
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
        $fileDir = "../admin/images/user/";
    }

    $namaFotoBaru = uniqid();
    $namaFotoBaru .= ".";
    $namaFotoBaru .= $ekstensiFoto;

    $fileUpload = $fileDir . basename($namaFotoBaru);

    // ambil foto dari server lalu pindahkan ke $fileupload yg isiny folder 
    move_uploaded_file($tmpFile, $fileUpload);

    return $namaFotoBaru;
}

function update($data, $no_file)
{

    $no_foto = $no_file;
    if ($no_file != 2) {

        $gambar_lama = $data['gambar_lama'];
        // Validasi gambar update
        if ($_FILES['gambar']['error'] == 4) {
            $gambar = $gambar_lama;
        } else {
            $gambar = upload($no_foto);

            // Validasi bila gambar yg di-update tdk memenuhi syarat
            if (!$gambar) {
                return false;
            }
        }
    }

    // notes
    // 1.user
    // 2.siswa
    // 3.struktur
    // 4.Informasi

    if ($no_file == 1) {
        global $con;
        $id = $data['id_user'];
        $nama = $data['nama'];
        $passwordLama = $data['passwordLama'];
        $rePassword = $data['rePassword'];

        $result = mysqli_query($con, "SELECT * FROM user WHERE id_user = $id");
        $row = mysqli_fetch_assoc($result);

        // Bila Password Lama benar
        if (password_verify($passwordLama, $row['password'])) {
            $passwordBaru = mysqli_real_escape_string($con, $data['passwordBaru']);

            // Validasi bila ad Password Baru
            if ($passwordBaru == true) {
                // Validasi bila konfirmasi Password tdk sesuai 
                if ($passwordBaru != $rePassword) {
                    echo "
                        <script>
                            alert('Maaf Konfirmasi Password Anda tidak sesuai !');
                        </script>
                    ";
                    return false;
                }
                $password = password_hash($passwordBaru, PASSWORD_DEFAULT);
            }
            // Bila tdk ad Pass baru
            else {
                echo "
                    <script>
                        alert('Mohon Masukkan Password baru anda');
                    </script>
                ";
                return false;
            }
        }
        // Bila Password ad tpi salah pd saat di verifikasi
        else if ($passwordLama == true) {
            echo "
                <script>
                    alert('Maaf Password yg anda input salah !');
                </script>
            ";
            return false;
        }
        // Bila Password tdk di input
        else {
            $password = $data['pass'];
        }

        $query = "UPDATE user SET
                        nama = '$nama',
                        password = '$password',
                        gambar = '$gambar'
                        WHERE id_user = $id
                        ";
    }

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function hapus($id, $no_file)
{
    global $con;

    // notes
    // 1.user
    // 2.siswa
    // 3.struktur
    // 4.Informasi

    if($no_file == 1 ){
        $query = "DELETE FROM user WHERE id_user = $id";
    }
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}
