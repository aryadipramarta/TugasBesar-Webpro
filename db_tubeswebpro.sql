-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 01:13 PM
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
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(5) NOT NULL,
  `tipe_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `tipe_produk`, `nama_produk`, `harga`, `deskripsi`) VALUES
(1, 'Facewash', 'SkinSaver Gentle Skin Cleanser', 75000, 'produk ini adalah produk andalan kami yang terbukti sangat cocok untuk membersihkan jerawat'),
(2, 'Facewash', 'SkinSaver Cleanser', 80000, 'produk yang sangat baik mengandung 2% Benzoyl Peroxide dan eskrak buah lainnya'),
(3, 'Moisturizer', 'SkinSaver Barrier Moisturizer', 100000, 'melembabkan kulit sangat cocok untuk kulit berjerawat mengandung Ceramide'),
(4, 'Moisturizer', 'SkinSaver LightDay Moisturizer', 120000, 'melembabkan kulit sangat baik, cocok segala jenis kulit mengandung SPF 50+/PA++++'),
(5, 'Acne Spot', 'SkinSaver Acne Spot treatment', 60000, 'produk terbaik untuk jerawat dengan 2.5% Benzoyl Peroxide'),
(6, 'Serum', 'SkinSaver Niacinamide and Zink Serum', 140000, 'serum terbaik untuk jerawat anda, mengandung Niacinamide 10% and Zink 1%');

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
(2, 'Saipul Jamil', 'haphaphap', 'saipulhap@gmail.com', '$2y$10$evOcqxEDUYGVzInIl8wrLeVG2ZmU6O628/5M1qoswds76JjcadGGm', 2),
(3, 'Panjul Jukipli', 'Panjulll', 'panjul@gmail.com', '$2y$10$JifpR/ioi.cdOSyAWlduRukcc/Y616B/gz7m60oRBTNxgufr2qA.m', 2);

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
(2, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
