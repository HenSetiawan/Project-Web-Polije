-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Des 2020 pada 15.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
('E41191280', 'Hendy Setiawan', 'hendystyawan74@gmail.com', 'lavender');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
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
-- Struktur dari tabel `kos_kosan`
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
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kos_kosan`
--

INSERT INTO `kos_kosan` (`id_kos`, `id_pemilik`, `nama_kos`, `alamat`, `jenis`, `harga`, `gambar_1`, `gambar_2`, `gambar_3`, `deskripsi`) VALUES
('431608560109', 'E41191280', 'Melati', 'Jember', 'putra', 250000, '73871bing.png', '581006indihome.png', '147849inner-join.png', 'test data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_kos`
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
-- Dumping data untuk tabel `pemilik_kos`
--

INSERT INTO `pemilik_kos` (`id_pemilik`, `nama`, `alamat`, `email`, `password`, `no_hp`, `vkey`) VALUES
('589385839634', 'Ardan Venora', 'Bondowoso', 'Hibonachi@gmail.com', '$2y$10$W7vjnrDQGR3D0IlUcTjbYuM0nPEJZHD50s/B4AKScgPtxR2xQWp4q', '08976576768', 'e72566578c93c3a4e18bb44bebc941ba'),
('E41191280', 'Hendy setiawan', 'Ngawi', 'hendystyawan74@gmail.com', '$2y$10$a/L0C5kxqyhXdI.v3F1NJeVx6fZ1BeRfHEUj18bB3gDM04xc9Am7e', '083844984836', '7d9fb772bade721dff4e8457dda17940'),
('E6679845', 'Dwi Rifky N', 'Bekasi', 'DwiRifky@gmail.com', '$2y$10$sCbmmu0ZOmXOZuMNAopJWe.LBLjixqYt0HqYMCOZRXyjmGGnQQKLe', '08976576768', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_handphone`, `vkey`, `token`) VALUES
('5fd1f264e788a', 'Dwi Rifki Novianto', 'dwirifkinovianto10@gmail.com', '$2y$10$Sp7ZIsrZMiHg6i1DRIrMFerKR2YuhKRkuxqFQyrHfAXof3yqdzGBy', '083872523688', 'd30387c3809e82e526651313b1184781', 0),
('5fd5d0da6946e', 'Hendy setiawan', 'hendystyawan74@gmail.com', '$2y$10$195.CmRd29us25uRrpWoJ.q89q9OBjTcSPhvD5Yj7IaXQf5f7dZHS', '083848939627', 'aec3243f8dad30889c81944eae34b67f', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kos_kosan`
--
ALTER TABLE `kos_kosan`
  ADD PRIMARY KEY (`id_kos`),
  ADD KEY `kos_kosan_fk0` (`id_pemilik`);

--
-- Indeks untuk tabel `pemilik_kos`
--
ALTER TABLE `pemilik_kos`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kos_kosan`
--
ALTER TABLE `kos_kosan`
  ADD CONSTRAINT `kos_kosan_fk0` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik_kos` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
