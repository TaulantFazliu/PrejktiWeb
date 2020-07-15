-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 11:35 PM
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
-- Indexes for table `registerform`
--
ALTER TABLE `registerform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerform`
--
ALTER TABLE `registerform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
