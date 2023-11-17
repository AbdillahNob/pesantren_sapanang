<?php
require '../function/function.php';
require 'template/header.php';

$query_informasi = tampil("SELECT * FROM informasi");

?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35"><i class="fa fa-info-circle"></i> Data Informasi</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <a href="tambah_informasi.php">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Tambah Informasi
                        </button>
                    </a>
                </div>
            </div>
            <!-- END DATA TABLE -->

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40 ">
                        <table class="table table-borderless table-data3">
                            <thead >
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Informasi</th>
                                    <th>Penulis</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php 
                                $n = 1;
                                while($row = mysqli_fetch_assoc($query_informasi)):
                            ?>
                            <tbody>
                                <tr>
                                    <td><p align="center"><?= $n++; ?></p></td>
                                    <td><?= $row['judul']; ?></td>
                                    <td><?= $row['deskripsi']; ?></td>
                                    <td><?= $row['tgl_informasi']; ?></td>
                                    <td class="process"><?= $row['penulis']; ?></td>
                                    <td>
                                        <img src="../images/informasi/<?= $row['gambar']; ?>">
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <a href="edit_informasi.php?id=<?= $row['id_informasi']; ?>"><i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <a href="hapus_informasi.php?id=<?= $row['id_informasi']; ?>&no_file=4" onclick="return confirm('Yakin Hapus Informasi ini ?')"><i class="zmdi zmdi-delete"></i></a>
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