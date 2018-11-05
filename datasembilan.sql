-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 11:38 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasembilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasembilan`
--

CREATE TABLE `datasembilan` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `usia` varchar(20) NOT NULL,
  `film_favorite` varchar(20) NOT NULL,
  `travel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasembilan`
--

INSERT INTO `datasembilan` (`id`, `nama`, `alamat`, `usia`, `film_favorite`, `travel`) VALUES
(5, 'Sri Haryatini', 'Bandung', '19Tahun', '0', '0'),
(9, 'Jeon Jungkook', 'Koryah', '27Tahun', '1', '1'),
(11, 'fariza', 'medan', '19tahun', '1', '1'),
(12, 'Sri Haryatini', 'Jakarta', '19Tahun', '1', '1'),
(13, 'Fariza Nabila', 'Medan', '19Tahun', 'Horror', 'Bangka Belitung'),
(14, 'Lala Warsilah', 'Bojong', '30Tahun', 'Anime', 'Bali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasembilan`
--
ALTER TABLE `datasembilan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasembilan`
--
ALTER TABLE `datasembilan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
