-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 10:09 AM
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
-- Database: `koskosang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
('E41191280', 'Hendy Setiawan', 'hendystyawan74@gmail.com', 'lavender');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` varchar(100) NOT NULL,
  `id_admin` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tulisan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kos_kosan`
--

CREATE TABLE `kos_kosan` (
  `id_kos` varchar(255) NOT NULL,
  `id_pemilik` varchar(255) NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar_1` varchar(255) DEFAULT NULL,
  `gambar_2` varchar(255) DEFAULT NULL,
  `gambar_3` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `fas1` varchar(11) NOT NULL,
  `fas2` varchar(11) NOT NULL,
  `fas3` varchar(11) NOT NULL,
  `fas4` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_kos`
--

CREATE TABLE `pemilik_kos` (
  `id_pemilik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `vkey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik_kos`
--

INSERT INTO `pemilik_kos` (`id_pemilik`, `nama`, `alamat`, `email`, `password`, `no_hp`, `vkey`) VALUES
('589385839634', 'Ardan Venora F', 'Bondowoso', 'hibonachi@gmail.com', '$2y$10$W7vjnrDQGR3D0IlUcTjbYuM0nPEJZHD50s/B4AKScgPtxR2xQWp4q', '08976576768', 'e72566578c93c3a4e18bb44bebc941ba'),
('E41191280', 'Hendy setiawan', 'Ngawi', 'hendystyawan74@gmail.com', '$2y$10$a/L0C5kxqyhXdI.v3F1NJeVx6fZ1BeRfHEUj18bB3gDM04xc9Am7e', '083844984836', '7d9fb772bade721dff4e8457dda17940'),
('E6679845', 'Dwi Rifki Novianto', 'Tangerang', 'remanagedata@gmail.com', '$2y$10$sCbmmu0ZOmXOZuMNAopJWe.LBLjixqYt0HqYMCOZRXyjmGGnQQKLe', '0812345678910', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id_pemilik` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_kos` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_handphone` varchar(100) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `token` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `kos_kosan`
--
ALTER TABLE `kos_kosan`
  ADD PRIMARY KEY (`id_kos`),
  ADD KEY `kos_kosan_fk0` (`id_pemilik`);

--
-- Indexes for table `pemilik_kos`
--
ALTER TABLE `pemilik_kos`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kos_kosan`
--
ALTER TABLE `kos_kosan`
  ADD CONSTRAINT `kos_kosan_fk0` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik_kos` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
