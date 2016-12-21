-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 08:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasiwisuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_wisuda`
--

CREATE TABLE `tabel_data_wisuda` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `ipk` varchar(20) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto_mahasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_data_wisuda`
--

INSERT INTO `tabel_data_wisuda` (`id`, `no`, `nama`, `nim`, `ipk`, `fakultas`, `prodi`, `judul`, `foto_mahasiswa`) VALUES
(1, 0, 'dummy', '', '0', '', '', '', ''),
(2, 1, 'Andreas Christian', 'D1041131058', '4,00', 'Fakultas Teknik', 'Teknik Informatika', 'Implementasi Sistem Penjadwalan Akademik Fakultas Teknik Universitas Tanjungpura Dengan Menggunakan Algoritma Genetika', 'images/IdFC_gal_13092013_114803.jpg'),
(3, 2, 'Bagus Jati Kuncoro', 'D10411319', '3,91', 'Fakultas Mipa', 'Sistem Komputer', 'Implementasi Monitoring kondisi sepeda motor berbasis cloud computing', ''),
(4, 3, 'Erwin Wahyudi', 'D10411310', '2,92', 'Fakultas Mipa', 'Sistem Komputer', 'Implementasi Citra Digital dengan template matching', ''),
(5, 4, 'Ady Akbar', 'H101', '2,32', 'Fakultas Mipa', 'Sistem Komputer', 'Dewa Laravel', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_data_wisuda`
--
ALTER TABLE `tabel_data_wisuda`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
