<?php
require '../function/function.php';
require 'template/header.php';

$query_informasi = tampil("SELECT * FROM informasi");

$dataPerhalaman = 3;
$totalData = mysqli_num_rows($query_informasi);
$jumlahPage = ceil($totalData / $dataPerhalaman);

$halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
$dataAwal = ($halamanAktif * $dataPerhalaman) - $dataPerhalaman;

$viewData = tampil("SELECT * FROM informasi LIMIT $dataAwal, $dataPerhalaman");

if ($halamanAktif > 3) {
    $startNu = $halamanAktif - 3;
} else {
    $startNu = 1;
}

if ($halamanAktif < ($jumlahPage - 3)) {
    $endNu = $halamanAktif + 3;
} else {
    $endNu = $jumlahPage;
}

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
                        <table class="table table-borderless table-data1">
                            <thead>
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
                            $n = $dataAwal + 1;
                            while ($row = mysqli_fetch_assoc($viewData)) :
                            ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p align="center"><?= $n++; ?></p>
                                        </td>
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

                    <!-- Pagination -->
                    <ul class="pagination">
                        <?php if ($halamanAktif > 1) : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif - 1 ?>">Previous</a></li>
                        <?php endif; ?>

                        <?php for ($i = $startNu; $i <= $endNu; $i++) : ?>
                            <?php if ($i == $halamanAktif) : ?>
                                <li class="page-item active"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php else : ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i; ?></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($halamanAktif < $jumlahPage) : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif + 1 ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                    <!-- End Pagination -->

                </div>
            </div>

            <?php
            require 'template/footer.php';
            ?>