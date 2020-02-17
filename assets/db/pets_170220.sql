-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2020 at 10:09 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `asosiasi`
--

CREATE TABLE `asosiasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ems`
--

CREATE TABLE `ems` (
  `id` int(10) NOT NULL,
  `kode_ems` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems`
--

INSERT INTO `ems` (`id`, `kode_ems`) VALUES
(2, 'ems 01'),
(3, 'ems 05'),
(4, 'ems 06'),
(6, 'ems 07'),
(7, 'ems 08'),
(8, 'ems 11'),
(9, 'ems 12'),
(10, 'ems 03'),
(11, 'ems 15'),
(14, 'ems 171'),
(15, 'ems 112'),
(16, 'ems 823'),
(17, 'ems 320'),
(18, 'ems 236');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ras_id` int(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `warna_id` int(10) DEFAULT NULL,
  `no_pedigree_ibu` varchar(20) NOT NULL,
  `no_pedigree_ayah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id`, `nama`, `ras_id`, `tgl_lahir`, `jenis_kelamin`, `warna_id`, `no_pedigree_ibu`, `no_pedigree_ayah`) VALUES
(1, 'Blacky', NULL, '2019-12-03', 'L', NULL, '', ''),
(2, 'Miauuuw', 8, '2020-02-20', 'L', 1, '23', '30');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`) VALUES
(1, 'kucing', 'kucing'),
(2, 'burung1', 'burung1'),
(3, 'burungu', 'burung-burung'),
(4, 'tes tes NANA', 'tes-tes-nana');

-- --------------------------------------------------------

--
-- Table structure for table `milik`
--

CREATE TABLE `milik` (
  `id` int(10) NOT NULL,
  `pengguna_id` int(10) DEFAULT NULL,
  `hewan_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(225) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `gambar`, `role_id`, `is_active`, `tgl_buat`) VALUES
(1, 'Aripin', 'ilhamarifin.official@gmail.com', '$2y$10$G4QC75HxN9NeLMH2QNpPc.i9pTrNlGxSNG.nKgtiD6THZPLOIS0rW', 'default.jpg', 1, 1, 1581561542);

-- --------------------------------------------------------

--
-- Table structure for table `ras`
--

CREATE TABLE `ras` (
  `id` int(10) NOT NULL,
  `nama_ras` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ras`
--

INSERT INTO `ras` (`id`, `nama_ras`) VALUES
(3, 'Anggora'),
(11, 'Jawa'),
(16, 'Macan Hutan'),
(17, 'Macan'),
(18, 'Garong'),
(19, 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `role_pengguna`
--

CREATE TABLE `role_pengguna` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_pengguna`
--

INSERT INTO `role_pengguna` (`id`, `role`) VALUES
(1, 'superadmin'),
(2, 'cattery'),
(3, 'adminasosiasi'),
(4, 'standar');

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id` int(10) NOT NULL,
  `kode_warna` varchar(15) DEFAULT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id`, `kode_warna`, `nama`) VALUES
(1, '02bb', 'Hitam'),
(2, '03cc', 'Coklat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asosiasi`
--
ALTER TABLE `asosiasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ems`
--
ALTER TABLE `ems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milik`
--
ALTER TABLE `milik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ras`
--
ALTER TABLE `ras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_pengguna`
--
ALTER TABLE `role_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asosiasi`
--
ALTER TABLE `asosiasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ems`
--
ALTER TABLE `ems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `milik`
--
ALTER TABLE `milik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ras`
--
ALTER TABLE `ras`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `role_pengguna`
--
ALTER TABLE `role_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
