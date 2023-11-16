<?php
require '../function/function.php';
require 'template/header.php';

$result = tampil("SELECT * FROM struktur");

?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35"><i class="fa fa-address-card"></i> Data Struktur</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <a href="tambah_struktur.php">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Tambah Struktur
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
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Jenis kelamin</th>
                                    <th>Tempat lahir</th>
                                    <th>Tanggal lahir</th>
                                    <th>No telepon</th>
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php 
                            $n = 1;
                            while($row = mysqli_fetch_assoc($result)):
                            ?>
                            <tbody>
                                <tr>
                                    <th><p align="center"><?= $n++; ?></p></th>
                                    <td><?= $row['nik']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><a class="upper"><?= $row['jenis_kelamin'];  ?></a></td>
                                    <td><?= $row['tempat_lahir']; ?></td>
                                    <td><?= $row['tgl_lahir']; ?></td>
                                    <td><?= $row['no_telepon']; ?></td>
                                    <td><a class="upper"><?= $row['jabatan']; ?></a></td>
                                    <td>
                                        <img src="../images/struktur/<?= $row['gambar']; ?>">
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <a href="edit_struktur.php?id=<?= $row['id_struktur']; ?>">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <a href="hapus_struktur.php?id=<?= $row['id_struktur'] ?>&no_file=3" onclick="return confirm('Yakin Hapus Struktur ini ?')">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                           
                            </tbody>
                            <?php endwhile; ?>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

            <?php
            require 'template/footer.php';
            ?>