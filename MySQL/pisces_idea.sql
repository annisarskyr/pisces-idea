-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 05:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pisces_idea`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `pesanan` varchar(20) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `element` varchar(20) NOT NULL,
  `text_` varchar(30) NOT NULL,
  `konsep` varchar(30) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`nama`, `email`, `no_hp`, `alamat`, `pesanan`, `pembayaran`, `warna`, `element`, `text_`, `konsep`, `gambar`, `id`) VALUES
('Andi muhammad naufal', 'andi.arfandiahmad@gm', 87655432, 'asdfbfbg', 'mediapromosi', 'Virtual Account', 'werty', 'sddfg', 'sddftt', 'sdfg', '72-jbnn.jpg', 4),
('Annisa Resky', 'annisareskyr95@gmail', 2147483647, 'Jl. Moncongloe', 'produk', 'Virtual Account', 'pink', 'star', 'star', 'str', '506-360_F_168860131_', 8),
('Ananda Putri', 'nandaputri@gmail.com', 2147483647, 'Jl. Moncongloe', 'mediapromosi', 'Virtual Account', 'Merah', 'Bunga', 'Design', 'Elegant', '489-images.jpg', 9),
('nisuy resky', 'annisareskyr95@gmail', 2147483647, 'Jl. Moncongloe', 'produk', 'Transfer Bank', 'Merah', 'star', 'Design', 'Elegant', '826-360_F_168860131_', 10);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `judul`, `kategori`, `gambar`) VALUES
(1, 'Pink Package Box (Outside)', 'Desain Kemasan', 'pinkpackage1.jpg'),
(2, 'Pink-Themed Microblog', 'Desain Media Promosi', 'mock1.jpg'),
(3, 'Pink Package Box (Inside)', 'Desain Kemasan', 'pinkpackage2.jpg'),
(5, 'Blue Package (Outside)', 'Desain Kemasan', 'bluepackage1.jpg'),
(6, 'Blue Package (Inside)', 'Desain Kemasan', 'bluepackage2.jpg'),
(8, 'Blue-Themed Microblog', 'Desain Media Promosi', 'mock3.jpg'),
(9, 'Green Package Box (Outside)', 'Desain Kemasan', 'greenpackage1.jpg'),
(10, 'Pizza Shop Microblog', 'Desain Media Promosi', 'mock2.jpg'),
(11, 'Green Package (Inside)', 'Desain Media Promosi', 'greenpackage2.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
