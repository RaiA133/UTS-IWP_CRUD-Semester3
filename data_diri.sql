-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 04:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `prodi` varchar(32) NOT NULL,
  `fakultas` varchar(32) NOT NULL,
  `semester` varchar(32) NOT NULL,
  `hobi` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `no_wa` varchar(32) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `alamat_domisili` text NOT NULL,
  `kota` varchar(32) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `prodi`, `fakultas`, `semester`, `hobi`, `email`, `no_wa`, `alamat`, `alamat_domisili`, `kota`, `tgl_lahir`, `gender`) VALUES
(15, 'Ari Kusuma', 'Teknik Industri', 'Teknik', '5', 'Gitaran', 'AriKusuma1997@gmail.com', '083212456734', 'jl. Sukajadi no.567 ', 'jl. Sukajadi no.567 RT6 / RW 12', 'Bandung Kota', '1997-03-24', 'Pria'),
(19, '123asdasd', '123', '123', '12', '123', '123123@gmail.com', '123123', '23232323', 'wwwwwwwwwwwwww', 'Kab. Bandung', '2019-06-18', 'Wanita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
