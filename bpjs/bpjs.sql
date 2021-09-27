-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 06:24 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`, `jabatan`) VALUES
('DokKlin1', 'DokKlin01', 'DokKlin01@gmail.com', 'Dokter'),
('DokKlin2', 'DokKlin02', 'DokKlin02@gmail.com', 'Dokter'),
('DokKlin3', 'DokKlin03', 'DokKlin03@gmail.com', 'Dokter'),
('DokKlin4', 'DokKlin04', 'DokKlin04@gmail.com', 'Dokter'),
('Pasien1', 'Pasien01', 'Pasien01@gmail.com', 'Pasien'),
('Pasien2', 'Pasien02', 'Pasien02@gmail.com', 'Pasien'),
('Pasien3', 'Pasien03', 'Pasien03@gmail.com', 'Pasien'),
('Pasien4', 'Pasien04', 'Pasien04@gmail.com', 'Pasien'),
('PetKli1', 'PetKli01', 'PetKli01@gmail.com', 'Petugas Klinik'),
('PetKli2', 'PetKli02', 'PetKli02@gmail.com', 'Petugas Klinik'),
('PetKli3', 'PetKli03', 'PetKli03@gmail.com', 'Petugas Klinik'),
('PetKli4', 'PetKli04', 'PetKli04@gmail.com', 'Petugas Klinik'),
('PetRS1', 'PetRS01', 'PetRS01@gmail.com', 'Petugas RS'),
('PetRS2', 'PetRS02', 'PetRS02@gmail.com', 'Petugas RS'),
('PetRS3', 'PetRS03', 'PetRS03@gmail.com', 'Petugas RS'),
('PetRS4', 'PetRS03', 'PetRS04@gmail.com', 'Petugas RS');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `no_antrian` varchar(15) DEFAULT NULL,
  `tgl_antri` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`no_antrian`, `tgl_antri`) VALUES
('EM-001', '2019-02-08'),
('EM-002', '2019-02-08'),
('EM-003', '2019-02-11'),
('EM-004', '2019-02-11'),
('EM-005', '2019-02-11'),
('EM-006', '2019-02-11'),
('EM-007', '2019-02-12'),
('EM-008', '2019-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `dokter_klinik`
--

CREATE TABLE `dokter_klinik` (
  `ID_DokKlinik` char(3) NOT NULL,
  `UserID` varchar(15) DEFAULT NULL,
  `Nama_DokKlinik` varchar(30) DEFAULT NULL,
  `Umur` int(2) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter_klinik`
--

INSERT INTO `dokter_klinik` (`ID_DokKlinik`, `UserID`, `Nama_DokKlinik`, `Umur`, `Alamat`, `Gender`) VALUES
('DK1', 'DokKlin1', 'Budi Santoso', 28, 'Jl. Bojongsoang 1', 'L'),
('DK2', 'DokKlin2', 'Ega Rysan', 33, 'Jl. Mangga Dua', 'L'),
('DK3', 'DokKlin3', 'Ichal Hans', 45, 'Jl. Merpati Putih', 'L'),
('DK4', 'DokKlin4', 'Finna Windyani', 27, 'Jl. Bojongsoang 2', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `No_KartuBPJS` char(13) NOT NULL,
  `UserID` varchar(15) DEFAULT NULL,
  `No_NIK` char(16) DEFAULT NULL,
  `Nama_Pasien` varchar(30) DEFAULT NULL,
  `Umur` int(2) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`No_KartuBPJS`, `UserID`, `No_NIK`, `Nama_Pasien`, `Umur`, `Alamat`, `Gender`) VALUES
