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
                    <strong>Basic Form</strong> Elements
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <!-- Nis -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nis" class=" form-control-label">Nis</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nis" name="nis" placeholder="Nis" class="form-control">
                                <small class="form-text text-muted">Nis tidak boleh sama</small>
                            </div>
                        </div>

                        <!-- Nama Siswa -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nama" class=" form-control-label">Nama Siswa</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nama" name="nama" placeholder="Masukkan nama siswa" class="form-control">
                                <small class="help-block form-text">Mohon masukkan Nama dgn benar</small>
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Jenis Kelamin</label>
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
                                <label for="status" class=" form-control-label">Status siswa</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="status" class="form-control-sm form-control">
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
                                <label for="tanggal_masuk" class=" form-control-label">Tanggal masuk</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control">
                            </div>
                        </div>

                        <!-- Tempat lahir -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="tempat_lahir" class=" form-control-label">Tempat lahir</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat lahir" class="form-control">
                            </div>
                        </div>

                        <!-- Tgl keluar -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="tanggal_keluar" class=" form-control-label">Tanggal keluar</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tanggal_keluar" name="tanggal_keluar" class="form-control">
                            </div>
                        </div>

                        <!-- Kelas -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kelas" class=" form-control-label">kelas</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas" class="form-control">
                                <small class="form-text text-muted">kelas tidak boleh sama</small>
                            </div>
                        </div>

              
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
require 'template/footer.php';
?>