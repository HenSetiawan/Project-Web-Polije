-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 07:54 AM
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
  `tulisan` varchar(100) NOT NULL,
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
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kos_kosan`
--

INSERT INTO `kos_kosan` (`id_kos`, `id_pemilik`, `nama_kos`, `alamat`, `jenis`, `harga`, `gambar_1`, `gambar_2`, `gambar_3`, `deskripsi`) VALUES
('301608877500', 'E41191280', 'Kos Bu Ndien', 'Tangerang', 'campur', 250000, '5329213.jpg', '9899542.jpg', '4065311.jpg', 'Harga Normal: Rp3.525.000/bulan. Booking sekarang, kuota terbatas! •2 • Dekat dengan Universitas Sanata Dharma kampus 1 Mrican (5 menit), Universitas Atmajaya kampus Mrican ‘’Fakultas Hukum’’ (5 menit), UIN Sunan Kalijaga (5 menit), Universitas Gadjah Mada Yogyakarta (10 menit), Universitas Negeri Yogyakarta (10 menit), Universitas Mercubuana Yogyakarta kampus 2 (12 menit), STIKES Panti Rapih Condong Catur (10 menit), Stikes Panti Rapih Condong Catur (10 menit), PKL Mrican (10 menit), Ambarukmo Plaza (7 menit), Lippo Mall (7 menit), Empire XXI (10 menit), Galeria Mall (12 menit), RS Siloam Yogyakarta (6 menit), RS Bethesda (12 menit) dekat dengan tempat makan, tempat nongkrong, Ibadah, SPBU, ATM dan mudah ditemukan oleh ojek online • Yuk BOOKING LANGSUNG sekarang, sebelum kehabisan.'),
('771608879022', 'E41191280', 'Kos Bu Selly', 'Tangerang', 'putri', 400000, '3963012.jpg', '8944191.jpg', '9517693.jpg', 'Harga Normal: Rp3.525.000/bulan. Booking sekarang, kuota terbatas! •2 • Dekat dengan Universitas Sanata Dharma kampus 1 Mrican (5 menit),  Universitas Atmajaya kampus Mrican ‘’Fakultas Hukum’’ (5 menit), UIN Sunan Kalijaga (5 menit), Universitas Gadjah Mada Yogyakarta (10 menit), Universitas Negeri Yogyakarta (10 menit), Universitas Mercubuana Yogyakarta kampus 2 (12 menit), STIKES Panti Rapih Condong Catur (10 menit), Stikes Panti Rapih Condong Catur (10 menit), PKL Mrican (10 menit), Ambarukmo Plaza (7 menit), Lippo Mall (7 menit), Empire XXI (10 menit), Galeria Mall (12 menit), RS Siloam Yogyakarta (6 menit), RS Bethesda (12 menit) dekat dengan tempat makan, tempat nongkrong, Ibadah, SPBU, ATM dan mudah ditemukan oleh ojek online • Yuk BOOKING LANGSUNG sekarang, sebelum kehabisan');

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
('589385839634', 'Ardan Venora', 'Bondowoso', 'Hibonachi@gmail.com', '$2y$10$W7vjnrDQGR3D0IlUcTjbYuM0nPEJZHD50s/B4AKScgPtxR2xQWp4q', '08976576768', 'e72566578c93c3a4e18bb44bebc941ba'),
('E41191280', 'Hendy setiawan', 'Ngawi', 'hendystyawan74@gmail.com', '$2y$10$a/L0C5kxqyhXdI.v3F1NJeVx6fZ1BeRfHEUj18bB3gDM04xc9Am7e', '083844984836', '7d9fb772bade721dff4e8457dda17940'),
('E6679845', 'Dwi Rifky N', 'Bekasi', 'DwiRifky@gmail.com', '$2y$10$sCbmmu0ZOmXOZuMNAopJWe.LBLjixqYt0HqYMCOZRXyjmGGnQQKLe', '08976576768', NULL);

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_handphone`, `vkey`, `token`) VALUES
('5fd5d0da6946e', 'Hendy setiawan', 'hendystyawan74@gmail.com', '$2y$10$195.CmRd29us25uRrpWoJ.q89q9OBjTcSPhvD5Yj7IaXQf5f7dZHS', '083848939627', 'aec3243f8dad30889c81944eae34b67f', 1),
('5fe2d1494cbf1', 'Dwi Rifki Novianto', 'remanagedata@gmail.com', '$2y$10$z5IXTxU0oynZyb0cToOti.daHtOC71Lk0TxinVzJdrQQaMNzQQ5by', '083872523688', '804c329250e57bc992db6579846886d2', 1),
('5fe2d1a30c8fc', 'Dwi Rifki Novianto', 'dwirifkinovianto10@gmail.com', '$2y$10$n.VyyfaVsGSMOPzLtYMbZO14bhO/eU/9xcOe.zl.w/.p8jKAz0YE2', '083872523688', '4dc330899776601d1afa6204d8f9b215', 1);

--
-- Indexes for dumped tables
--

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
