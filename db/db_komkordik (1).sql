-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 21, 2022 at 05:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `kom_akses`
--

CREATE TABLE `kom_akses` (
  `id_akses` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `editBy` varchar(30) NOT NULL
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
-- Table structure for table `kom_jadwal_kegiatan`
--

CREATE TABLE `kom_jadwal_kegiatan` (
  `id_jadwal` int(11) NOT NULL,
  `tahun_akademik` varchar(30) NOT NULL,
  `tgl_mulai_akhir` varchar(30) NOT NULL,
  `jam_operasional` varchar(30) NOT NULL,
  `rumah_sakit` varchar(30) NOT NULL,
  `stase` varchar(30) NOT NULL,
  `kelompok` varchar(30) NOT NULL,
  `id_us` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kom_kegiatan`
--

CREATE TABLE `kom_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `tahun_akademik` varchar(30) NOT NULL,
  `mingguke_tgl` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `rumah_sakit` varchar(30) NOT NULL,
  `kegiatan` varchar(30) NOT NULL,
  `topik` varchar(30) NOT NULL,
  `dosen_pembimbing` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_us` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `kom_role`
--

CREATE TABLE `kom_role` (
  `id_role` int(11) NOT NULL,
  `role` enum('Superadmin','Admin','Dokter','Mahasiswa') DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `editBy` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kom_role`
--

INSERT INTO `kom_role` (`id_role`, `role`, `createdBy`, `editBy`) VALUES
(1, 'Superadmin', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `kom_user`
--

CREATE TABLE `kom_user` (
  `id_us` int(11) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `angkatan` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `editBy` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kom_user`
--

INSERT INTO `kom_user` (`id_us`, `npm`, `username`, `password`, `angkatan`, `kelas`, `alamat`, `email`, `no_hp`, `createdBy`, `editBy`, `photo`, `id_role`, `id_akses`) VALUES
(11, '202203', 'superadmin', 'password567', '2022', 'malam', 'jalan sempurna', 'superadmin@gmail.com', '0822111111', 'superadmin', 'superadmin', '0', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kom_absensi`
--
ALTER TABLE `kom_absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `kom_akses`
--
ALTER TABLE `kom_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `kom_dokter`
--
ALTER TABLE `kom_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `kom_jadwal_kegiatan`
--
ALTER TABLE `kom_jadwal_kegiatan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kom_kegiatan`
--
ALTER TABLE `kom_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kom_nilai`
--
ALTER TABLE `kom_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_us` (`id_us`,`id_dosen`);

--
-- Indexes for table `kom_rekap_nilai`
--
ALTER TABLE `kom_rekap_nilai`
  ADD PRIMARY KEY (`id_rekap_nilai`);

--
-- Indexes for table `kom_role`
--
ALTER TABLE `kom_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `kom_user`
--
ALTER TABLE `kom_user`
  ADD PRIMARY KEY (`id_us`),
  ADD KEY `id_akses` (`id_akses`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kom_absensi`
--
ALTER TABLE `kom_absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kom_akses`
--
ALTER TABLE `kom_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kom_dokter`
--
ALTER TABLE `kom_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kom_jadwal_kegiatan`
--
ALTER TABLE `kom_jadwal_kegiatan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kom_kegiatan`
--
ALTER TABLE `kom_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kom_nilai`
--
ALTER TABLE `kom_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kom_rekap_nilai`
--
ALTER TABLE `kom_rekap_nilai`
  MODIFY `id_rekap_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kom_role`
--
ALTER TABLE `kom_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kom_user`
--
ALTER TABLE `kom_user`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kom_user`
--
ALTER TABLE `kom_user`
  ADD CONSTRAINT `kom_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `kom_role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
