<?php
require '../function/function.php';
require 'template/header.php';

$id = $_GET['id'];
$query_siswa = tampil("SELECT * FROM siswa WHERE id_siswa=$id");

if(isset($_POST['submit'])){
    $no_file = $_POST['no_file'];
    
    if(update($_POST, $no_file) > 0){
        echo "
            <script>
                setTimeout(function () {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Berhasil Edit Siswa',
                        icon: 'success',
                        timer: '6200',
                        showConfirmButton: false
                    });
                },10);
                window.setTimeout(function(){
                    window.location.replace('siswa.php');
                },3000);
            </script>
            ";
    } else{
        echo "
            <script>
                setTimeout(function () {
                    Swal.fire({
                        title: 'INFO',
                        text: 'Tidak ada perubahan data Siswa',
                        icon: 'warning',
                        timer: '6200',
                        showConfirmButton: false
                    });
                },10);
                window.setTimeout(function(){
                    window.location.replace('siswa.php');
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
                    <strong>Data Edit</strong> Siswa
                </div>
                <div class="card-body card-block">
                    <?php while($row = mysqli_fetch_assoc($query_siswa)): ?>

                    <form action="" method="post" class="form-horizontal">
                        <input type="hidden" name="id_siswa" value="<?= $row['id_siswa']; ?>">
                        <input type="hidden" name="no_file" value="2">
                        <input type="hidden" name="status_lama" value="<?= $row['status']; ?>">

                        <!-- Nis -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nis" class=" form-control-label">Nis</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nis" name="nis" placeholder="Nis" class="form-control" value="<?= $row['nis']; ?>" required>
                                <small class="form-text text-muted">Nis tidak boleh sama</small>
                            </div>
                        </div>

                        <!-- Nama Siswa -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nama" class=" form-control-label">Nama Siswa</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nama" name="nama" placeholder="Masukkan nama siswa" class="form-control" value="<?= $row['nama_siswa']; ?>" required>
                                <small class="help-block form-text">Mohon masukkan Nama dgn benar</small>
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Jenis Kelamin :
                                    <b><a class="upper"><?= $row['jenis_kelamin']; ?></a></b>
                                </label>
                                <input type="hidden" name="jenis_kelamin" value="<?= $row['jenis_kelamin']; ?>" required>
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

                        <!-- Status -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="statusBaru" class=" form-control-label">Status siswa : <?= $row['status']; ?></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="statusBaru" id="statusBaru" class="form-control-sm form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="dikeluarkan">Dikeluarkan</option>
                                    <option value="tamat">Tamat</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tgl masuk -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="tanggal_masuk" class=" form-control-label">Tanggal masuk : </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" value="<?= $row['tgl_masuk']; ?>" required>
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
                                <label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir : </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?= $row['tgl_lahir']; ?>" required>
                            </div>
                        </div>

                        <!-- Kelas -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kelas" class=" form-control-label">kelas</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas" class="form-control" value="<?= $row['kelas']; ?>" required>
                            </div>
                        </div>
                        <?php endwhile; ?>
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