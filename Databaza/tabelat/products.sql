-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 11:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compu-parts`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(32) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `added_by` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `photo`, `title`, `description`, `added_by`) VALUES
(1, 'Foto/card_1ab93e87196cf33a.png', 'H1', 'intel core i7-9   Nvidia GEFORCE RTX 2070    16GB RAM    1TB HDD', ''),
(2, 'Foto/card_a2e260eb03ee5b76.png', 'H510 ELITE', 'A strategy consulant is primarly \r\ntowards providing\r\nunbiased strategic advice to a company\'s board', ''),
(3, 'Foto/cover_f6dd6bcf1dc5957e.png', 'H710I', 'Sales Managment Services helps \r\nclients improve their sales\r\norganisation\'s effectiveness', ''),
(5, '96-960632_avant-garde-gaming-pc-gaming-pc-clipart.png', 'Avant Garde', 'Intel i9 Quad 3.6GHz , Nvidia GTX 1010 6GB , 32GB RAM , 2TB HDD', 'Taulant1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
