-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2017 at 08:31 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `kumpulanuud`
--

CREATE TABLE `kumpulanuud` (
  `idKumpulanUud` int(11) NOT NULL,
  `idPerundangan` int(11) NOT NULL,
  `nomor` text NOT NULL,
  `tentang` text NOT NULL,
  `fileUud` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kumpulanuud`
--

INSERT INTO `kumpulanuud` (`idKumpulanUud`, `idPerundangan`, `nomor`, `tentang`, `fileUud`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 1, '0/21/12/432', 'Perihal', '', '2017-12-02 07:29:34', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(11) NOT NULL,
  `namaPegawai` text NOT NULL,
  `unit` text NOT NULL,
  `jabatan` text NOT NULL,
  `foto` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `namaPegawai`, `unit`, `jabatan`, `foto`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(4, 'prima', 'arifprima', 'prima', 'cropped-Logo-IPB.png', '2017-11-25 13:05:48', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `perundangan`
--

CREATE TABLE `perundangan` (
  `idPerundangan` int(11) NOT NULL,
  `tipePerundangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perundangan`
--

INSERT INTO `perundangan` (`idPerundangan`, `tipePerundangan`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Undang-Undang', '2017-12-02 04:08:29', '0000-00-00 00:00:00', 0, 0),
(2, 'Peraturan Pemerintah', '2017-12-02 04:12:24', '0000-00-00 00:00:00', 0, 0),
(3, 'Peraturan Presiden', '2017-12-02 04:12:24', '0000-00-00 00:00:00', 0, 0),
(4, 'Keputusan Presiden', '2017-12-02 04:12:24', '0000-00-00 00:00:00', 0, 0),
(5, 'Instruksi Presiden', '2017-12-02 04:12:24', '0000-00-00 00:00:00', 0, 0),
(6, 'Peraturan Menko', '2017-12-02 04:12:24', '0000-00-00 00:00:00', 0, 0),
(7, 'Keputusan Menko', '2017-12-02 04:12:24', '0000-00-00 00:00:00', 0, 0),
(8, 'Nota Dinas Menko', '2017-12-02 04:12:24', '0000-00-00 00:00:00', 0, 0),
(9, 'Memorandum Menko', '2017-12-02 04:12:25', '0000-00-00 00:00:00', 0, 0),
(10, 'Keputusan Sesmenko', '2017-12-02 04:12:25', '0000-00-00 00:00:00', 0, 0),
(11, 'Nota Dinas Sesmenko', '2017-12-02 04:12:25', '0000-00-00 00:00:00', 0, 0),
(12, 'Memorandum Sesmenko', '2017-12-02 04:12:25', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`) VALUES
(1, 'arif', 'prima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kumpulanuud`
--
ALTER TABLE `kumpulanuud`
  ADD PRIMARY KEY (`idKumpulanUud`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `perundangan`
--
ALTER TABLE `perundangan`
  ADD PRIMARY KEY (`idPerundangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kumpulanuud`
--
ALTER TABLE `kumpulanuud`
  MODIFY `idKumpulanUud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perundangan`
--
ALTER TABLE `perundangan`
  MODIFY `idPerundangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
