<?php
require '../function/function.php';
require 'template/header.php';

$query_siswa = tampil("SELECT * FROM siswa");

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
                                    <th>No</th>
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
                            <?php 
                                $n= 1;
                                while($row = mysqli_fetch_assoc($query_siswa)):
                                ?>
                            <tbody>
                                <tr>
                                    <td><?= $n++; ?></td>
                                    <td><?= $row['nis']; ?></td>
                                    <td><?= $row['nama_siswa']; ?></td>
                                    <td><?= $row['jenis_kelamin']; ?></td>
                                    <td><?= $row['status']; ?></td>
                                    <td><?= $row['tgl_masuk']; ?></td>
                                    <td><?= $row['tempat_lahir']; ?></td>
                                    <td><?= $row['tgl_lahir']; ?></td>
                                    <td><?= $row['kelas']; ?></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <a href="edit_siswa.php?id=<?= $row['id_siswa']; ?>"><i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <a href="hapus_siswa.php?id=<?= $row['id_siswa']; ?>&no_file=2"><i class="zmdi zmdi-delete"></i></a>
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