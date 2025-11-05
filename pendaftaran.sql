-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2025 at 03:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas3`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `minat_topik` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `alasan` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `no_hp`, `password`, `jurusan`, `minat_topik`, `gender`, `alasan`, `created_at`) VALUES
(1, 'Ansa Zahida', 'anisa@gmail.com', '082341389621', '123240049', 'Sistem Informasi', '-Event Kampus', 'Perempuan', 'emmmmmmmm', '2025-11-05 18:03:10'),
(2, 'Anisa Zahida', 'anisa@gmail.com', '089764527898', '123', 'Teknik Informatika', '-Politik', 'Perempuan', 'gak tau', '2025-11-05 18:21:47'),
(3, 'Anisa Zahida', 'zahidaanisa988@gmail.com', '087753702888', 'wooooop', 'Manajemen', 'Event Kampus, Politik', 'Perempuan', 'gk tau', '2025-11-05 19:13:35'),
(4, 'Ahmad usman', 'zahidaanisa988@gmail.com', '0897345262728', 'gak tau', 'Sistem Informasi', '-Politik', 'Perempuan', 'gak tauuu', '2025-11-05 19:57:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
