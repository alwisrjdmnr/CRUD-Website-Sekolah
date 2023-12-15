-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220609.11e34a6fec
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2022 pada 14.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'galeri1655458109.jpg', 'Fakultas Keguruan Dan Ilmu Pendidikan Universitas ', '2021-09-01 15:25:22', '2022-06-17 16:28:29'),
(2, 'galeri1655458049.jpg', 'Pelantikan Rektor', '2021-09-01 15:26:47', '2022-06-17 16:27:29'),
(3, 'galeri1655458034.jpg', 'Papan Petunjuk', '2021-09-01 15:33:35', '2022-06-17 16:27:14'),
(4, 'galeri1655458004.jpg', 'Universitas Muria Kudus', '2021-09-01 15:34:03', '2022-06-17 16:26:44'),
(5, 'galeri1655457982.jpg', 'Masjid Universitas Muria Kudus', '2021-09-01 15:34:26', '2022-06-17 16:26:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(2, 'Rekrutmen Tenaga Kependidikan Di UMK 2022', '<p><span style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', sans-serif; box-sizing: border-box; font-size: 14px; background-color: #ffffff;\">Dalam rangka memenuhi kebutuhan Tenaga Kependidikan di lingkungan Universitas Muria Kudus (UMK) Tahun 2022, UMK membuka kesempatan bagi Warga Negara Indonesia yang memiliki integritas dan komitmen tinggi untuk menjadi calon Tenaga Kependidikan.</span></p>', 'informasi1655457949.jpg', '2021-09-01 15:42:39', '2022-06-17 16:25:49', 2),
(3, 'VAKSINASI COVID-19 Di Universitas Muria Kudus (Dosen,Karyawan, Dan ,Mahasiswa) Dosis 1, 2, Dan Booster)', '<p style=\"margin: 0px 0px 10px; padding: 0px; font-family: \'Open Sans\', sans-serif; box-sizing: border-box; font-size: 14px; background-color: #ffffff;\">Vaksinasi Dosis 1 , Dosis 2 dan Dosis 3 Lanjutan (Booster) untuk seluruh Dosen, Karyawan, dan , Mahasiswa Universitas Muria Kudus</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; font-family: \'Open Sans\', sans-serif; box-sizing: border-box; font-size: 14px; background-color: #ffffff;\">📆 Kamis , 24 Februari 2022</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; font-family: \'Open Sans\', sans-serif; box-sizing: border-box; font-size: 14px; background-color: #ffffff;\">Pukul 08.00-13.00 WIB</p>\r\n<p style=\"margin: 0px 0px 10px; padding: 0px; font-family: \'Open Sans\', sans-serif; box-sizing: border-box; font-size: 14px; background-color: #ffffff;\">📍 Gedung Auditorium Universitas Muria Kudus</p>', 'informasi1655457939.jpeg', '2021-09-01 15:45:07', '2022-06-17 16:25:39', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Mesin', 'Misi : Menyelenggarakan pendidikan di bidang rekayasa teknik mesin yang berkualitas dengan menerapkan nilai nilai kearifan lokal guna menjamin kualitas lulusan yang unggul dan berdaya saing global. Menyelenggarakan penelitian dibidang rekayasa teknik mesin yang kreatif, inovatif, unggul dan berdaya saing global. Menyelenggarakan pengabdian kepada masyarakat yang mengimplementasikan hasil penelitian dan nilai nilai kearifan lokal. Menyelenggarakan tata kelola program studi yang berorientasi pada nilai nilai Good University Governance.', 'jurusan1655457918.JPG', '2021-09-01 15:17:41', '2022-06-17 16:25:18'),
(2, 'Teknik Informatika', 'VISI : Kampus Hijau Universitas Muria Kudus Pengembang Kehidupan Harmoni dan MISI : Harmoni Pendidikan, Harmoni Penelitian, Harmoni Pengabdian', 'jurusan1655457908.jpg', '2021-09-01 15:18:12', '2022-06-17 16:25:08'),
(3, 'Teknik Elektro', 'Visi : Menjadi program studi teknik elektro yang unggul dan inovatif berbasis kearifan lokal, berdaya saing global. dan Misi : Menyelenggarakan dan meningkatkan kualitas pendidikan melalui peningkatan sumber daya dan mengoptimalkan pemanfatannya, Melaksanakan penelitian dan menerapkan ilmu Teknik Elektro untuk memenuhi kebutuhan masyarakat serta mendukung pembangunan Nasional, Melaksanakan pengabdian kepada masyarakat dengan mengimplementasikan hasil-hasil penelitian dan karya inovatif dibidang Teknik Elektro, Menjalin kerjasama yang produktif dan berkelanjutan dengan pihak luar dalam pengembangan pendidikan, penelitian, dan pelayanan kepada masyarakat.', 'jurusan1655457896.jpg', '2021-09-01 15:18:35', '2022-06-17 16:24:56'),
(4, 'Sistem Informasi', 'Pada millenium ketiga ini sebuah Program Studi dituntut untuk memberikan informasi yang transparan dan akuntabel pada lembaga yang dikelolanya. Untuk itu Program Studi Sistem Informasi yang berada pada Fakultas Teknik Universitas Muria Kudus mencoba memberikan berita yang informatif terkait dengan kegiatan yang dilakukan melalui situs resmi Program Studi Sistem Informasi dengan alamat si.umk.ac.id ini. Besar harapan kami dengan website resmi ini menjadi sarana untuk pemahaman kepada masyarakat luas maupun mahasiswa sesuai dengan kepentingannya masing-masing.', 'jurusan1655457888.JPG', '2021-09-01 15:18:56', '2022-06-17 16:24:48'),
(5, 'Teknik Industri', 'Seiring pertumbuhan industri dan permintaan masyarakat untuk semakin meningkatkan gairah pertumbuhan ekonomi kreatif yang disertai keilmuan rekayasa, permintaan untuk meningkatkan kemampuan sumber daya manusia di bidang tersebut semakin bertambah. Keilmuan Teknik Industri merupakan salah satu cabang ilmu yang dapat menunjang permintaan masyarakat untuk peningkatan dalam bidang ekonomi industri. Sehingga, Universitas Muria Kudus berusaha merealisasikan permintaan masyarakat untuk memenuhi kebutuhan sumber daya manusia yang sesuai.', 'jurusan1655457874.JPG', '2021-09-01 15:19:09', '2022-06-17 16:24:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koperasi`
--

CREATE TABLE `koperasi` (
  `id` int(50) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `stok` varchar(225) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `koperasi`
--

INSERT INTO `koperasi` (`id`, `nama`, `harga`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'Pensil', 'Rp. 1500', '3 Pack', 'koperasi1655456195.jpg', '2022-06-17 09:25:21', '2022-06-17 15:56:35'),
(6, 'Buku', 'Rp. 2500', '10 Pack', 'koperasi1655459759.jpg', '2022-06-17 09:32:49', '2022-06-17 16:55:59'),
(7, 'Bolpoint', 'Rp. 3500', '1 Pack', 'koperasi1655456239.jpg', '2022-06-17 08:57:19', NULL),
(8, 'Tipe X', 'Rp. 4000', '10 Pcs', 'koperasi1655456279.jpg', '2022-06-17 08:57:59', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmb`
--

CREATE TABLE `pmb` (
  `id` int(50) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `kelamin` varchar(225) NOT NULL,
  `agama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pmb`
--

INSERT INTO `pmb` (`id`, `nama`, `tempat`, `tanggal`, `kelamin`, `agama`, `alamat`, `created_at`, `updated_at`) VALUES
(13, 'Sirojuddin Munir Alwi', 'Kudus', '2003-09-13', 'Laki-laki', 'Islam', '<p>Gang SD 1 Barongan RT/RW 02/03</p>', '2022-06-19 12:51:39', NULL),
(14, 'Nor Milatul Khusna', 'Kudus', '2003-02-12', 'Perempuan', 'Islam', '<p>kudus</p>', '2022-06-19 12:52:37', NULL),
(15, 'Sofiyan Kusdariyanto', 'Kudus', '2003-07-10', 'Laki-laki', 'Islam', '<p>kudus</p>', '2022-06-19 12:53:21', NULL),
(16, 'Ahmad Wildan Musthofa', 'Kudus', '2003-03-05', 'Laki-laki', 'Islam', '<p>kudus</p>', '2022-06-19 12:53:57', NULL),
(17, 'Muhammad Ulil Ilmi Maulana', 'Kudus', '2003-07-08', 'Laki-laki', 'Islam', '<p>kudus</p>', '2022-06-19 12:54:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `katasandi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nickname`, `katasandi`) VALUES
(1, 'Kelompok 4', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmb`
--
ALTER TABLE `pmb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pmb`
--
ALTER TABLE `pmb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



