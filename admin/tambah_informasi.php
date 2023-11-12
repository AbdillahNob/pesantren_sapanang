<?php
require 'template/sidebar_desktop.php';
require 'template/header_desktop.php';
require 'template/sidebar_mobile.php';
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- <div class="col-lg-6"> -->
            <div class="card">
                <div class="card-header">
                    <strong>Data Tambah</strong> Informasi
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <!-- Judul -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="judul" class=" form-control-label">Judul</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="judul" name="judul" placeholder="Masukkan Judul" class="form-control">
                            </div>
                        </div>

                        <!-- Deskripsi Informasi -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="deskripsi" class=" form-control-label">Deskripsi</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="9" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Tgl Informasi -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="tanggal_informasi" class=" form-control-label">Tanggal Informasi</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tanggal_informasi" name="tanggal_informasi" class="form-control">
                            </div>
                        </div>

                        <!-- Penulis -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="penulis" class=" form-control-label">Penulis</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Masukkan Penulis">
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="gambar" class=" form-control-label">Gambar</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="gambar" name="gambar" class="form-control">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit">
                        <i class="fa fa-plus-circle"></i> Submit
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
require 'template/footer.php';
?>