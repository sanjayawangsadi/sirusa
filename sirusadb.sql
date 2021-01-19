-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 11:30 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirusadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lat` double(10,6) NOT NULL,
  `long` double(10,6) NOT NULL,
  `alamat` text NOT NULL,
  `image` text NOT NULL DEFAULT 'default.jpg',
  `telepon` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`id`, `nama`, `lat`, `long`, `alamat`, `image`, `telepon`, `slug`) VALUES
(1, 'Rumah Sakit Umum Pusat Dr Hasan Sadikin', -6.896223, 107.598956, 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161', '5ff5c7b4d13e9.jpeg', '(022) 2034953', 'Rumah-Sakit-Umum-Pusat-Dr-Hasan-Sadikin'),
(2, 'Rumah Sakit Ibu dan Anak Limijati', -6.906420, 107.614240, 'Jalan, LLRE Martadinata St No.39, Citarum, Bandung Wetan, Bandung City, West Java 40115', '11.jpg', '(022) 4207770', 'Rumah-Sakit-Ibu-dan-Anak-Limijati'),
(3, 'Rumah Sakit Umum Daerah Kota Bandung', -6.915437, 107.698773, 'Jl. Rumah Sakit No.22, Pakemitan, Cinambo, Kota Bandung, Jawa Barat 45474', '12.jpg', '(022) 7811794', 'Rumah-Sakit-Umum-Daerah-Kota-Bandung'),
(4, 'Rumah Sakit Santo Yusup', -6.906345, 107.643063, 'Jl. Cikutra No.7, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124', '6006a833e34f0.jpg', '(022) 7202420', 'Rumah-Sakit-Santo-Yusup'),
(5, 'Rumah Sakit TNI AU dr M Salamun', -6.863869, 107.604880, 'Jl. Ciumbuleuit No.203, Ciumbuleuit, Kec. Cidadap, Kota Bandung, Jawa Barat 40142', '6006a9b5f3fb1.jpg', '(022) 2031624', 'Rumah-Sakit-TNI-AU-dr-M-Salamun'),
(6, 'Rumah Sakit Advent Bandung', -6.891608, 107.603319, 'Jl. Cihampelas No.161, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131', '6006aa8d1278c.jpeg', '(022) 20343869', 'Rumah-Sakit-Advent-Bandung'),
(16, 'Rumah Sakit Santo Borromeus', -6.892803, 107.614066, 'Jl. Ir. H. Juanda No.100, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', '6006ac1e07236.jpg', '(022) 2552000', 'Rumah-Sakit-Santo-Borromeus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'sanjaya', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peta`
--
ALTER TABLE `peta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
