-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubeswebpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan_produk`
--

CREATE TABLE `pesan_produk` (
  `id_pesanproduk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_produk` varchar(256) NOT NULL,
  `jumlahpesanan` int(11) NOT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_produk`
--

INSERT INTO `pesan_produk` (`id_pesanproduk`, `id_produk`, `id_user`, `nama_produk`, `jumlahpesanan`, `alamat`) VALUES
(1, 1, 1, 'SkinSaver Gentle Skin Cleanser', 1, 'VILA NUSA INDAH 2 BLOK CC3/10 RT.05/RW.28 BOJONG KULUR GUNUNG PUTRI BOGOR KABUPATEN BOGOR JAWA BARAT'),
(2, 2, 5, 'SkinSaver Cleanser', 1, 'VILA NUSA INDAH 2 BLOK CC3/10 RT.05/RW.28 BOJONG KULUR GUNUNG PUTRI BOGOR KABUPATEN BOGOR JAWA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_service`
--

CREATE TABLE `pesan_service` (
  `id_pesanservice` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(256) NOT NULL,
  `nama_pasien` varchar(256) NOT NULL,
  `nama_service` varchar(256) NOT NULL,
  `bookingdate` date NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_service`
--

INSERT INTO `pesan_service` (`id_pesanservice`, `id_user`, `id_service`, `id_dokter`, `nama_dokter`, `nama_pasien`, `nama_service`, `bookingdate`, `keluhan`, `harga`) VALUES
(1, 1, 1, 5, 'Sukijo', 'Faishal Raihan', 'pijatt', '2011-08-19', 'mantap', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(256) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` float NOT NULL,
  `produk_img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori`, `deskripsi`, `harga`, `produk_img`) VALUES
(1, 'SkinSaver Gentle Skin Cleanser', 'Cleanser', 'Pembersih kami yang paling laris dan disukai banyak orang, formulanya tanpa menggunakan bahan yang tidak penting dan efektif. Membersihkan sekaligus melembabkan', 75000, 'facewash1.png'),
(2, 'SkinSaver Cleanser with 2% Benzoyl Peroxide', 'Cleanser', 'Dengan 2% Benzoyl Peroxide, facewash ini dapat membantu untuk mengurangi peradangan, membunuh bakteri penyebab jerawat, dan membersihkan tanpa membuat kering', 80000, 'facewash2.png'),
(3, 'SkinSaver LightDay Moisturizer with SPF', 'Moisturizer', 'Melembabkan kulit sekaligus memberikan proteksi terhadap sinar matahari terhadap kulit dari sinar UVA/UVB dengan SPF50+/PA+++', 100000, 'moist1.png'),
(4, 'SkinSaver Barrier Moisturizer with Ceramide', 'Moisturizer', 'Melembabkan kulit sekaligus memperbaiki skin barrier kulit yang rusak dan menjaganya tetap sehat dengan kandungan Ceramide', 12000, 'moist2.png'),
(5, 'SkinSaver Acne Spot treatment', 'Acne Spot', 'Spot Treatment terbaik yang mengandung 2.5% Benzoyl Peroxide, yang dapat membunuh bakteri penyebab jerawat, sekaligus membuka pori-pori kulit yang tertutup', 60000, 'acnespot.png'),
(6, 'SkinSaver Niacinamide and Zink Serum', 'Serum', 'Serum yang mengandung Niacinamide 10% dan Zinc 1%, membantu untuk mengurangi dark spot, mengurangi kerutan, meratakan warna kulit, dan memperbaiki tesktur kulit anda', 140000, 'serum.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(256) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `nama_service`, `deskripsi`, `harga`) VALUES
(1, 'Pembersihan jerawat', 'mantap jiwa!!!!', 80000),
(2, 'Buka jerawat', 'sangan mantul', 100000),
(3, 'Poles wajah', 'menjadikan wajah anda cantik dan tampan', 200000),
(4, 'Facial', 'menjadikan wajah anda cantik dan tampan', 150000),
(5, 'Pijat wajah', 'sangat nyaman dan nikmat', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'Faishal Raihan', 'redxx', 'faishalraihan73@gmail.com', '$2y$10$X6c5LBy0TxMn/TVIq3UvAO65X/QeEXxC73OLwfSqRq.rmcVPm4u2q', 2),
(3, 'Panjul Jukipli', 'Panjulll', 'panjul@gmail.com', '$2y$10$JifpR/ioi.cdOSyAWlduRukcc/Y616B/gz7m60oRBTNxgufr2qA.m', 2),
(5, 'Sukijo', 'sukijo', 'sukijo@gmail.com', '$2y$10$2WVKFi7iKtVqno2OreuULucE09RsMO9RW7YYQC2sYMPR0C9JUA9K2', 1),
(7, 'admin', 'admin', 'admin@gmail.com', '$2y$10$GJIepy6fxxMlNM9FbmyzZ.9UsT/Rt8nnL6qQEJi6b4nMFBPYnY/ay', 3),
(8, 'Nanang', 'Nanang', 'Nanang@gmail.com', '$2y$10$t5FbwbbEb4YUIyI2PCkYXejYvW42zbiWqHTEqxLO9m.N6paVY1DUW', 1),
(9, 'Herman', 'Herman', 'herman@gmail.com', '$2y$10$JjVfrV4iO435qvK/0dB6LOfQOXpY7fJM6qevsowO95t47pDKwImdO', 1),
(10, 'Dedi', 'Dedi', 'dedi@gmail.com', '$2y$10$ax/Cfq3Tkj7xv7bofk1jyezAJYE4Zv1aT5Eagg6xPF3f26QxSetjC', 1),
(11, 'Paijo', 'Paijo', 'Paijo@gmail.com', '$2y$10$vmFPV9LY6byTGo/FoTfs1e54v4gsuCv7XRUqUR/BJ1XbsPclwa.Ay', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Dokter'),
(2, 'Customer'),
(3, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan_produk`
--
ALTER TABLE `pesan_produk`
  ADD PRIMARY KEY (`id_pesanproduk`),
  ADD KEY `fk_pesanproduk1` (`id_produk`),
  ADD KEY `fk_pesanproduk2` (`id_user`);

--
-- Indexes for table `pesan_service`
--
ALTER TABLE `pesan_service`
  ADD PRIMARY KEY (`id_pesanservice`),
  ADD KEY `fk_pesanservice1` (`id_service`),
  ADD KEY `fk_pesanservice2` (`id_user`),
  ADD KEY `fk_pesanservice3` (`id_dokter`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user1` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan_produk`
--
ALTER TABLE `pesan_produk`
  MODIFY `id_pesanproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan_service`
--
ALTER TABLE `pesan_service`
  MODIFY `id_pesanservice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan_produk`
--
ALTER TABLE `pesan_produk`
  ADD CONSTRAINT `fk_pesanproduk1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pesanproduk2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan_service`
--
ALTER TABLE `pesan_service`
  ADD CONSTRAINT `fk_pesanservice1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pesanservice2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pesanservice3` FOREIGN KEY (`id_dokter`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
