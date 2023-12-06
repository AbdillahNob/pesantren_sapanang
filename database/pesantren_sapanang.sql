-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 10.34
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren_sapanang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_informasi` date NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul`, `deskripsi`, `tgl_informasi`, `penulis`, `gambar`) VALUES
(2, 'Pembangunan Mesjid', 'Pondok Pesantren Nurul Hidayah Sapanang telah mendirikan sebuah mesjid dengan ukuran yg cukup besar, akan tetapi mesjid ini masih tahap proses pembangunan dan insya allah di selesaikan dengan waktu yang tepat sehingga mesjid ini bisa secepatnya di fungsikan serta para santri,guru,ustad maupun warga di sekitar pondok pesantren juga bisa beribadah di mesjid ini. terlepas dari itu meskipun mesjid ini sudah bisa di fungsikan pihak pondok juga masih berusaha untuk meningkatkan segala aspek dan fasilitas di mesjid ini untuk ke-depannya  dengan demikian adapun masyarakat dari di desa sapanang maupun dari luar desa sapanang bisa memberikan kontribusi/sumbangan di segi finansial maupun tenaga dalam membantu pihak pondok membangun dan meningkatkan fasilitas mesjid ini.', '2023-11-27', 'Abdillah P Al-Iman', '6569e006a0281.jpg'),
(3, 'Mesjid sementara atau gazebo', 'Gazebo ini di gunakan sebagai mesjid sementara pondok pesantren nurul hidayah sapanang dikarenakan tahap pengerjaan mesjid di pondok ini belum selesai sepenuhnya sehingga untuk mengantisipasi hal tersebut para santri dan ustad/guru dan jamaah yang ingin sholat berjamaah terpaksa menggunakan gazebo ini, meskipun demikian gazebo ini sangat bersih dan suci sehingga layak untuk digunakan ibadah sholat dll, oleh karena itu para santri dan ustad/guru sangat nyaman menggunakan gazebo ini sebagai lingkup belajar dan mengaji mereka.', '2023-11-28', 'Abdillah P Al-Iman', '6569e6869750e.jpg'),
(4, 'Proses belajar-mengajar di kelas', 'Pondok Pesantren Nurul Hidayah Sapanang juga memiliki pendidikan tingkat SD yang mana proses belajar-mengajarnya lumayan intensif keaktifannya dengan tujuan memberikan pendidikan dan ilmu secara maksimal terhadap siswa-siswanya dan hal ini sudah menjadi kultural di pondok ini sehingga bisa mencetak generasi-generasi milenial yang cenderung intlektual dan memiliki fondasi ilmu agama serta ahlak yang kuat dengan hal tersebut bisa menjadi tumpuan generasi milenial untuk ke-depannya, dengan demikian mendorong motivasi-motivasi masyarakat untuk memprioritaskan anak-anaknya bersekolah di pondok pesantren. ', '2023-11-27', 'Abdillah P Al-Iman', '6569e9caf3c16.jpg'),
(5, 'Kolam Budidaya Ikan Lele Pondok ', 'Terdapat fasilitas kolam budidaya ikan lele di Pondok Pesantren Nurul Hidayah Sapanang yang nantinya pada saat panen ikan ini akan di berikan ke para penghuni pondok serta beberapa masyarakat. Budidaya ikan lele akan terus di lakukan dan juga ada kemungkinan fasilitasnya juga di kembangkan agar mendapatkan hasil yang lebih maksimal dan banyak.  ', '2023-12-01', 'Abdillah P Al-Iman', '6569ec102428f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` text NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `status`, `tgl_masuk`, `tempat_lahir`, `tgl_lahir`, `kelas`) VALUES
(1, '1234567890', 'Abdillah P Al-Iman', 'pria', 'aktif', '2023-11-17', 'Tual, Maluku tenggara', '2002-11-20', 'Tahfidz'),
(5, '1234567891', 'Andi Aini', 'wanita', 'aktif', '2023-11-02', 'Wotu, Kab.Luwu Timur', '2010-06-07', 'Tahfidz'),
(6, '1234567842', 'Muh.Ali Husain', 'pria', 'tamat', '2023-11-17', 'Sapanang, kec.Binamu, Kab.Jeneponto', '2000-06-13', 'Tahfidz'),
(7, '1234597532', 'Muh.Markus ', 'pria', 'dikeluarkan', '2023-11-02', 'Balang, kec.Binamu, Kab.Jeneponto', '2008-06-10', 'Tahfidz'),
(8, '8434594932', 'Hijrah nur ainun', 'wanita', 'dipindahkan', '2023-02-07', 'Balang, kec.Binamu, Kab.Jeneponto', '2010-02-09', 'Hadist');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `nik` text NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `no_telepon`, `jabatan`, `gambar`) VALUES
(1, '7322023128648511', 'Lukman, SE.', 'pria', 'Sapanang', '1979-10-16', '081234567878', 'kepala yayasan', '6569ef26e022c.jpg'),
(3, '7322023128648518', 'Muh.iqra Ramadhan', 'pria', 'Barru', '2003-11-04', '0812345678780', 'guru', '655a2aa8cd77a.jpg'),
(4, '7322023127186491', 'Amar Ma\'ruf', 'pria', 'Bone', '2001-07-11', '0812345678780', 'staf', '655a41919104d.jpg'),
(6, '7322023195179034', 'Abu Lahab', 'pria', 'Israel', '1995-05-09', '0812345678780', 'sekretaris', '656490c529b22.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `status`, `password`, `gambar`) VALUES
(2, 'Abdillah P Al-Iman', 'kepala sekolah', 'admin', '$2y$10$M5HIJasXsDVfSyQY3nxtve0L9iY1Xw.tQYLibbh7g.AZB64a3A9n2', '6554c56ab7370.jpg'),
(8, 'Andi Aini', 'guru', 'user', '$2y$10$acXD5TDmnhGkB7bA.nnXmuT/orzdVmqF4UIocungr8tAioXG9rFee', '65562c6717708.jpg'),
(9, 'Karaeng CA\'DI !', 'sekretaris', 'user', '$2y$10$qwF/zz3Cl0n0KmPEcJUy3.Uoc0aPABL.nVBjCcqauSZ05ac8lCU4C', '6564918d90bb7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
