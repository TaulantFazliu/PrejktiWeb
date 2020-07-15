-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 11:46 PM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `ID` int(32) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `photo`, `title`, `description`) VALUES
(1, 'Foto/TaliMatka1.jpg', 'Taulant Fazliu', 'Un jam Taulant Fazliu'),
(2, 'Foto/BesmiriMarigon.jpg', 'Besmir Ternava', 'Un jam Besmir Ternava'),
(3, 'Foto/adnani.png', 'Adnan Kasumaj', 'Un jam Adnan Kasumaj');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(32) NOT NULL,
  `emri` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numri` int(32) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `emri`, `email`, `numri`, `msg`) VALUES
(1, 'Adnan Kasumaj', 'adnkas99@gmail.com', 123456789, 'aaaaaaaaaaaa'),
(17, 'sadadsdasd', 'adnkas99@gmail.com', 1111111111, 'dgdfgdfgdgfgd');

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

-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

CREATE TABLE `registerform` (
  `ID` int(11) NOT NULL,
  `emri` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `roli` tinyint(32) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`ID`, `emri`, `email`, `password`, `roli`) VALUES
(12, 'vegim2', 'vegim1@gmail.com', '$2y$10$49CcD2iElZPkiY02SRJ2fOfsmWOv3kSmBLwx/9OF.Vcou4NyLy0re', 0),
(13, 'Taulant1', 'taulant@gmail.com', '$2y$10$AqDiEZz017lt0xZzsN/3t.EmM0FW91z2RJ1nq44tFAStLASDarQz6', 0),
(14, 'Adnan', 'ak45732@ubt-uni.net', '$2y$10$/hFlEUhnmTxJdXSBiuTDK.gnFQ6Gv3kKndMUQyFCm77chFkUOk.wS', 1),
(26, 'Andisa', 'andisa@gmail.com', '$2y$10$tj0G/jJr/N3jEc8Fk.Hm..MJsbVDeBc6.uQJIT7DFQx7xoP19qJ3e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registerform`
--
ALTER TABLE `registerform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registerform`
--
ALTER TABLE `registerform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
