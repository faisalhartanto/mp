-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 03:06 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

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
  `password` text DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `user`, `password`, `nama`, `level`) VALUES
(3, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Faisal Hartanto', 1),
(4, 'manager', 'e10adc3949ba59abbe56e057f20f883e', 'manager', 2),
(5, 'gm', 'e10adc3949ba59abbe56e057f20f883e', 'gm', 3);

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
('123', 'PRJ-01', 'Project membuat aplikasi Project Management', '2019-08-21'),
('124', 'PRJ-02', 'Projek aplikasi ', '2019-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `so`
--

CREATE TABLE `so` (
  `tgl_input` date NOT NULL,
  `id_so` varchar(50) NOT NULL,
  `id_main_project` varchar(20) NOT NULL,
  `no_doc_project` varchar(20) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `nilai_project` int(20) NOT NULL,
  `bulan` date NOT NULL,
  `no_po_kesepakatan` varchar(30) NOT NULL,
  `status_job` varchar(20) NOT NULL,
  `tgl_belumdikerjakan` date NOT NULL,
  `tgl_ongoing` date NOT NULL,
  `tgl_bast` date NOT NULL,
  `tgl_closed` date NOT NULL,
  `rutin` varchar(10) NOT NULL,
  `kemendikbud` varchar(20) NOT NULL,
  `po_nonpo` varchar(20) NOT NULL,
  `status_po` varchar(10) NOT NULL,
  `flag` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `so`
--

INSERT INTO `so` (`tgl_input`, `id_so`, `id_main_project`, `no_doc_project`, `deskripsi`, `nilai_project`, `bulan`, `no_po_kesepakatan`, `status_job`, `tgl_belumdikerjakan`, `tgl_ongoing`, `tgl_bast`, `tgl_closed`, `rutin`, `kemendikbud`, `po_nonpo`, `status_po`, `flag`) VALUES
('2019-08-21', 'SO-01', '123', 'PRJ-01', 'Project Pembuatan aplikasi Project Management triwulan 1', 50000000, '2019-08-21', 'PO-01', 'On Progress', '2019-08-21', '2019-09-01', '0000-00-00', '0000-00-00', 'nonrutin', 'kemendikbud', 'ya', 'ada', 2),
('2019-11-21', 'SO-02', '123', 'PRJ-01', 'Projek aplikasi project management triwulan 2', 50000000, '2019-11-21', 'PO-01', 'On Progress', '2019-11-21', '2019-09-01', '0000-00-00', '0000-00-00', 'nonrutin', 'kemendikbud', 'ya', 'ada', 2),
('2019-08-21', 'SO-03', '124', 'PRJ-02', 'Projek Aplikasi per triwulan', 40000000, '2019-08-21', 'PO-03', 'belum dikerjakan', '2019-08-21', '0000-00-00', '0000-00-00', '0000-00-00', 'nonrutin', 'kemendikbud', 'ya', 'ada', 2);

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

--
-- Indexes for table `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`id_so`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
