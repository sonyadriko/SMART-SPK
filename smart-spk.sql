-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 07:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart-spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_hasil`
--

CREATE TABLE `detail_hasil` (
  `id_detail_hasil` int(11) NOT NULL,
  `hasil_id` int(11) NOT NULL,
  `nama_handphone` varchar(255) NOT NULL,
  `nilai_akhir` float NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_hasil`
--

INSERT INTO `detail_hasil` (`id_detail_hasil`, `hasil_id`, `nama_handphone`, `nilai_akhir`, `ranking`) VALUES
(1, 2, 'iQOO Z9 5G', 53.0952, 2),
(2, 2, 'Redmi Note 13 Pro+ 5G', 49.7619, 3),
(3, 2, 'Realme GT', 42.381, 4),
(4, 2, 'Vivo V30 Pro 5G', 41.6667, 5),
(5, 2, 'Oppo Reno11 Pro 5G', 38.3333, 6),
(6, 2, 'Xiaomi 13T', 35.7143, 7),
(7, 2, 'Galaxy A15 5G', 28.8095, 8),
(8, 2, 'Infinix Note 40', 22.1429, 9),
(9, 2, 'Tecno Pova 5', 6.19048, 10),
(10, 2, 'Itel P55', 2.85714, 11),
(11, 3, 'iQOO Z9 5G', 53.0952, 2),
(12, 3, 'Redmi Note 13 Pro+ 5G', 49.7619, 3),
(13, 3, 'Realme GT', 42.381, 4),
(14, 3, 'Vivo V30 Pro 5G', 41.6667, 5),
(15, 3, 'Oppo Reno11 Pro 5G', 38.3333, 6),
(16, 3, 'Xiaomi 13T', 35.7143, 7),
(17, 3, 'Galaxy A15 5G', 28.8095, 8),
(18, 3, 'Infinix Note 40', 22.1429, 9),
(19, 3, 'Tecno Pova 5', 6.19048, 10),
(20, 3, 'Itel P55', 2.85714, 11),
(21, 4, 'iQOO Z9 5G', 53.0952, 2),
(22, 4, 'Redmi Note 13 Pro+ 5G', 49.7619, 3),
(23, 4, 'Realme GT', 42.381, 4),
(24, 4, 'Vivo V30 Pro 5G', 41.6667, 5),
(25, 4, 'Oppo Reno11 Pro 5G', 38.3333, 6),
(26, 4, 'Xiaomi 13T', 35.7143, 7),
(27, 4, 'Galaxy A15 5G', 28.8095, 8),
(28, 4, 'Infinix Note 40', 22.1429, 9),
(29, 4, 'Tecno Pova 5', 6.19048, 10),
(30, 4, 'Itel P55', 2.85714, 11),
(31, 5, 'Redmi Note 13 Pro+ 5G', 29.8925, 2),
(32, 5, 'iQOO Z9 5G', 23.2258, 3),
(33, 5, 'Xiaomi 13T', 10, 4),
(34, 6, 'Redmi Note 13 Pro+ 5G', 31.6667, 1),
(35, 6, 'iQOO Z9 5G', 25, 2),
(36, 6, 'Galaxy A15 5G', 2.85714, 3);

-- --------------------------------------------------------

--
-- Table structure for table `handphone`
--

CREATE TABLE `handphone` (
  `id_handphone` int(11) NOT NULL,
  `nama_handphone` varchar(255) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `handphone`
--

INSERT INTO `handphone` (`id_handphone`, `nama_handphone`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`) VALUES
(1, 'Itel P55', 5, 3, 3, 1, 4, 1, 1),
(2, 'Tecno Pova 5', 5, 3, 4, 1, 4, 1, 1),
(3, 'Infinix Note 40', 4, 3, 4, 3, 5, 1, 1),
(4, 'Galaxy A15 5G', 4, 3, 4, 2, 4, 2, 1),
(5, 'iQOO Z9 5G', 3, 4, 4, 2, 4, 2, 3),
(6, 'Redmi Note 13 Pro+ 5G', 3, 4, 5, 3, 5, 2, 1),
(7, 'Xiaomi 13T', 2, 4, 4, 3, 4, 2, 1),
(8, 'Realme GT', 2, 4, 4, 2, 4, 2, 2),
(9, 'Oppo Reno11 Pro 5G', 1, 4, 5, 3, 4, 2, 1),
(10, 'Vivo V30 Pro 5G', 1, 4, 5, 4, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `tanggal`) VALUES
(1, '2024-10-26 14:14:54'),
(2, '2024-10-26 14:19:12'),
(3, '2024-10-26 14:21:36'),
(4, '2024-10-26 14:44:16'),
(5, '2024-10-26 15:25:52'),
(6, '2024-10-31 09:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `bobot_kriteria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`) VALUES
(1, 'Harga', 0.35),
(2, 'RAM', 0.2),
(3, 'ROM', 0.15),
(4, 'Kamera Depan', 0.1),
(5, 'Kamera Belakang', 0.1),
(6, 'Jaringan', 0.05),
(7, 'Baterai', 0.05);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_hasil`
--
ALTER TABLE `detail_hasil`
  ADD PRIMARY KEY (`id_detail_hasil`);

--
-- Indexes for table `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id_handphone`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_hasil`
--
ALTER TABLE `detail_hasil`
  MODIFY `id_detail_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id_handphone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
