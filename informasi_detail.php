<?php
require 'function/function.php';
require 'header_informasi.php';

$id = $_GET['id_informasi'];

$query_informasi = tampil("SELECT * FROM informasi WHERE id_informasi = $id");

?>
<!-- page-header -->
<section id="page-header" class="parallax">
	<div class="overlayI"></div>
	<div class="container">
		<h1>Informasi</h1>
		<!--Start Breadcrumb-->
		<div class="breadcrumb">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="index.php#informasi">Informasi</a>
				</li>
				<li class="current">
					<a href="informasi_detail.php?id_informasi=<?= $id; ?>">Informasi Detail</a>
				</li>
			</ul>
		</div>
		<!--End Breadcrumb-->
	</div>
</section>
<!-- /page-header -->

<!-- Start blog -->
<section class="section">
	<?php while($data_informasi = mysqli_fetch_assoc($query_informasi)): ?>
	<div class="container">
		<div class="row">
			<!-- Blog Post -->
			<div class="col-md-12 col-sm-12">
				<div class="post-content">
					<!-- Post Image -->
					<div class="post-img">
						<img src="images/informasi/<?= $data_informasi['gambar']; ?>" alt="" height="600">
					</div>
					<!-- /Post Image-->

					<!-- Post Meta-->
					<div class="post-meta">
						<ul class="list-inline">
							<li><a href="#"><i class="fa fa-calendar"></i><?= $data_informasi['tgl_informasi']; ?></a> </li>
							<li><a href="#"><i class="fa fa-user"></i>by <?= $data_informasi['penulis']; ?></a></li>
							<li><a href="#"><i class="fa fa-comments"></i>3 Comments</a> </li>
						</ul>
					</div>
					<!-- /Post Meta-->

					<!-- Post Description -->
					<div class="post-description">
						<h3><a class="upper"><?= $data_informasi['judul']; ?></a></h3>
						<blockquote><?= $data_informasi['deskripsi']; ?></blockquote>
					</div>
					<!-- /Post Description -->

				</div>
			</div>
			<!-- /Blog Post -->


		</div> 
		<!-- row -->
	</div>
	<?php endwhile; ?>
</section>
<!-- /blog -->

<?php

require 'footer.php';

?>