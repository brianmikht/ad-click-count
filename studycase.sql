-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 02:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studycase`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `gambar`) VALUES
(2, 'LinkAja', 'linkaja.png'),
(3, 'Summarecon Mall Serpong', 'logo-mal-serpong.jpg'),
(4, 'Bank Mandiri', 'mandiri.png');

-- --------------------------------------------------------

--
-- Table structure for table `klik`
--

CREATE TABLE `klik` (
  `id_klik` int(11) NOT NULL,
  `tanggal_klik` date DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klik`
--

INSERT INTO `klik` (`id_klik`, `tanggal_klik`, `id`) VALUES
(4, '2021-11-08', 2),
(5, '2021-11-08', 2),
(6, '2021-11-08', 2),
(7, '2021-11-08', 4),
(8, '2021-11-08', 2),
(9, '2021-11-08', 3),
(10, '2021-11-08', 2),
(11, '2021-11-08', 4),
(14, '2021-11-08', 4),
(15, '2021-11-08', 3),
(16, '2021-11-08', 3),
(17, '2021-11-08', 3),
(18, '2021-11-08', 4),
(19, '2021-11-08', 3),
(20, '2021-11-08', 4),
(21, '2021-11-08', 4),
(22, '2021-11-08', 2),
(23, '2021-11-08', 2),
(24, '2021-11-08', 2),
(25, '2021-11-08', 2),
(26, '2021-11-08', 2),
(27, '2021-11-08', 2),
(28, '2021-11-08', 2),
(29, '2021-11-08', 2),
(30, '2021-11-08', 2),
(31, '2021-11-08', 4),
(32, '2021-11-08', 3),
(33, '2021-11-08', 3),
(34, '2021-11-08', 3),
(35, '2021-11-08', 3),
(36, '2021-11-08', 3),
(37, '2021-11-08', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klik`
--
ALTER TABLE `klik`
  ADD PRIMARY KEY (`id_klik`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klik`
--
ALTER TABLE `klik`
  MODIFY `id_klik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klik`
--
ALTER TABLE `klik`
  ADD CONSTRAINT `klik_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gambar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
