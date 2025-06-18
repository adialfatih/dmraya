-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2025 at 06:18 AM
-- Server version: 10.6.22-MariaDB
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damayray_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_setup`
--

CREATE TABLE `table_setup` (
  `id_setup` int(11) NOT NULL,
  `nomorwa` int(14) NOT NULL,
  `linkfb` varchar(240) NOT NULL,
  `linktiktok` varchar(240) NOT NULL,
  `linkig` varchar(240) NOT NULL,
  `seo_title` text NOT NULL,
  `seo_desc` text NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_setup`
--

INSERT INTO `table_setup` (`id_setup`, `nomorwa`, `linkfb`, `linktiktok`, `linkig`, `seo_title`, `seo_desc`, `seo_keyword`, `seo_author`) VALUES
(1, 811270313, 'https://www.facebook.com/share/14CYB7cfpq/', 'https://www.tiktok.com/@damay.raya.soluti?_t=ZS-8uD2P79ZCvy&_r=1', 'https://www.instagram.com/damayraya_solutions/profilecard/?igsh=MWxreTN0NW93cDdxbQ==', 'DAMAY RAYA SOLUTIONS - Solusi Terbaik untuk Budidaya Pertanian dan Pestisida', 'DAMAY RAYA SOLUTIONS menyediakan layanan konsultasi lapangan untuk budidaya pertanian khususnya pestisida. Kami berkomitmen mengawal produk pestisida dari distribusi hingga petani dengan strategi lapangan yang efektif.', 'budidaya pertanian, pestisida, konsultasi pertanian, pengawalan produk, strategi lapangan, penanganan keluhan, pertanian, solusi pertanian', 'DAMAY RAYA SOLUTIONS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_setup`
--
ALTER TABLE `table_setup`
  ADD PRIMARY KEY (`id_setup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_setup`
--
ALTER TABLE `table_setup`
  MODIFY `id_setup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