('1124453982129', 'Pasien1', '2311875512980004', 'Lia Nasution', 20, 'Jl. Mawar Merah', 'P'),
('1225674553895', 'Pasien2', '2311872205960003', 'Bambang Setiawan', 22, 'Jl. Mawar Putih', 'L'),
('2104522232929', 'Pasien4', '2311876907900002', 'Rahmawati Dinda', 29, 'Jl. Anggrek Ungu', 'P'),
('2123457754776', 'Pasien3', '2311871210910001', 'Adi Barat', 27, 'Jl. Melati 2', 'L'),
('9987', 'Pasien9', '7789', 'milea', 20, 'bojongsoang', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_klinik`
--

CREATE TABLE `petugas_klinik` (
  `ID_PetKlinik` char(3) NOT NULL,
  `UserID` varchar(15) DEFAULT NULL,
  `Nama_PetKlinik` varchar(30) DEFAULT NULL,
  `Umur` int(2) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_klinik`
--

INSERT INTO `petugas_klinik` (`ID_PetKlinik`, `UserID`, `Nama_PetKlinik`, `Umur`, `Alamat`, `Gender`) VALUES
('PK1', 'PetKli1', 'Aqilla Suci', 25, 'Jl. Merdeka', 'P'),
('PK2', 'PetKli2', 'Embun Elina', 26, 'Jl. Patriot', 'P'),
('PK3', 'PetKli3', 'Desi Asmarani', 35, 'Jl. Pahlawan', 'P'),
('PK4', 'PetKli4', 'Gita Hastanti', 33, 'Jl. Pejuang', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_rs`
--

CREATE TABLE `petugas_rs` (
  `ID_PetRS` char(3) NOT NULL,
  `UserID` varchar(15) DEFAULT NULL,
  `Nama_PetRS` varchar(30) DEFAULT NULL,
  `Umur` int(2) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_rs`
--

INSERT INTO `petugas_rs` (`ID_PetRS`, `UserID`, `Nama_PetRS`, `Umur`, `Alamat`, `Gender`) VALUES
('PR1', 'PetRS1', 'Suciwati Putri', 25, 'Jl. Soedirman', 'P'),
('PR2', 'PetRS2', 'Mega Sukma', 33, 'Jl. Soekarno', 'P'),
('PR3', 'PetRS3', 'Eko Supto', 31, 'Jl. Hatta', 'L'),
('PR4', 'PetRS4', 'Pras Muda', 25, 'Jl. Agus Salim', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `surat_rujukan`
--

CREATE TABLE `surat_rujukan` (
  `ID_SuratRujukan` char(4) NOT NULL,
  `ID_DokKlinik` char(3) DEFAULT NULL,
  `No_KartuBPJS` char(13) DEFAULT NULL,
  `ID_PetRS` char(3) DEFAULT NULL,
  `ID_PetKlinik` char(3) DEFAULT NULL,
  `Diagnosa` varchar(30) DEFAULT NULL,
  `Tanggal` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_rujukan`
--

INSERT INTO `surat_rujukan` (`ID_SuratRujukan`, `ID_DokKlinik`, `No_KartuBPJS`, `ID_PetRS`, `ID_PetKlinik`, `Diagnosa`, `Tanggal`) VALUES
('A001', 'DK1', '1124453982129', 'PR1', 'PK1', 'Gangguan Mata', '2018-02-25 02:55:10'),
('A002', 'DK2', '1225674553895', 'PR2', 'PK2', 'Gangguan Organ Dalam', '2018-01-19 01:00:05'),
('A003', 'DK3', '1124453982129', 'PR3', 'PK3', 'Gangguan Tenggorokan', '2018-10-22 06:45:27'),
('A004', 'DK4', '1225674553895', 'PR4', 'PK4', 'Gangguan Kulit', '2018-11-15 04:15:55'),
('A005', 'DK1', '2123457754776', 'PR1', 'PK1', 'Gangguan Pernapasan', '2018-08-27 01:00:05'),
('A006', 'DK2', '2104522232929', 'PR2', 'PK2', 'Gangguan Telinga', '2018-09-11 01:00:05'),
('A007', 'DK1', '2123457754776', 'PR2', 'PK1', 'Gangguang Kulit', '2019-02-21 17:00:00'),
('A008', 'DK4', '2104522232929', 'PR4', 'PK4', 'Gangguan Organ Dalam', '2018-01-19 01:00:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dokter_klinik`
--
ALTER TABLE `dokter_klinik`
  ADD PRIMARY KEY (`ID_DokKlinik`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`No_KartuBPJS`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `petugas_klinik`
--
ALTER TABLE `petugas_klinik`
  ADD PRIMARY KEY (`ID_PetKlinik`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `petugas_rs`
--
ALTER TABLE `petugas_rs`
  ADD PRIMARY KEY (`ID_PetRS`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `surat_rujukan`
--
ALTER TABLE `surat_rujukan`
  ADD PRIMARY KEY (`ID_SuratRujukan`),
  ADD KEY `ID_DokKlinik` (`ID_DokKlinik`),
  ADD KEY `No_KartuBPJS` (`No_KartuBPJS`),
  ADD KEY `ID_PetRS` (`ID_PetRS`),
  ADD KEY `ID_PetKlinik` (`ID_PetKlinik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_rujukan`
--
ALTER TABLE `surat_rujukan`
  ADD CONSTRAINT `surat_rujukan_ibfk_1` FOREIGN KEY (`ID_DokKlinik`) REFERENCES `dokter_klinik` (`ID_DokKlinik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_rujukan_ibfk_2` FOREIGN KEY (`No_KartuBPJS`) REFERENCES `pasien` (`No_KartuBPJS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_rujukan_ibfk_3` FOREIGN KEY (`ID_PetRS`) REFERENCES `petugas_rs` (`ID_PetRS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_rujukan_ibfk_4` FOREIGN KEY (`ID_PetKlinik`) REFERENCES `petugas_klinik` (`ID_PetKlinik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
