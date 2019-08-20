-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 12:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` text,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `user`, `password`, `nama`) VALUES
(3, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Faisal Hartanto');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_main_project` varchar(8) NOT NULL,
  `no_doc_project` varchar(30) NOT NULL,
  `deskripsi_project` varchar(100) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_main_project`, `no_doc_project`, `deskripsi_project`, `tgl_input`) VALUES
('123456', '123456', 'oke', '2019-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `so`
--

CREATE TABLE `so` (
  `tgl_input` date NOT NULL,
  `id_so` varchar(50) NOT NULL,
  `id_main_project` varchar(20) NOT NULL,
  `no_doc_project` varchar(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `nilai_project` int(20) NOT NULL,
  `bulan` date NOT NULL,
  `no_po_kesepakatan` varchar(30) NOT NULL,
  `status_job` varchar(20) NOT NULL,
  `rutin` varchar(10) NOT NULL,
  `telkomsel` varchar(20) NOT NULL,
  `po_nonpo` varchar(20) NOT NULL,
  `status_po` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `so`
--

INSERT INTO `so` (`tgl_input`, `id_so`, `id_main_project`, `no_doc_project`, `deskripsi`, `nilai_project`, `bulan`, `no_po_kesepakatan`, `status_job`, `rutin`, `telkomsel`, `po_nonpo`, `status_po`) VALUES
('2019-08-01', '123', '123', '123', '123', 123, '2019-08-13', '123', 'ok', 'rutin', 'telkomsel', 'po', 'oke'),
('2019-08-01', '123', '123', '123', '123', 123, '2019-08-13', '123', 'ok', 'rutin', 'telkomsel', 'po', 'oke');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_main_project`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
