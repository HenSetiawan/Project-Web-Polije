-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Des 2020 pada 10.19
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
-- Struktur dari tabel `kos_kosan`
--

CREATE TABLE `kos_kosan` (
  `id_kos` varchar(255) NOT NULL,
  `id_pemilik` varchar(255) NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilik_kos`
--

INSERT INTO `pemilik_kos` (`id_pemilik`, `nama`, `alamat`, `email`, `password`, `no_hp`) VALUES
('001', 'Hendy Setiawan', 'Ngawi', 'Hendy@gmail.com', 'admin', '083848939627');

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
