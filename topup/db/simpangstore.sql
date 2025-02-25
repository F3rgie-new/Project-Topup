-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2025 pada 12.15
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpangstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `free_fire`
--

CREATE TABLE `free_fire` (
  `resi` varchar(100) NOT NULL,
  `id` varchar(13) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `free_fire`
--

INSERT INTO `free_fire` (`resi`, `id`, `nominal`, `pembayaran`, `jumlah`, `totalHarga`) VALUES
('SS22183880', '12344', '100', 'Qris', '1', 49400),
('SS22183881', '12344', '10', 'Qris', '10', 9306),
('SS22183882', '12344', '10', 'Qris', '10', 52173),
('SS22183883', '12344', '10', 'Qris', '10', 52173),
('SS22183884', '12344', '10', 'Qris', '10', 52173),
('SS22183885', '', '', '', '', 413),
('SS22183886', '', '', '', '', 413),
('SS22183887', '123', '150', 'Dana', '4', 222093),
('SS22183888', '123', '150', 'Dana', '4', 222093);

-- --------------------------------------------------------

--
-- Struktur dari tabel `honorofkings`
--

CREATE TABLE `honorofkings` (
  `resi` varchar(15) NOT NULL,
  `id` varchar(5) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `honorofkings`
--

INSERT INTO `honorofkings` (`resi`, `id`, `nominal`, `pembayaran`, `jumlah`, `totalHarga`) VALUES
('SS44383889', '123', '100', 'Dana', '1', 49400);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobilelegend`
--

CREATE TABLE `mobilelegend` (
  `resi` varchar(10) NOT NULL,
  `id` varchar(13) NOT NULL,
  `id_server` varchar(10) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobilelegend`
--

INSERT INTO `mobilelegend` (`resi`, `id`, `id_server`, `nominal`, `pembayaran`, `jumlah`, `totalHarga`) VALUES
('SS33283880', '3242', '2342', '100', 'Qris', '4', 196361),
('SS33283881', '3242', '2342', '100', 'Qris', '4', 196361);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `free_fire`
--
ALTER TABLE `free_fire`
  ADD PRIMARY KEY (`resi`);

--
-- Indeks untuk tabel `honorofkings`
--
ALTER TABLE `honorofkings`
  ADD PRIMARY KEY (`resi`);

--
-- Indeks untuk tabel `mobilelegend`
--
ALTER TABLE `mobilelegend`
  ADD PRIMARY KEY (`resi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
