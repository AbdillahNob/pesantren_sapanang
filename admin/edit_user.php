<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$query_user = tampil("SELECT * FROM user WHERE id_user=$id");

if (isset($_POST['submit'])) {
    $no_file = $_POST['no_file'];

    if (update($_POST, $no_file) > 0) {
        echo "
            <script>
                setTimeout(function () {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Berhasil Edit User',
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
                    text: 'Tidak ada perubahan User',
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
                    <strong>Data Edit</strong> User
                </div>
                <div class="card-body card-block">
                    <?php while ($row = mysqli_fetch_assoc($query_user)) : ?>

                        <form role="form" action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <input type="hidden" name="id_user" value="<?= $row['id_user']; ?>">
                            <input type="hidden" name="no_file" value="1">
                            <input type="hidden" name="gambar_lama" value="<?= $row['gambar']; ?>">
                            <input type="hidden" name="pass" value="<?= $row['password']; ?>">

                            <!-- Nama User -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama" class=" form-control-label">Nama User</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" value="<?= $row['nama']; ?>">
                                    <small class="help-block form-text">Mohon masukkan Nama dgn benar</small>
                                </div>
                            </div>

                            <!-- Username-->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="username" class=" form-control-label">Username :</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <b class="upper"><?= $row['username']; ?></b>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="passwordLama" class=" form-control-label">Password </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <small class="help-block form-text">Masukkan Password sebelum, Ganti Password BARU</small>
                                    <input type="password" id="passwordLama" name="passwordLama" placeholder="Masukkan Password Sebelumnya" class="form-control">
                                </div>
                            </div>

                            <!-- Password Baru -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password" class=" form-control-label">Password Baru</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="passwordBaru" name="passwordBaru" placeholder="Masukkan Password Baru" class="form-control" value="">
                                </div>
                            </div>

                            <!-- RE-Password -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="rePassword" class=" form-control-label">Konfirmasi Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="Password" id="rePassword" name="rePassword" placeholder="Konfirmasi Ulang Password" class="form-control">
                                </div>
                            </div>

                            <!-- Gambar -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="gambar" class=" form-control-label">Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="gambar" name="gambar" class="form-control">
                                    <img src="images/user/<?= $row['gambar']; ?>" width="200">
                                </div>
                            </div>
                        <?php endwhile; ?>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                <i class="fa fa-plus-circle"></i> Simpan Perubahan
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