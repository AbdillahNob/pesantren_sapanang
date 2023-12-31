<?php
require 'template/header.php';
require '../function/function.php';

if (isset($_POST['submit'])) {

    $no_file = $_GET['no_file'];
    if (insert($_POST, $no_file) > 0) {
        echo "
            <script>
                setTimeout(function () {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Berhasil Tambah User',
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
}
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- <div class="col-lg-6"> -->
            <div class="card">
                <div class="card-header">
                    <strong>Data Tambah</strong> User
                </div>
                <div class="card-body card-block">
                    <form action="?no_file=1" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <!-- Nama User -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nama" class=" form-control-label">Nama User</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" required>
                                <small class="help-block form-text">Mohon masukkan Nama dgn benar</small>
                            </div>
                        </div>

                        <!-- Username-->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="username" class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="username" name="username" placeholder="Masukkan Username" class="form-control" required>
                                <small class="help-block form-text">Mohon masukkan Username dgn benar</small>
                            </div>
                        </div>

                        <!-- Role -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="status" class=" form-control-label">Status akun</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="status" class="form-control-sm form-control" required>
                                    <option value="">Pilih Status</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password" name="password" placeholder="Masukkan Password" class="form-control" required>
                            </div>
                        </div>

                        <!-- RE-Password -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="rePassword" class="form-control-label">Konfirmasi Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="Password" id="rePassword" name="rePassword" placeholder="Konfirmasi Ulang Password" class="form-control" required>
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="gambar" class="form-control-label">Gambar</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="gambar" name="gambar" class="form-control" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                <i class="fa fa-plus-circle"></i> Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
require 'template/footer.php';
?>