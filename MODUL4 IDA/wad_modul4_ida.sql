-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 03:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_ida`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_ida_table`
--

CREATE TABLE `showroom_ida_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_ida_table`
--

INSERT INTO `showroom_ida_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(13, 'Aston Martin X', 'idaa', 'Aston Martin', '2022-11-01', 'bismillahh:\")', '', ''),
(14, '', '', '', '0000-00-00', '', '', ''),
(15, '', '', '', '0000-00-00', '', '', ''),
(19, '', '', '', '0000-00-00', '', '', ''),
(20, 'BUGATTI ', 'IDA', 'TERSERAH', '2222-02-12', 'hhhhmmm', '2293-', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user_ida`
--

CREATE TABLE `user_ida` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ida`
--

INSERT INTO `user_ida` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'idaa', 0, 'heyyo', ''),
(2, 'ida', 0, 'heyyo', '09481927814'),
(3, 'idaa', 0, 'aaa', '3543514535'),
(4, '', 0, '', '3543514535'),
(5, '', 0, '', '3543514535');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_ida_table`
--
ALTER TABLE `showroom_ida_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_ida`
--
ALTER TABLE `user_ida`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_ida_table`
--
ALTER TABLE `showroom_ida_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_ida`
--
ALTER TABLE `user_ida`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
