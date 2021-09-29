-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Sep 2021 pada 02.51
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelayanann`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `theme` varchar(20) NOT NULL DEFAULT 'sb_admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `status`, `gambar`, `theme`) VALUES
(2, 'admin@admin.com', 'admin', 'admin', 1, 'default.png', 'sb_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(4) NOT NULL,
  `tgl_antrian` date NOT NULL,
  `no_antrian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `tgl_antrian`, `no_antrian`) VALUES
(1, '2019-07-31', '1'),
(2, '2019-07-31', '2'),
(3, '2019-07-31', '3'),
(4, '2019-07-31', '4'),
(5, '2019-07-31', '5'),
(6, '2019-07-31', '6'),
(7, '2019-07-31', '7'),
(8, '2019-07-31', '8'),
(9, '2019-08-01', '1'),
(10, '2019-08-01', '2'),
(11, '2019-08-07', '1'),
(12, '2019-08-07', '2'),
(13, '2019-08-07', '3'),
(14, '2019-08-07', '4'),
(15, '2019-08-07', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_poli`
--

CREATE TABLE `antrian_poli` (
  `id_antrian_poli` int(4) NOT NULL,
  `id_antrian` int(4) NOT NULL,
  `id_pasien` int(4) NOT NULL,
  `id_poli` int(2) NOT NULL,
  `no_antrian_poli` varchar(10) NOT NULL,
  `tgl_antrian_poli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian_poli`
--

INSERT INTO `antrian_poli` (`id_antrian_poli`, `id_antrian`, `id_pasien`, `id_poli`, `no_antrian_poli`, `tgl_antrian_poli`) VALUES
(1, 0, 1, 2, '1', '2019-07-17'),
(2, 0, 1, 2, '2', '2019-07-17'),
(3, 0, 1, 2, '3', '2019-07-17'),
(4, 0, 1, 4, '1', '2019-07-17'),
(5, 0, 1, 3, '1', '2019-07-17'),
(6, 0, 1, 3, '30', '2019-07-17'),
(8, 0, 1, 4, '2', '2019-07-17'),
(9, 0, 1, 2, '1', '2019-07-18'),
(10, 0, 2, 2, '30', '2019-07-18'),
(11, 0, 6, 3, '1', '2019-07-30'),
(12, 0, 1, 1, '1', '2019-07-31'),
(13, 0, 1, 1, '2', '2019-07-31'),
(14, 0, 1, 2, '1', '2019-07-31'),
(15, 0, 1, 3, '1', '2019-07-31'),
(16, 0, 1, 3, '2', '2019-07-31'),
(17, 0, 1, 3, '3', '2019-07-31'),
(18, 0, 14, 1, '3', '2019-07-31'),
(19, 0, 14, 1, '4', '2019-07-31'),
(20, 0, 14, 1, '5', '2019-07-31'),
(21, 0, 14, 2, '2', '2019-07-31'),
(22, 0, 14, 4, '1', '2019-07-31'),
(23, 0, 14, 4, '2', '2019-07-31'),
(24, 0, 14, 2, '1', '2019-08-01'),
(25, 0, 14, 3, '1', '2019-08-01'),
(26, 0, 14, 1, '1', '2019-08-07'),
(27, 0, 14, 2, '1', '2019-08-07'),
(28, 0, 14, 1, '2', '2019-08-07'),
(29, 0, 14, 1, '3', '2019-08-07'),
(30, 0, 14, 4, '1', '2019-08-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_poli`
--

CREATE TABLE `kategori_poli` (
  `id_poli` int(2) NOT NULL,
  `kode_poli` varchar(5) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `jumlah_maksimal` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_poli`
--

INSERT INTO `kategori_poli` (`id_poli`, `kode_poli`, `nama_poli`, `jumlah_maksimal`) VALUES
(1, 'PLUM', 'Poli Umum', '30'),
(2, 'PLGG', 'Poli Gigi', '30'),
(3, 'PLIM', 'Poli Imunisasi', '30'),
(4, 'PLTB', 'Poli Tuberculosis', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(4) NOT NULL,
  `no_identitas` varchar(25) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_identitas`, `nama`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_telp`, `username`, `password`) VALUES
(1, '123456789', 'evi', 'Perempuan', '2019-07-16', '<p>\n	pomad</p>\n', '082199252530', '', ''),
(3, 'wq', 'qwqw', 'Perempuan', '2019-07-17', '<p>\n	sadas</p>\n', 'q', 'q', '7694f4a66316e53c8cdd9d9954bd611d'),
(4, '34567891234567', 'rafly', 'Laki-Laki', '1998-04-03', 'Jl. Merdeka', '08587654323', 'raff', '123'),
(5, '988553322771', 'dwi', 'Laki-Laki', '1999-03-22', 'Jl Bunga', '09584433221', 'dwi22', '12345'),
(6, '3479272653563', 'Aisyah', 'Perempuan', '2001-06-11', 'Jl. Manis', '0838222445', 'ais', '2000'),
(7, '345678564567', 'Simon', 'Laki-Laki', '1997-02-06', 'Jl. Mawar', '081319898213', 'sim', 'dia'),
(8, '998877665544', 'Putri', 'Perempuan', '2000-08-27', 'Jl. Merpati', '081994321522', 'putput', '2000'),
(9, '4523467867845', 'Vio', 'Perempuan', '2003-09-02', 'Jl Kuningan', '08225488006', 'vio', 'a591024321c5e2bdbd23ed35f0574dde'),
(10, '3425261782753', 'Josua', 'Laki-Laki', '1995-11-02', 'Jl. Setia', '081316552245', 'jo', '3f088ebeda03513be71d34d214291986'),
(11, '12536383920282', 'silva', 'Perempuan', '1998-01-04', 'Jl. Anggur', '0943527252461', 'silva98', '202cb962ac59075b964b07152d234b70'),
(12, '1224564324', 'vi', 'Laki-Laki', '1998-03-05', 'Jl.merdeka', '082199252530', 'vi98', '202cb962ac59075b964b07152d234b70'),
(13, '34567891234567', 'rafly', '', '2019-07-12', '', '', 'raff', 'ed474ee8e3b2f7c00e406d57c76c9638'),
(14, '34567891234567', 'meli', 'Perempuan', '1997-08-04', 'jl.merpati', '09584433221', 'meli', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(15) NOT NULL,
  `nama_lengkap` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Admin Dispenduk', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id_antrian` int(50) NOT NULL,
  `nik` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `loket` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id_antrian`, `nik`, `nama`, `nomor_hp`, `jenis_kelamin`, `loket`, `tanggal`) VALUES
(9, 1234567890, 'rania nazarina safitri', '081234456678', 'Laki-laki', 'CETAK_KTPEL', '2021-09-07'),
(10, 987654321, 'IzulHaq', '082343333333', 'Laki-laki', 'REKAM', '2021-09-07'),
(11, 111111, ' budi ajalah', ' 081111111122', 'Perempuan', 'A', '2021-09-14'),
(12, 2147483647, 'Syahrini Maharini', '083398786545', 'Perempuan', 'CETAK_KTPEL', '2021-09-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id` int(200) NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kia`
--

CREATE TABLE `tbl_kia` (
  `id_kia` int(12) NOT NULL,
  `nik` int(200) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `no_kk` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_kepala` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `no_akta` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `kewarganegaraan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_kia`
--

INSERT INTO `tbl_kia` (`id_kia`, `nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `no_kk`, `nama_kepala`, `no_akta`, `agama`, `kewarganegaraan`, `alamat`, `keterangan`) VALUES
(6, 0, 'riko', 'padang', '2018-06-01', 'Laki-laki', '', '90', '90', 'Islam', '2018-06-01', 'padang', ''),
(7, 33023, 'rania nazarina safitri', 'lmj', '2004-04-05', 'Perempuan', '0392389894', 'rasjawj', 'k839938dnjw', 'Islam', 'ind', 'sdk', 'Perpanjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ktpel`
--

CREATE TABLE `tbl_ktpel` (
  `id_ktpel` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `ttl` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status_perkawinan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `kewarganegaraan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `file` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_ktpel`
--

INSERT INTO `tbl_ktpel` (`id_ktpel`, `nama`, `ttl`, `jenis_kelamin`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `keterangan`, `file`) VALUES
(30, '', '', 'pilih', '', 'pilih', 'pilih', '', '', 'pilih', 'Array'),
(31, '', '', 'pilih', '', 'pilih', 'pilih', '', '', 'pilih', ''),
(29, '', '', 'pilih', '', 'pilih', 'pilih', '', '', 'pilih', 'Array'),
(28, '', '', 'pilih', '', 'pilih', 'pilih', '', '', 'pilih', 'Array'),
(27, '', '', 'pilih', '', 'pilih', 'pilih', '', '', 'pilih', 'Array'),
(26, 'Syakir', 'jkt, 050505', 'Laki-laki', 'HAHAHAHA', 'buddha', 'belumkawin', 'HAHAHA', 'AHAHA', 'hilang', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lapor`
--

CREATE TABLE `tbl_lapor` (
  `id_laporan` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_laporan` date NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul_laporan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_laporan` varchar(1000) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_lapor`
--

INSERT INTO `tbl_lapor` (`id_laporan`, `nama`, `tgl_laporan`, `jenis_kelamin`, `alamat`, `pekerjaan`, `judul_laporan`, `isi_laporan`) VALUES
(464, '       nakirr fakir', '5555-05-05', 'Laki-laki', 'lumajang ringinsari', '       suster', '       ktp rusak dan gambar tidak jelas', '  dompet hilang di taman safari'),
(465, '  Maudy Ayudya', '2021-09-12', 'Perempuan', ' kelurahan pasar dempet', '  Dokter gigi', '  akta hilang karena kebakaran', '  tadi jam 09.00 rumah terbakar dan beserta dokumen2 penting ikut terbakar'),
(466, 'rania nazarina safit', '2021-09-14', 'Perempuan', 'lmj', 'pelajar', 'akta kelahiran hilang', 'tas saya hilang beserta dokumen akta saya'),
(467, 'caca marisca', '2021-09-14', 'Perempuan', 'Agen BRILink', 'pramugari', 'ktp hilang', 'ktp saya hilang di selokambang, jadi saya ingin mengajukan pembuatan ktp ulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` int(12) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telpon` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telpon`) VALUES
(5, 'nasri', 'nasri', 'nasri', '2017-11-06', 'Laki-laki', 'lubeg', 'Islam', '0556746'),
(13, 'admin', 'admin', 'admin', '2021-09-22', 'Perempuan', 'jndwjk', 'Hindu', '081234567890'),
(6, 'anwar', '12345', 'Anwar', '2018-05-28', 'Laki-laki', 'Padang', 'Islam', '082170214455'),
(12, 'admin', 'admin', 'admin', '2002-04-05', 'Perempuan', 'admin', 'buddha', '081111111111'),
(8, 'Nanda Arsyinta', 'rania', 'Nanda Arsyinta', '2021-09-15', 'Perempuan', 'Jl, Argopuro 38', 'Islam', '088888888888'),
(9, 'Iwan Adhi', 'iwan', 'Iwan Adhi', '1977-09-25', 'Laki-laki', 'Perumahan GSP Bayeman, lmj', 'Islam', '081234567890'),
(14, 'rania', 'rania', 'Rania Nazarina Safitri', '2004-04-05', 'Perempuan', 'hkhhbf', 'kristen', '081234567890'),
(15, 'hasyim', 'hasyim', 'hasyim', '2021-09-22', 'Perempuan', 'hasyim', 'Hindu', '089765676567'),
(16, 'apaaja', 'apaaja', 'apaaja', '2021-09-22', 'Laki-laki', 'apaaja', 'Hindu', '7678568857'),
(17, 'semuabisa', 'semuabisa', 'semuabisa', '2021-09-22', 'Perempuan', 'semuabisa', 'Hindu', '938498439'),
(18, 'human', 'human', 'human', '2004-04-05', 'Perempuan', 'jepang', 'Hindu', '0992827878'),
(19, 'uye', 'uye', 'uye', '2021-09-23', 'Perempuan', 'uye', 'kristen', '7678568857'),
(20, 'gisel', 'gisel', 'gisel', '0004-04-05', 'Laki-laki', 'gisel', 'Hindu', '088888888888'),
(21, 'antaraja', 'antaraja', 'antaraja', '2004-04-05', 'Perempuan', 'lmj', 'kristen', '082334567898');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjm_menu`
--

CREATE TABLE `tjm_menu` (
  `id` int(11) NOT NULL,
  `parent_menu` int(11) NOT NULL DEFAULT '1',
  `nama_menu` varchar(50) NOT NULL,
  `url_menu` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `urutan` tinyint(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` enum('Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tjm_menu`
--

INSERT INTO `tjm_menu` (`id`, `parent_menu`, `nama_menu`, `url_menu`, `icon`, `urutan`, `status`, `type`) VALUES
(1, 1, 'root', '/', '', 0, 0, 'Admin'),
(2, 1, 'dashboard', 'admin/dashboard', 'fa fa-fw fa-dashboard', 1, 1, 'Admin'),
(3, 1, 'User Admin', 'admin/useradmin', 'fa fa-users', 99, 0, 'Admin'),
(4, 1, 'Menu', 'admin/menu', 'fa fa-gear', 100, 1, 'Admin'),
(25, 1, 'Master', 'admin/master', 'fa fa-ticket', 2, 0, 'Admin'),
(31, 1, 'Data Pasien', 'admin/pasien', 'glyphicon glyphicon-user', 2, 1, 'Admin'),
(32, 1, 'Poli', 'admin/poli', 'glyphicon glyphicon-list-alt', 3, 1, 'Admin'),
(33, 1, 'Antrian Poli', 'admin/antrian_poli', 'glyphicon glyphicon-list', 4, 1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `antrian_poli`
--
ALTER TABLE `antrian_poli`
  ADD PRIMARY KEY (`id_antrian_poli`);

--
-- Indexes for table `kategori_poli`
--
ALTER TABLE `kategori_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kia`
--
ALTER TABLE `tbl_kia`
  ADD PRIMARY KEY (`id_kia`);

--
-- Indexes for table `tbl_ktpel`
--
ALTER TABLE `tbl_ktpel`
  ADD PRIMARY KEY (`id_ktpel`);

--
-- Indexes for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `antrian_poli`
--
ALTER TABLE `antrian_poli`
  MODIFY `id_antrian_poli` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori_poli`
--
ALTER TABLE `kategori_poli`
  MODIFY `id_poli` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id_antrian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kia`
--
ALTER TABLE `tbl_kia`
  MODIFY `id_kia` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_ktpel`
--
ALTER TABLE `tbl_ktpel`
  MODIFY `id_ktpel` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  MODIFY `id_laporan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id_pengunjung` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
