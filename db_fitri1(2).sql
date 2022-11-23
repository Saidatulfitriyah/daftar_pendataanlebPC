-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2022 pada 05.06
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fitri1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fitri9nov`
--

CREATE TABLE `tb_fitri9nov` (
  `id` int(12) NOT NULL,
  `no_seri` int(30) NOT NULL,
  `merek` enum('asus','lenovo','hp','acer') NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fitri9nov`
--

INSERT INTO `tb_fitri9nov` (`id`, `no_seri`, `merek`, `jumlah`) VALUES
(60, 123, 'asus', 657),
(61, 4, 'acer', 1343),
(62, 123, 'asus', 456),
(63, 9084, 'acer', 580),
(64, 874, 'lenovo', 342),
(65, 1234, 'lenovo', 3263),
(66, 867, 'hp', 6476),
(67, 443, '', 86987);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` int(100) NOT NULL,
  `umur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `email`, `nama_lengkap`, `username`, `password`, `umur`) VALUES
(1, 'saya@gmail.com', 'saya', 'sayung', 1234, 20),
(2, 'saya@gmail.com', '', 'Sayung', 1234, 20),
(3, 'saya@gmail.com', '', 'Sayung', 1234, 20),
(4, 'saya@gmail.com', '', 'Sayung', 1234, 20),
(5, 'saya@gmail.com', '', 'Sayung', 1234, 20),
(6, 'saya@gmail.com', '', 'Sayung', 1234, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `int` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`int`, `username`, `password`) VALUES
(1, 'Sayung', '1234'),
(2, 'Demak', '0101'),
(3, 'fitri', '151105');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_fitri9nov`
--
ALTER TABLE `tb_fitri9nov`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`int`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_fitri9nov`
--
ALTER TABLE `tb_fitri9nov`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
