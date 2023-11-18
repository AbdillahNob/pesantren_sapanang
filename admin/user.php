<?php
require 'template/header.php';
require '../function/function.php';

$query_user = tampil("SELECT * FROM user");

$dataPerhalaman = 2;
$totalData = mysqli_num_rows($query_user);
$jumlahPage = ceil($totalData / $dataPerhalaman);

$halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
$dataAwal = ($halamanAktif * $dataPerhalaman) - $dataPerhalaman;

$viewData = tampil("SELECT * FROM user LIMIT $dataAwal, $dataPerhalaman");

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

            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i>User data
                </h3>

                <div class="filters m-b-45">
                    <div class="table-data__tool-right">
                        <a href="tambah_user.php">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Tambah User
                            </button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive text-nowrap ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n = $dataAwal + 1;
                            while ($row = mysqli_fetch_assoc($viewData)) : ?>
                                <tr>
                                    <td align="center"><?= $n++ ?>.</td>
                                    <td>
                                        <img src="images/user/<?= $row['gambar'] ?>" height="200">
                                    </td>
                                    <td>
                                        <div class="table-data__info">
                                            <h6><?= $row['nama']; ?></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="role <?= $row['status']; ?>"><?= $row['status']; ?></span>
                                    </td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= $row['password']; ?></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <a href="edit_user.php?id=<?= $row['id_user']; ?>"><i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <a href="hapus_user.php?id=<?= $row['id_user']; ?>&no_file=1" onclick="return confirm('Yakin Hapus User ini ?')"><i class="zmdi zmdi-delete"></i></a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>

                        </tbody>
                    </table>
                </div>

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
            <!-- END USER DATA-->



            <?php
            require 'template/footer.php';
            ?>