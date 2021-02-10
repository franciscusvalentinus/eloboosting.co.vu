-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2020 at 03:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14759951_fvo140202`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int(10) NOT NULL,
  `rank` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image1` text COLLATE utf8_unicode_ci NOT NULL,
  `image2` text COLLATE utf8_unicode_ci NOT NULL,
  `image3` text COLLATE utf8_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `rank`, `image1`, `image2`, `image3`, `price`, `description`) VALUES
(1, 'IRBRO', 'irbro.png', 'irbro.png', 'irbro.png', 65000, 'IRON IV -> BRONZE IV'),
(2, 'IRSIL', 'irsil.png', 'irsil.png', 'irsil.png', 160000, 'IRON IV -> SILVER IV'),
(3, 'IRGOL', 'irgol.png', 'irgol.png', 'irgol.png', 285000, 'IRON IV -> GOLD IV'),
(4, 'IRPLA', 'irpla.png', 'irpla.png', 'irpla.png', 440000, 'IRON IV -> PLATINUM IV'),
(5, 'BROSIL', 'brosil.png', 'brosil.png', 'brosil.png', 95000, 'BRONZE IV -> SILVER IV'),
(6, 'BROGOL', 'brogol.png', 'brogol.png', 'brogol.png', 220000, 'BRONZE IV -> GOLD IV'),
(7, 'BROPLA', 'bropla.png', 'bropla.png', 'bropla.png', 375000, 'BRONZE IV -> PLATINUM IV'),
(8, 'SILGOL', 'silgol.png', 'silgol.png', 'silgol.png', 125000, 'SILVER IV -> GOLD IV'),
(9, 'SILPLA', 'silpla.png', 'silpla.png', 'silpla.png', 280000, 'SILVER IV -> PLATINUM IV'),
(10, 'GOLPLA', 'golpla.png', 'golpla.png', 'golpla.png', 155000, 'GOLD IV -> PLATINUM IV'),
(11, '1KXP', '1kxp.png', '1kxp.png', '1kxp.png', 5000, '5K IDR / 1K XP'),
(12, '10KXP', '10kxp.png', '10kxp.png', '10kxp.png', 30000, '30K IDR / 10K XP');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `name`, `email`, `message`) VALUES
(4, 'aa', 'fvochannel@gmail.com', 'gg'),
(5, 'franciscusvalentinus', 'fvochannel@gmail.com', 'TEST'),
(6, 'jonathan', 'holiemolie97@gmail.com', 'hallo gan, kapan mulai buka jasa rank wildrift nih ? hehe dah mau full release gamenya nih'),
(7, 'Amirul muttaqin', 'rulzthepublic@gmail.com', 'Kak joki winrate buat pvp ada gk kak ?'),
(8, 'rrahmanfathur', 'rrahmanfathur@gmail.com', 'Mau joki lol');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `name`, `email`, `rank`, `phone_number`) VALUES
(6, 'Tes', 'indonesianitacademy@gmail.com', 'TEST', 81333138472),
(7, 'rrahmanfathur', 'rrahmanfathur@gmail.com', 'BROKOLI', 6281342798798),
(8, 'Dhiraj Kelly', 'dhirajkelly@gmail.com', 'BROSIL', 8111282991);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `species` varchar(20) NOT NULL,
  `breed` varchar(20) NOT NULL,
  `gender` int(1) NOT NULL,
  `birth` date DEFAULT NULL,
  `love` enum('true','false') NOT NULL DEFAULT 'false',
  `picture` varchar(100) NOT NULL DEFAULT 'http://192.168.1.103/demo_pets/pets_picture/pet_logo.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `species`, `breed`, `gender`, `birth`, `love`, `picture`) VALUES
(1, 'Rabbitesaaa', 'Rabbit', 'Hex Rabbit', 1, '2018-07-28', 'false', '/demo_pets/pets_picture/1.jpeg'),
(6, 'Ragsdaaa', 'Cat', 'Ragdoll', 1, '2017-12-07', 'false', '/demo_pets/pets_picture/6.jpeg'),
(7, 'Gg', 'Fd', 'R', 2, '2020-09-21', 'false', 'http://192.168.1.103/demo_pets/pets_picture/pet_logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
