<?php
require '../function/function.php';
require 'template/header.php';

$id =  $_GET['id'];
$query_struktur = tampil("SELECT * FROM struktur WHERE id_struktur = $id");
if (isset($_POST['submit'])) {
    $no_file = $_POST['no_file'];

    if (update($_POST, $no_file) > 0) {
        echo "
        <script>
            setTimeout(function () {
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Berhasil Edit Struktur',
                    icon: 'success',
                    timer: '6200',
                    showConfirmButton: false
                });
            },10);
            window.setTimeout(function(){
                window.location.replace('struktur.php');
            },3000);
        </script>
        ";
    } else {
        echo "
        <script>
            setTimeout(function () {
                Swal.fire({
                    title: 'INFO',
                    text: 'Tidak ada perubahan data Struktur',
                    icon: 'warning',
                    timer: '6200',
                    showConfirmButton: false
                });
            },10);
            window.setTimeout(function(){
                window.location.replace('struktur.php');
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
                    <strong>Data Edit</strong> Struktur
                </div>
                <div class="card-body card-block">

                    <?php while ($row = mysqli_fetch_assoc($query_struktur)) : ?>
                        <form role="form" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id_struktur" value="<?= $row['id_struktur']; ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $row['gambar']; ?>">
                            <input type="hidden" name="jabatan_lama" value="<?= $row['jabatan']; ?>">
                            <input type="hidden" name="no_file" value="3">

                            <!-- Nik -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nik" class=" form-control-label">Nik</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nik" name="nik" placeholder="Masukkan Nik" class="form-control" value="<?= $row['nik'] ?>" required>
                                    <small class="form-text text-muted">Nik tidak boleh sama</small>
                                </div>
                            </div>

                            <!-- Nama Guru/Staf -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama" class=" form-control-label">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama " class="form-control" value="<?= $row['nama']; ?>" required>
                                    <small class="help-block form-text">Mohon masukkan Nama dgn benar</small>
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Jenis Kelamin :
                                        <a class="upper"><?= $row['jenis_kelamin']; ?></a>
                                    </label>
                                    <input type="hidden" name="jenis_kelamin" value="<?= $row['jenis_kelamin']; ?>">
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="pria" class="form-check-label ">
                                            <input type="radio" id="pria" name="jenis_kelamin" value="pria" class="form-check-input">Pria
                                        </label>
                                        <label for="wanita" class="form-check-label ">
                                            <input type="radio" id="wanita" name="jenis_kelamin" value="wanita" class="form-check-input">Wanita
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tempat lahir -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="tempat_lahir" class=" form-control-label">Tempat lahir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat lahir" class="form-control" value="<?= $row['tempat_lahir']; ?>" required>
                                </div>
                            </div>

                            <!-- Tgl Lahir -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?= $row['tgl_lahir']; ?>" required>
                                </div>
                            </div>

                            <!-- No.Telepon -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="telepon" class=" form-control-label">Telepon</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="telepon" name="telepon" placeholder="Masukkan Telepon" class="form-control" value="<?= $row['no_telepon']; ?>" required>
                                </div>
                            </div>

                            <!-- Jabatan -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="jabatanBaru" class=" form-control-label">Jabatan : <?= $row['jabatan']; ?></label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="jabatanBaru" id="jabatanBaru" class="form-control-sm form-control">
                                        <option value="">Pilih Jabatan</option>
                                        <option value="kepala yayasan">Kepala Yayasan</option>
                                        <option value="guru">Guru</option>
                                        <option value="staf">Staf</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Gambar -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="gambar" class=" form-control-label">Foto</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="gambar" name="gambar" class="form-control">
                                    <img src="../images/struktur/<?= $row['gambar']; ?>">
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