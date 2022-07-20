-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 11:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komkordik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kom_absensi`
--

CREATE TABLE `kom_absensi` (
  `id_absen` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kom_dokter`
--

CREATE TABLE `kom_dokter` (
  `id_dokter` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kom_dokter`
--

INSERT INTO `kom_dokter` (`id_dokter`, `username`, `email`, `alamat`, `no_hp`) VALUES
(2, 'dr anita damayanti', 'nita@gmail.com', 'jalan sempurna', '0888855'),
(3, 'dr abrar batubara', 'bara@gmail.com', 'jalan sito mahaji', '0822111');

-- --------------------------------------------------------

--
-- Table structure for table `kom_kegiatancoas`
--

CREATE TABLE `kom_kegiatancoas` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) DEFAULT NULL,
  `npm` varchar(100) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dosen_pembimbing` varchar(100) DEFAULT NULL,
  `kegiatan` varchar(500) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kom_kegiatancoas`
--

INSERT INTO `kom_kegiatancoas` (`id_kegiatan`, `nama_mahasiswa`, `npm`, `tanggal`, `dosen_pembimbing`, `kegiatan`, `judul`, `keterangan`) VALUES
(6, '', NULL, '0000-00-00 00:00:00', '', 'tes', 're', 're'),
(7, '', NULL, '2022-07-19 09:02:04', '', 'tes', 'penerapan', 'testing'),
(8, '', NULL, '2022-07-19 09:04:39', 'dr asti', 'MELAKUKAN BIMBINGAN KEPADA dr Wirandi', 'DM', '-'),
(9, '', NULL, '2022-07-19 09:05:54', 'dr asti', 'tessssssssss', 'penerapan', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kom_level`
--

CREATE TABLE `kom_level` (
  `id_level` int(11) NOT NULL,
  `level` enum('DOSEN','ADMIN','MAHASISWA',' PERAWAT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kom_level`
--

INSERT INTO `kom_level` (`id_level`, `level`) VALUES
(2, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `kom_nilai`
--

CREATE TABLE `kom_nilai` (
  `id_nilai` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `dosen_pembimbing` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_us` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kom_pengguna`
--

CREATE TABLE `kom_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` int(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `id_us` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kom_rekap_nilai`
--

CREATE TABLE `kom_rekap_nilai` (
  `id_rekap_nilai` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pretes` varchar(30) NOT NULL,
  `ipc_ipe` varchar(30) NOT NULL,
  `lap_kasus` varchar(30) NOT NULL,
  `jur_reading` varchar(30) NOT NULL,
  `mid_tes` varchar(30) NOT NULL,
  `penyuluhan` varchar(30) NOT NULL,
  `postes` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL,
  `id_us` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kom_user`
--

CREATE TABLE `kom_user` (
  `id_us` int(11) NOT NULL,
  `id_level` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `editBy` varchar(30) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kom_user`
--

INSERT INTO `kom_user` (`id_us`, `id_level`, `username`, `password`, `alamat`, `email`, `no_hp`, `createdBy`, `editBy`, `tgl_daftar`) VALUES
(3, 2, 'ADMIN', '123', 'JALAN', '123@gmail.com', '083333', 'superadmin', 'superadmin', '2022-07-16 01:44:17'),
(11, 0, 'superadmin', 'password567', 'jalan sempurna', 'superadmin@gmail.com', '0822111111', 'superadmin', 'superadmin', '2022-07-16 01:44:17'),
(12, NULL, '', 'password567', '', 'superadmin@gmail.com', '', '', '', '2022-07-19 05:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tes`
--

CREATE TABLE `tb_tes` (
  `id_us` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kom_absensi`
--
ALTER TABLE `kom_absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `kom_dokter`
--
ALTER TABLE `kom_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `kom_kegiatancoas`
--
ALTER TABLE `kom_kegiatancoas`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kom_level`
--
ALTER TABLE `kom_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `kom_nilai`
--
ALTER TABLE `kom_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_us` (`id_us`,`id_dosen`);

--
-- Indexes for table `kom_pengguna`
--
ALTER TABLE `kom_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_us` (`id_us`);

--
-- Indexes for table `kom_rekap_nilai`
--
ALTER TABLE `kom_rekap_nilai`
  ADD PRIMARY KEY (`id_rekap_nilai`);

--
-- Indexes for table `kom_user`
--
ALTER TABLE `kom_user`
  ADD PRIMARY KEY (`id_us`),
  ADD UNIQUE KEY `id_level_2` (`id_level`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `tb_tes`
--
ALTER TABLE `tb_tes`
  ADD PRIMARY KEY (`id_us`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kom_absensi`
--
ALTER TABLE `kom_absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kom_dokter`
--
ALTER TABLE `kom_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kom_kegiatancoas`
--
ALTER TABLE `kom_kegiatancoas`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kom_level`
--
ALTER TABLE `kom_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kom_nilai`
--
ALTER TABLE `kom_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kom_pengguna`
--
ALTER TABLE `kom_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kom_rekap_nilai`
--
ALTER TABLE `kom_rekap_nilai`
  MODIFY `id_rekap_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kom_user`
--
ALTER TABLE `kom_user`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_tes`
--
ALTER TABLE `tb_tes`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kom_level`
--
ALTER TABLE `kom_level`
  ADD CONSTRAINT `kom_level_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `kom_user` (`id_level`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
