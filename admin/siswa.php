<?php
require 'template/sidebar_desktop.php';
require 'template/header_desktop.php';
require 'template/sidebar_mobile.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35"><i class="fa fa-users"></i> Data Siswa</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <a href="tambah_siswa.php">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Tambah Siswa
                        </button>
                    </a>
                </div>
            </div>
            <!-- END DATA TABLE -->

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40 text-nowrap">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Nis</th>
                                    <th>Nama</th>
                                    <th>Jenis kelamin</th>
                                    <th>status</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal lahir</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td class="process">Processed</td>
                                    <td>$999.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2018-09-22 00:43</td>
                                    <td>Computer</td>
                                    <td>Macbook Pro Retina 2017</td>
                                    <td class="process">Processed</td>
                                    <td>$10.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

            <?php
            require 'template/footer.php';
            ?>