-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2022 pada 09.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databases`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
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
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`nama`, `email`, `no_hp`, `alamat`, `pesanan`, `pembayaran`, `warna`, `element`, `text_`, `konsep`, `gambar`, `id`) VALUES
('Andi muhammad naufal', 'andi.arfandiahmad@gm', 87655432, 'asdfbfbg', 'mediapromosi', 'Virtual Account', 'werty', 'sddfg', 'sddftt', 'sdfg', '72-jbnn.jpg', 4),
('asdf', 'aaaa', 988998, 'asdf', 'mediapromosi', 'Virtual Account', 'ascfff', 'sssdss', 'ssssss', 'werbrg', '383-6.jpg', 5),
('sdfg', 'ertgtyh', 765432, 'werty', 'mediapromosi', 'Transfer Bank', 'sdfghj', 'dfghj', 'dghnh', 'efghnmu', '699-Gulai1.jpg', 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form`
--
ALTER TABLE `form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
