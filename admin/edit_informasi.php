<?php
require '../function/function.php';
require 'template/header.php';
$id = $_GET['id'];

$query_informasi = tampil("SELECT * FROM informasi WHERE id_informasi = $id");

if(isset($_POST['submit'])){
    $no_file = $_POST['no_file'];

    if(update($_POST, $no_file)){  
        echo "
            <script>
                setTimeout(function () {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Berhasil Edit Informasi',
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
                        text: 'Tidak ada perubahan data informasi',
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
    
}
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- <div class="col-lg-6"> -->
            <div class="card">
                <div class="card-header">
                    <strong>Data Edit</strong> Informasi
                </div>
                <div class="card-body card-block">
                    <?php while ($row = mysqli_fetch_assoc($query_informasi)) : ?>
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id_informasi" value="<?= $row['id_informasi']; ?>">
                            <input type="hidden" name="no_file" value="4">
                            <input type="hidden" name="gambar_lama" value="<?= $row['gambar']; ?>">

                            <!-- Judul -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="judul" class=" form-control-label">Judul</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="judul" name="judul" placeholder="Masukkan Judul" class="form-control" value="<?= $row['judul']; ?>" required>
                                </div>
                            </div>

                            <!-- Deskripsi Informasi -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="deskripsi" class=" form-control-label">Deskripsi</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="9" class="form-control" required><?= $row['deskripsi']; ?></textarea>
                                    <input type="hidden" name="deskripsi" value="<?= $row['deskripsi']; ?>">
                                </div>
                            </div>

                            <!-- Tgl Informasi -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="tanggal_informasi" class=" form-control-label">Tanggal Informasi</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="tanggal_informasi" name="tanggal_informasi" class="form-control" value="<?= $row['tgl_informasi']; ?>" required>
                                </div>
                            </div>

                            <!-- Penulis -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="penulis" class=" form-control-label">Penulis</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Masukkan Penulis" value="<?= $row['penulis']; ?>" required>
                                </div>
                            </div>

                            <!-- Gambar -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="gambar" class=" form-control-label">Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="gambar" name="gambar" class="form-control">
                                    <img src="../images/informasi/<?= $row['gambar']; ?>" width="400">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                    <i class="fa fa-plus-circle"></i> Submit
                                </button>
                            </div>

                        </form>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
require 'template/footer.php';
?>