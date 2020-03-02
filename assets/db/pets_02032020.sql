-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2020 at 01:29 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

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

--
-- Dumping data for table `asosiasi`
--

INSERT INTO `asosiasi` (`id`, `nama`) VALUES
(1, 'ICA');

-- --------------------------------------------------------

--
-- Table structure for table `ems_pola`
--

CREATE TABLE `ems_pola` (
  `kode` char(2) NOT NULL,
  `pola` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_pola`
--

INSERT INTO `ems_pola` (`kode`, `pola`) VALUES
('01', '-white, van (5/6 of the cat white)'),
('02', '-white, harlequin (1/2 to 2/3 of the cat white)'),
('03', '-white, bicolour (1/3 to 1/2 of the cat white)'),
('04', '-white, mitted'),
('05', '-white, less than mitted'),
('09', 'Unspecified amount of white'),
('11', 'Shaded'),
('12', 'Shell, chinchilla'),
('21', 'Unspecified tabby pattern'),
('22', 'Classic (blotched) tabby'),
('23', 'Mackerel tabby'),
('24', 'Spotted tabby'),
('25', 'Ticked tabby'),
('31', 'Sepia (Burmese) colour restriction'),
('32', 'Mink (Tonkinese) colour restriction'),
('33', 'Pointed (Siamese) colour restriction (Himalayan)'),
('34', 'Recessive white with blue eyes');

-- --------------------------------------------------------

--
-- Table structure for table `ems_ras`
--

CREATE TABLE `ems_ras` (
  `kode` char(3) NOT NULL,
  `ras` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_ras`
--

INSERT INTO `ems_ras` (`kode`, `ras`) VALUES
('ABL', 'American Bobtail Longhair'),
('ABS', 'American Bobtail Shorthair'),
('ABY', 'Abyssinian'),
('ACL', 'American Curl Longhair'),
('ACS', 'American Curl Shorthair'),
('ALH', 'Asian Longhair'),
('AMS', 'American Shorthair'),
('AMW', 'American Wirehair'),
('APH', 'African Pygmy Hedgehogs'),
('ASH', 'Asian Shorthair'),
('AUM', 'Australian Mist'),
('AZA', 'Azawakh'),
('BAL', 'Balinese'),
('BAR', 'Barbet'),
('BDB', 'Braque du Bourbonnais'),
('BEN', 'Bengal'),
('BIF', 'Bichon Frise'),
('BML', 'Burmilla'),
('BOL', 'Bombay Longhair'),
('BOS', 'Bombay Shorthair'),
('BPI', 'Berger Picard'),
('BRF', 'Braque Francais'),
('BRI', 'British Shorthair'),
('BRL', 'British Longhair'),
('BRX', 'Bohemian Rex'),
('BUR', 'Burmese'),
('CAS', 'Castillonnais horses'),
('CEY', 'Ceylon'),
('CHA', 'Chartreux'),
('CHI', 'Chihuahua'),
('COL', 'Collie'),
('CRN', 'Cairn '),
('CRX', 'Cornish Rex'),
('CYM', 'Cymric'),
('DOM', 'Domestic cat, no breed'),
('DRX', 'Devon Rex'),
('DSP', 'Don Sphynx'),
('EUR', 'European Shorthair'),
('EXO', 'Exotic Shorthair'),
('FER', 'Ferret'),
('FRI', 'Friesian horses'),
('GAL', 'Galgo Español'),
('GRI', 'Griffon'),
('GRX', 'German Rex'),
('HCL', 'Domestic cat, longhaired'),
('HCS', 'Domestic cat, shorthaired'),
('HOS', 'Hollandse Smoushound'),
('JBL', 'Japanese Bobtail Longhair'),
('JBT', 'Japanese Bobtail Shorthair'),
('KBL', 'Kurilean Bobtail Longhair'),
('KBS', 'Kurilean Bobtail Shorthair'),
('KMA', 'Khao Manee'),
('KOR', 'Korat'),
('LHE', 'Lionhead rabbits'),
('LPL', 'La Perm Longhair'),
('LPS', 'La Perm Shorthair'),
('LUN', 'Norwegian Lundehund'),
('MAG', 'Magyar Agar'),
('MAN', 'Manx'),
('MAU', 'Egyptian Mau'),
('MCO', 'Maine Coon'),
('MER', 'Mérens horses'),
('MNL', 'Munchkin, longhaired variety'),
('MNS', 'Munchkin, shorthaired variety'),
('NBS', 'Nebelung, shorthaired variety'),
('NEB', 'Nebelung'),
('NEM', 'Neva Masquerade (= colourpoint SIB)'),
('NFO', 'Norwegian Forest Cat'),
('NMA', 'Neapolitan Mastiff'),
('OCI', 'Ocicat'),
('OLH', 'Oriental Longhair'),
('OSH', 'Oriental Shorthair'),
('PBL', 'Pixie-Bob Longhair'),
('PBS', 'Pixie-Bob Shorthair'),
('PEB', 'Peterbald'),
('PER', 'Persian'),
('POS', 'Polish Sighthound'),
('PUL', 'Puli'),
('RAG', 'Ragdoll'),
('RGM', 'Ragamuffin'),
('RUS', 'Russian Blue, but we also use this code for Russian type cats of other colours than blue'),
('SAL', 'Saluki'),
('SAV', 'Savannah'),
('SBI', 'Birman LH (Sacred Birman)'),
('SBS', 'Birman SH (Temple Cat)'),
('SFL', 'Scottish Fold Longhair'),
('SFS', 'Scottish Fold Shorthair'),
('SHU', 'Siberian Husky'),
('SIA', 'Siamese'),
('SIB', 'Siberian'),
('SIN', 'Singapura'),
('SLO', 'Sloughi'),
('SNO', 'Snowshoe'),
('SOK', 'Sokoke'),
('SOM', 'Somali'),
('SPH', 'Sphynx'),
('SRL', 'Selkirk Rex Longhair'),
('SRS', 'Selkirk Rex Shorthair'),
('SRX', 'Selkirk Rex, not known if longhair or shorthair'),
('SYL', 'Seychellois Longhair'),
('SYS', 'Seychellois Shorthair'),
('TAI', 'Kirgiz Sighthound Taigan'),
('TAZ', 'Kazakh Tazh'),
('THA', 'Thai'),
('TIF', 'Tiffany'),
('TIN', 'Tosa Inu'),
('TOG', 'Toyger'),
('TOL', 'Tonkinese Longhair'),
('TOS', 'Tonkinese Shorthair'),
('TRI', 'Thai Ridgeback'),
('TRX', 'Tennessee Rex'),
('TUA', 'Turkish Angora'),
('TUV', 'Turkish Van'),
('UKL', 'Ukrainian Levkoy'),
('URL', 'Ural Rex Longhair'),
('URX', 'Ural Rex Shorthair'),
('WSH', 'White Swiss Shepherd Dog'),
('XLH', 'Longhaired hybrid'),
('XSH', 'Shorthaired hybrid');

-- --------------------------------------------------------

--
-- Table structure for table `ems_warna`
--

CREATE TABLE `ems_warna` (
  `kode` char(1) NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_warna`
--

INSERT INTO `ems_warna` (`kode`, `warna`) VALUES
('a', 'Blue'),
('b', 'Chocolate'),
('c', 'Lilac'),
('d', 'Red'),
('e', 'Cream'),
('f', 'Black tortie'),
('g', 'Blue tortie'),
('h', 'Chocolate tortie'),
('j', 'Lilac tortie'),
('m', 'Dilute modifier together with dilute colours (caramel = am, cm, gm, jm, pm, rm / apricot = em)'),
('n', 'Black (seal in Himalayan-patterned cats, ruddy in Abyssinians and Somalis'),
('o', 'Cinnamon (sorrel in Abyssinians)'),
('p', 'Fawn'),
('q', 'Cinnamon (sorrel) tortie'),
('r', 'Fawn tortie'),
('s', 'Silver, smoke'),
('t', 'Amber, light amber'),
('u', 'Sunshine'),
('w', 'White'),
('x', 'Indicates an unrecognised colour'),
('y', 'Golden'),
('z', 'Russet');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_ras` char(3) NOT NULL,
  `kode_warna` char(2) NOT NULL,
  `kode_pola` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `warna_id` int(11) NOT NULL,
  `no_pedigree_ayah` varchar(20) NOT NULL,
  `no_pedigree_ibu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `role` enum('superadmin','cattery','adminasosiasi','standar') NOT NULL,
  `is_active` int(1) NOT NULL,
  `tgl_buat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `is_active`, `tgl_buat`) VALUES
(1, 'Aripin', 'ilhamarifin.official@gmail.com', '$2y$10$G4QC75HxN9NeLMH2QNpPc.i9pTrNlGxSNG.nKgtiD6THZPLOIS0rW', 'default.jpg', 'superadmin', 1, 1581561542),
(2, 'Aris Kurnia', 'ariskurnia.official@gmail.com', '$2y$10$hg8Jzc4WRzabPQq6cBL3OeoRc85bDRNwJ/AMo6x5Ma1IvSaP/XCbW', 'default.jpg', 'cattery', 1, 1581994231);

-- --------------------------------------------------------

--
-- Table structure for table `ras`
--

CREATE TABLE `ras` (
  `id` int(11) NOT NULL,
  `nama_ras` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ras`
--

INSERT INTO `ras` (`id`, `nama_ras`) VALUES
(1, 'EEs un perrito feo'),
(2, 'Poodle Miniature'),
(3, 'Poodle Standard'),
(4, 'Lhasa Apso'),
(5, 'Bichon Frise'),
(6, 'Shih Tzu'),
(7, 'Maltese'),
(8, 'Silky Terrier'),
(9, 'Yorkie'),
(10, 'Pekingese'),
(11, 'Schnauzer Miniature'),
(12, 'Schnauzer Standard'),
(13, 'Schnauzer Giant'),
(14, 'Scottish Terrier'),
(15, 'West Highland Terrier'),
(16, 'Carin Terrier'),
(17, 'Soft Coated Wheaten Terrier'),
(18, 'Field Cocker Spaniel'),
(19, 'American Cocker Spaniel'),
(20, 'Springer Spaniel'),
(21, 'English Spaniel'),
(22, 'Irish Setter'),
(23, 'Afghan Hounds'),
(24, 'Old English Sheep Dog'),
(25, 'Peeka Poo'),
(26, 'Lhasa Poo'),
(27, 'Terria Poo'),
(28, 'Slick Hair Small'),
(29, 'Thick Coated'),
(30, 'Double Coated'),
(31, 'Slick Hair Medium'),
(32, 'Slick Hair Large'),
(33, 'Collie'),
(34, 'Doberman'),
(35, 'German Shephard'),
(36, 'Collie'),
(37, 'Rottweiler'),
(38, 'Yorkiepoo');

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id` int(11) NOT NULL,
  `kode_warna` varchar(20) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asosiasi`
--
ALTER TABLE `asosiasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ems_pola`
--
ALTER TABLE `ems_pola`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `ems_ras`
--
ALTER TABLE `ems_ras`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `ems_warna`
--
ALTER TABLE `ems_warna`
  ADD PRIMARY KEY (`kode`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `milik`
--
ALTER TABLE `milik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ras`
--
ALTER TABLE `ras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
