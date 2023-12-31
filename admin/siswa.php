<?php
require 'template/header.php';
require '../function/function.php';

if(isset($_POST['search'])){
    $cari = $_POST['cari'];
    $_SESSION['cari'] = $cari;

    // Apabila sdh Search data dan masuk ke halaman/pagination lain siswa.php
} else if(isset($_SESSION['cari'])){
    $cari = $_SESSION['cari'];
}else{
    $cari = "";
}
$query = "SELECT * FROM siswa WHERE 
                        nis LIKE '%$cari%' OR
                        nama_siswa LIKE '%$cari%' OR
                        kelas LIKE '%$cari%' 
                        ";

$query_siswa = tampil($query);

$dataPerhalaman = 10;
$totalData = mysqli_num_rows($query_siswa);
$jumlahPage = ceil($totalData / $dataPerhalaman);

$halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
$dataAwal = ($halamanAktif * $dataPerhalaman) - $dataPerhalaman;

$viewData = tampil("SELECT * FROM siswa WHERE
                                        nis LIKE '%$cari%' OR
                                        nama_siswa LIKE '%$cari%' OR
                                        kelas LIKE '%$cari%'
                                        LIMIT $dataAwal, $dataPerhalaman");

if($halamanAktif > 3){
    $startNu = $halamanAktif - 3;

}else{
    $startNu = 1;
}

if($halamanAktif < ($jumlahPage - 3)){
    $endNu = $halamanAktif + 3;
}else{
    $endNu = $jumlahPage;
}

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
                <!-- Form Search -->
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="search" name="cari" placeholder="Cari data Siswa..." autofocus autocomplete="offs" />
                    <button class="au-btn--submit" type="submit" name="search">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <button type="submit" class="btn btn-info" name="search">Reset<a href="clean_search.php"></a></button>
                </form>

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
                                    <th>Nisn</th>
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
                            $n = $dataAwal + 1;
                            while ($row = mysqli_fetch_assoc($viewData)) :
                            ?>
                                <tbody>
                                    <tr>
                                        <th>
                                            <p align="center"><?= $n++; ?></p>
                                        </th>
                                        <td><?= $row['nis']; ?></td>
                                        <td><?= $row['nama_siswa']; ?></td>
                                        <td>
                                            <a class="upper"><?= $row['jenis_kelamin']; ?></a>
                                        </td>
                                        <!-- Validasi warna tulisan status siswa -->
                                        <td class="<?php
                                                    if ($row['status'] == 'aktif') {
                                                        echo 'process';
                                                    } else if ($row['status'] == 'dikeluarkan' || $row['status'] == 'tamat') {
                                                        echo 'denied';
                                                    } else {
                                                        echo '';
                                                    }
                                                    ?>">
                                            <a class="upper"><?= $row['status']; ?></a>
                                        </td>
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
                                                    <a href="hapus_siswa.php?id=<?= $row['id_siswa']; ?>&no_file=2" onclick="return confirm('Yakin Hapus Siswa ini?')">
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

                    <!-- Pagination -->
                    <ul class="pagination">
                        <?php if($halamanAktif > 1): ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif - 1 ?>">Previous</a></li>
                        <?php endif; ?>

                        <?php for($i = $startNu; $i <= $endNu; $i++): ?>
                            <?php if($i == $halamanAktif): ?>
                                <li class="page-item active"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php else : ?>    
                                <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i; ?></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if($halamanAktif < $jumlahPage): ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif + 1 ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                    <!-- End Pagination -->

                </div>
            </div>

            <?php
            require 'template/footer.php';
            ?>