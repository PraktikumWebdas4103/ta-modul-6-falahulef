-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 08:36 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `password`, `nama`, `nim`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`, `status`) VALUES
('root', '', '', 0, '', '', '', '', '', 'senyummu membuat ku terpesona tetetetetetetetetetetetetetetetetetetetetetetettwe'),
('sonia', '12345', 'sonisyiefa', 1234567890, 'D3 MI 41-03', 'Perempuan', '', 'FIT', 'Jl Pematang siantar', NULL),
('falahulef', '12345', 'Falahul Fajri', 2147483647, 'D3 MI 41-03', 'Laki-Laki', '', 'FIT', 'Jl Ra kartini No 45 Belakang SD Pengadilan', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
