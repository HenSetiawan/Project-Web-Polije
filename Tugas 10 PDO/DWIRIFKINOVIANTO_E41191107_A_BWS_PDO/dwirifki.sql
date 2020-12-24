-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 03:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwirifki`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbiodata`
--

CREATE TABLE `tbbiodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbbiodata`
--

INSERT INTO `tbbiodata` (`id`, `nama`, `alamat`, `hp`) VALUES
(5, 'Dwi Rifki Novianto', 'Banten', '0855665666'),
(12, 'Unknown', 'Known', '08555555');

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Web Administrator', 'arifamb@gmail.com', '$2y$10$nb6otmA4BXPb6jUnF0wCJO4qqRj0NdwKXw/UdynynOvb.PHqAOG0C'),
(5, 'sad', 'sad@gmail.com', '$2y$10$GkZUR05sfcM1cHlTUZ/2d.AzcUQP2Uw8ANbOPjByGrVt26KuCqK9i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbiodata`
--
ALTER TABLE `tbbiodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbiodata`
--
ALTER TABLE `tbbiodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
