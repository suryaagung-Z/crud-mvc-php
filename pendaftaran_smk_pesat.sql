-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 09:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_smk_pesat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nisn` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `penghasilan_ortu` int(255) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `email`, `nama_ayah`, `nama_ibu`, `penghasilan_ortu`, `foto`) VALUES
(1, 'agung', '123456', 'Kendal', '2004-02-01', 'agung@gmail.com', 'yahya', 'muntaroh', 500, '6202c1076c381.png'),
(4, 'teguh', '123456', 'Bekasi', '1993-01-20', 'teguh@gmail.com', 'abc', 'def', 300, '6202d19806dcd.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
