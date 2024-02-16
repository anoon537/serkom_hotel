-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 04:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nomor` varchar(16) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama`, `jk`, `nomor`, `tipe`, `tanggal`, `durasi`, `diskon`, `total`) VALUES
(1, 'Mariah Salole', 'Perempuan', '3302104042344234', 'Kamar Deluxe', '2024-02-23', 3, 10, 1590000),
(2, 'Muhammad Mahmuda Prawira', 'Laki-laki', '3302167534587654', 'Kamar Executive', '2024-02-28', 5, 10, 4900000),
(3, 'Farah Zhafirah Adrytona', 'Perempuan', '330210404', 'Kamar Standar', '2024-02-22', 6, 10, 1560000),
(4, 'Dimas', 'Laki-laki', '33021040423', 'Kamar Deluxe', '2024-02-23', 1, 0, 580000),
(5, 'Fira Cantik', 'Perempuan', '330210404', 'Kamar Executive', '2024-02-16', 1, 0, 1000000),
(6, 'Mariah Salole', 'Perempuan', '3302104046262626', 'Kamar Standar', '2024-02-16', 2, 0, 400000),
(7, 'Agus', 'Laki-laki', '3302123450083898', 'Kamar Executive', '2024-02-16', 2, 0, 2160000),
(8, 'Aleena', 'Perempuan', '3302104323284928', 'Kamar Deluxe', '2024-02-16', 4, 10, 2120000),
(9, 'Marsinah', 'Perempuan', '3302123450008762', 'Kamar Deluxe', '2024-02-22', 5, 10, 2650000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
