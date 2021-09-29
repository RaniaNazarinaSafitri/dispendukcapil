-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 11:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pelayanann`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(15) NOT NULL,
  `nama_lengkap` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Dispenduk Capil Lumajang Web', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lapor`
--

CREATE TABLE IF NOT EXISTS `tbl_lapor` (
`id_laporan` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul_laporan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `isi_laporan` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=462 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_lapor`
--

INSERT INTO `tbl_lapor` (`id_laporan`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `agama`, `alamat`, `pekerjaan`, `judul_laporan`, `isi_laporan`) VALUES
(1, 'dewi', '2012-05-16', '', 'perempuan', 'islam', 'belakang kampus upi', 'mahasiswa', 'surat tilang', 'tilang motor'),
(2, 'gaga', '2017-06-07', '', 'Laki-laki', 'Islam', 'lubeg', 'mahasiswa', 'kehilangan', 'hilang dompet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE IF NOT EXISTS `tbl_pengunjung` (
`id_pengunjung` int(12) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telpon` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telpon`) VALUES
(5, 'nasri', 'nasri', 'nasri', '2017-11-06', 'Laki-laki', 'lubeg', 'Islam', '0556746'),
(1, 'sopi', 'sopi', 'sopi sapriadi', '2017-08-07', 'Laki-laki', 'padang', 'Islam', '0987654321'),
(6, 'anwar', '12345', 'Anwar', '2018-05-28', 'Laki-laki', 'Padang', 'Islam', '082170214455');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perijinan`
--

CREATE TABLE IF NOT EXISTS `tbl_perijinan` (
`id_perijinan` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tujuan_kegiatan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `waktu_kegiatan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tempat_kegiatan` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_perijinan`
--

INSERT INTO `tbl_perijinan` (`id_perijinan`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telp`, `tujuan_kegiatan`, `waktu_kegiatan`, `tempat_kegiatan`) VALUES
(1, '    ari bro', '2010-05-06', '', 'Laki-laki', '    bungus', 'Islam', '    06278187921', '    pesta rakyat besar', '    17 agustus', '    lapangan bola kaki desa 2'),
(4, 'dinda', '2005-03-02', '', 'Perempuan', 'Belakang kampus upi', 'Islam', '08465483242', 'syukuran', '18 juli', 'rumah sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sabhara`
--

CREATE TABLE IF NOT EXISTS `tbl_sabhara` (
`id_sabhara` int(12) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tujuan_pengawalan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `route` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_sabhara`
--

INSERT INTO `tbl_sabhara` (`id_sabhara`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telp`, `tujuan_pengawalan`, `route`) VALUES
(1, ' diky', '2014-02-27', '', 'Perempuan', ' payakumbuh', 'Islam', ' 074238974', ' medan', ' payakumbuh - medan'),
(2, 'diky', '2014-02-27', '', 'Laki-laki', 'payakumbuh', 'Islam', '074238974', 'medan', 'payakumbuh - medan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kia`
--

CREATE TABLE IF NOT EXISTS `tbl_kia` (
`id_kia` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tinggi` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `masa` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_kia` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_kia`
--

INSERT INTO `tbl_kia` (`id_kia`, `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `alamat`, `agama`, `tinggi`, `pekerjaan`, `keterangan`, `masa`, `no_kia`) VALUES
(6, 'riko', '2018-06-01', 'padang', 'Laki-laki', 'padang', 'Islam', '90', '90', '', '2018-06-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skkepala`
--

CREATE TABLE IF NOT EXISTS `tbl_skkepala` (
`id_skkepala` int(12) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `kebangsaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `no_ktp` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `keperluan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `riwayat_sekolah` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `masa` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=227 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_skkepala`
--

INSERT INTO `tbl_skkepala` (`id_skkepala`, `nama`, `jenis_kelamin`, `kebangsaan`, `agama`, `tgl_lahir`, `tmp_lahir`, `alamat`, `pekerjaan`, `no_ktp`, `keperluan`, `riwayat_sekolah`, `keterangan`, `masa`) VALUES
(1, ' koko', 'Laki-laki', ' Indonesia', 'Islam', '2018-06-15', ' padang', ' jkj', ' jk', ' jkj', ' jk', ' jk', ' ', '2018-06-30'),
(226, 'jeje', 'Laki-laki', 'Indonesia', 'kristen', '2018-06-29', 'PAdang', 'Padang', 'Buruh', '8080880', '080', 'oppp', '', '2018-06-30'),
(225, 'riko', 'Laki-laki', ' Indonesia', 'Islam', '2018-06-15', ' padang', ' jkj', ' jk', ' jkj', ' jk', ' jk', ' Baru', '2018-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stnk`
--

CREATE TABLE IF NOT EXISTS `tbl_stnk` (
`id_stnk` int(12) NOT NULL,
  `no_registrasi` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `merk` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `type` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `model` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tahun` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `isi_silinder` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `warna` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `masa` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_stnk`
--

INSERT INTO `tbl_stnk` (`id_stnk`, `no_registrasi`, `nama`, `alamat`, `merk`, `type`, `jenis`, `model`, `tahun`, `isi_silinder`, `warna`, `keterangan`, `masa`) VALUES
(4, ' 01121', ' RIko', ' padang', ' 9', ' 09', ' 09', ' 90', ' 90', ' 90', ' 90', ' Baru', '2018-06-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

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
-- Indexes for table `tbl_perijinan`
--
ALTER TABLE `tbl_perijinan`
 ADD PRIMARY KEY (`id_perijinan`);

--
-- Indexes for table `tbl_sabhara`
--
ALTER TABLE `tbl_sabhara`
 ADD PRIMARY KEY (`id_sabhara`);

--
-- Indexes for table `tbl_kia`
--
ALTER TABLE `tbl_kia`
 ADD PRIMARY KEY (`id_kia`);

--
-- Indexes for table `tbl_skkepala`
--
ALTER TABLE `tbl_skkepala`
 ADD PRIMARY KEY (`id_skkepala`);

--
-- Indexes for table `tbl_stnk`
--
ALTER TABLE `tbl_stnk`
 ADD PRIMARY KEY (`id_stnk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
MODIFY `id_laporan` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=462;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
MODIFY `id_pengunjung` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_perijinan`
--
ALTER TABLE `tbl_perijinan`
MODIFY `id_perijinan` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_sabhara`
--
ALTER TABLE `tbl_sabhara`
MODIFY `id_sabhara` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_kia`
--
ALTER TABLE `tbl_kia`
MODIFY `id_kia` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_skkepala`
--
ALTER TABLE `tbl_skkepala`
MODIFY `id_skkepala` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT for table `tbl_stnk`
--
ALTER TABLE `tbl_stnk`
MODIFY `id_stnk` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
