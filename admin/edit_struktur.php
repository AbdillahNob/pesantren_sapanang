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
                    <strong>Data Edit</strong> Struktur
                </div>
                <div class="card-body card-block">

                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <input type="hidden" name="id_struktur" value="">
                        <input type="hidden" name="no_file" value="">
                        <input type="hidden" name="gambar_lama" value="">
                        
                        <!-- Nik -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nik" class=" form-control-label">Nik</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nik" name="nik" placeholder="Masukkan Nik" class="form-control" value="">
                                <small class="form-text text-muted">Nik tidak boleh sama</small>
                            </div>
                        </div>

                        <!-- Nama Guru/Staf -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="team" class=" form-control-label">Nama</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="team" name="team" placeholder="Masukkan Nama " class="form-control" value="">
                                <small class="help-block form-text">Mohon masukkan Nama dgn benar</small>
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Jenis Kelamin : <?php ?></label>
                                <input type="hidden" name="jenis_kelamin" value="">
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
                                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat lahir" class="form-control" value="">
                            </div>
                        </div>

                        <!-- Tgl Lahir -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="">
                            </div>
                        </div>

                        <!-- No.Telepon -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="telepon" class=" form-control-label">Telepon</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="telepon" name="telepon" placeholder="Masukkan Telepon" class="form-control" value="">
                            </div>
                        </div>

                        <!-- Jabatan -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="posisi" class=" form-control-label">Jabatan : <?php ?></label>
                                <input type="hidden" name="posisi" value="">
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="posisi" id="posisi" class="form-control-sm form-control">
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
                                <img src="">
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