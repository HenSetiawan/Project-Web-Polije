-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 03:42 PM
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

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_admin`, `judul`, `tulisan`, `foto`, `tanggal`) VALUES
('531610029786', 'E41191280', 'Apa itu HTML', '<h2 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17);\"><span id=\"Apa_Itu_HTML_dan_Fungsinya\" style=\"box-sizing: inherit;\"><font size=\"5\">Pengertian HTML</font></span></h2><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">&nbsp;</span>HTML adalah Hypertext Markup Languange. HTML merupakan bahasa mark up yang mudah untuk dipahami oleh pengguna. HTML dapat memudahkan user pemula ataupun developer dalam memformat, menyusun, serta mengorganisir suatu dokumen secara online menggunakan program Microsoft Word.</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px;\">HTML berfungsi untuk memudahkan pengguna saat mengelola atau mengatur sebuah data dalam bentuk dokumen pada website. Sehingga menghasilkan dokumen yang menarik dan mudah dibaca oleh seluruh pengguna internet di seluruh dunia. HTML mempunyai kelebihan dari bahasa yang digunakan. Bahasa mark up untuk HTML mempunyai banyak sumber dan luas serta konsisten.</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px;\">HTML dapat dijalankan secara alami pada setiap website. HTML juga mempunyai learning curve yang lebih mudah serta&nbsp;<em style=\"box-sizing: inherit;\">open source</em>&nbsp;yang dapat dijalankan dengan gratis. Selain itu, HTML pun mempunyai standar website yang resmi oleh World Wide Web Consortium pada maintain. Serta mudah diintegrasikan dengan PHP, Node.js bahkan hingga bahasa backend.</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px;\">HTML mempunyai fitur yang tidak bisa digunakan secara logic. Sehingga halaman website harus dipisahkan meski mempunyai elemen yang sama. Saat melakukan eksekusi, browser juga kadang tidak bisa diprediksi. Sehingga browser tidak bisa render yang lebih baru. Namun, Anda masih bisa menggunakan HTML sesuai kebutuhan.</p>', '844436OIP.jfif', '12021-01-07 21:29:08'),
('701610029208', 'E41191280', 'What is XAMPP and Maria DB', '<h2 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17); text-align: justify;\"><span id=\"Pengertian_XAMPP\" style=\"box-sizing: inherit;\"><font size=\"5\">Pengertian XAMPP</font></span></h2><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">XAMPP adalah sebuah paket perangkat lunak (software) komputer yang sistem penamaannya diambil dari akronim kata Apache, MySQL (dulu) / MariaDB (sekarang), PHP, dan Perl. Sementara imbuhan huruf “X” yang terdapat pada awal kata berasal dari istilah&nbsp;<em style=\"box-sizing: inherit;\">cross platform</em>&nbsp;sebagai simbol bahwa aplikasi ini bisa dijalankan di empat sistem operasi berbeda, seperti OS Linux, OS Windows, Mac OS, dan juga Solaris.</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px;\">Sejarah mencatat, software XAMPP pertama kali dikembangkan oleh tim proyek bernama Apache Friends dan sampai saat ini sudah masuk dalam rilis versi&nbsp;<span style=\"box-sizing: inherit; font-weight: bolder;\">7.3.9&nbsp;</span>yang bisa didapatkan secara gratis dengan label GNU (General Public License).</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Jika dijabarkan secara gamblang, masing-masing huruf yang ada di dalam nama XAMPP menurut para ahli memiliki arti sebagai berikut ini:</p><h3 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17); text-align: justify;\"><span id=\"X_Cross_Platform\" style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">X = Cross Platform</span></span></h3><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Merupakan kode penanda untuk software cross platform atau yang bisa berjalan di banyak sistem operasi. Jadi, ada XAMPP untuk Windows, xampp for mac, dan untuk Linux. Semua itu bersifat free download xampp.</p><h3 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17); text-align: justify;\"><span id=\"A_Apache\" style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">A = Apache</span></span></h3><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Apache adalah aplikasi web server yang bersifat gratis dan bisa dikembangkan oleh banyak orang (open source).</p><h3 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17); text-align: justify;\"><span id=\"M_MySQL_MariaDB\" style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">M = MySQL / MariaDB</span></span></h3><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">MySQL atau MariaDB merupakan aplikasi database server yang dikembangkan oleh orang yang sama. MySQL berperan dalam mengolah, mengedit, dan menghapus daftar melalui database.</p><h3 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17); text-align: justify;\"><span id=\"P_PHP\" style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">P = PHP</span></span></h3><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Huruf “P” yang pertama dari akronim kata XAMPP adalah inisial untuk menunjukkan eksistensi bahasa pemrograman PHP. Bahasa pemrograman ini biasanya digunakan untuk membuat website dinamis, contohnya dalam website berbasis CMS WordPress.</p><h3 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17); text-align: justify;\"><span id=\"P_Perl\" style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">P = Perl</span></span></h3><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Sementara itu, untuk huruf P selanjutnya merupakan singkatan dari bahasa pemrograman Perl yang kerap digunakan untuk memenuhi berbagai macam kebutuhan. Perl ini bisa berjalan di dalam banyak sistem operasi sehingga sangat fleksibel dan banyak digunakan.</p><h2 style=\"box-sizing: inherit; margin-bottom: 1.5rem; font-family: &quot;Source Sans Pro&quot;; font-weight: 700; line-height: 1.1; color: rgb(17, 17, 17); text-align: justify;\"><span id=\"Fungsi_XAMPP\" style=\"box-sizing: inherit;\">Fungsi XAMPP</span></h2><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Program aplikasi XAMPP berfungsi sebagai server lokal untuk mengampu berbagai jenis data website yang sedang dalam proses pengembangan.</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Dalam prakteknya, XAMPP bisa digunakan untuk menguji kinerja fitur ataupun menampilkan konten yang ada didalam website kepada orang lain tanpa harus terkoneksi dengan internet, cukup akses melalui Xampp control panel, atau istilahnya website offline.</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">XAMPP bekerja secara offline layaknya web hosting biasa namun tidak bisa diakses oleh banyak orang.</p><p style=\"box-sizing: inherit; margin-bottom: 2rem; color: rgb(34, 34, 34); font-family: Merriweather; font-size: 19.2px; text-align: justify;\">Maka dari itu, XAMPP biasanya banyak digunakan oleh para mahasiswa maupun pelajar untuk melihat hasil desain website sebelum akhirnya dibuat online menggunakan web hosting yang biasa dijual dipasaran.</p>', '797758xampp-logo.jpg', '12021-01-07 21:18:01');

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

--
-- Dumping data for table `kos_kosan`
--

INSERT INTO `kos_kosan` (`id_kos`, `id_pemilik`, `nama_kos`, `alamat`, `jenis`, `harga`, `gambar_1`, `gambar_2`, `gambar_3`, `deskripsi`, `fas1`, `fas2`, `fas3`, `fas4`) VALUES
('631610030012', 'E6679845', 'Melati dan Mawar', 'Tangerang', 'campur', 1000000, '3780893.jpg', '6108162.jpg', '3157241.jpg', 'Seiring berjalannya waktu dan berubahnya zaman, sekarang khalayak umum di Indonesia menyebut istilah \"in de kost\" dengan menyingkatnya menjadi \"kost\" saja. Di mana-mana, terutama di berbagai daerah di Indonesia, sentra pendidikan tumbuh berjamuran, terutama akademi dan universitas swasta. Hal ini diikuti dengan bertambahnya jumlah rumah-rumah atau bangunan khusus yang menawarkan jasa \"kost\" bagi para pelajar/mahasiswa yang membutuhkannya. Jasa ini tidaklah gratis, yaitu dengan melibatkan sejumlah pembayaran tertentu untuk setiap periode, yang biasanya dihitung per bulan atau per minggu. Hal ini berbeda dengan kontrak rumah, karena umumnya \"kost\" hanya menawarkan sebuah kamar untuk ditinggali. Setelah melakukan transaksi pembayaran barulah seseorang dapat menumpang hidup di tempat yang dia inginkan.', '1', '1', '1', '1');

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
('589385839634', 'Ardan Venora', 'Bondowoso', 'ardanvenora@gmail.com', '$2y$10$W7vjnrDQGR3D0IlUcTjbYuM0nPEJZHD50s/B4AKScgPtxR2xQWp4q', '08976576768', 'e72566578c93c3a4e18bb44bebc941ba'),
('E41191280', 'Hendy setiawan', 'Ngawi', 'hendystyawan74@gmail.com', '$2y$10$a/L0C5kxqyhXdI.v3F1NJeVx6fZ1BeRfHEUj18bB3gDM04xc9Am7e', '083844984836', '7d9fb772bade721dff4e8457dda17940'),
('E6679845', 'Dwi Rifki Novianto', 'Tangerang', 'remanagedata@gmail.com', '$2y$10$HeEayw4kyUA/PnjE/Zr82.WS6asreoFSOsa5HQDKO5WelgMj2Eruq', '0812345678910', '0f7ac7f87a977f1590da571e4f2603d3');

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
