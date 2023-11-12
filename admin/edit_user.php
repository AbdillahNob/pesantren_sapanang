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
                    <strong>Data Edit</strong> User
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <input type="hidden" name="id_user" value="">
                        <input type="hidden" name="no_file" value="">
                        <input type="hidden" name="gambar_lama" value="">

                        <!-- Nama User -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nama" class=" form-control-label">Nama User</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" value="">
                                <small class="help-block form-text">Mohon masukkan Nama dgn benar</small>
                            </div>
                        </div>

                        <!-- Username-->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="username" class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="username" name="username" placeholder="Masukkan Username" class="form-control" value="">
                                <small class="help-block form-text">Mohon masukkan Username dgn benar</small>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password" name="password" placeholder="Masukkan Password" class="form-control" value="">
                            </div>
                        </div>

                        <!-- RE-Password -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="rePassword" class=" form-control-label">Konfirmasi Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="rePassword" id="rePassword" name="rePassword" placeholder="Konfirmasi Ulang Password" class="form-control">
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="gambar" class=" form-control-label">Gambar</label>
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