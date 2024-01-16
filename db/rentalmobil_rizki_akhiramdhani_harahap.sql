-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2024 pada 15.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_rizki_akhiramdhani_harahap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil_rizki_akhiramdhani_harahap`
--

CREATE TABLE `tbl_mobil_rizki_akhiramdhani_harahap` (
  `no_plat_rizki_akhiramdhani_harahap` varchar(10) NOT NULL,
  `nama_mobil_rizki_akhiramdhani_harahap` varchar(25) NOT NULL,
  `brand_mobil_rizki_akhiramdhani_harahap` varchar(25) NOT NULL,
  `tipe_transmisi_rizki_akhiramdhani_harahap` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mobil_rizki_akhiramdhani_harahap`
--

INSERT INTO `tbl_mobil_rizki_akhiramdhani_harahap` (`no_plat_rizki_akhiramdhani_harahap`, `nama_mobil_rizki_akhiramdhani_harahap`, `brand_mobil_rizki_akhiramdhani_harahap`, `tipe_transmisi_rizki_akhiramdhani_harahap`) VALUES
('Z1234ML', 'Supra', 'DLL', 'Manual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan_rizki_akhiramdhani_harahap`
--

CREATE TABLE `tbl_pelanggan_rizki_akhiramdhani_harahap` (
  `nik_ktp_rizki_akhiramdhani_harahap` varchar(16) NOT NULL,
  `nama_rizki_akhiramdhani_harahap` varchar(35) NOT NULL,
  `no_hp_rizki_akhiramdhani_harahap` varchar(15) NOT NULL,
  `alamat_rizki_akhiramdhani_harahap` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pelanggan_rizki_akhiramdhani_harahap`
--

INSERT INTO `tbl_pelanggan_rizki_akhiramdhani_harahap` (`nik_ktp_rizki_akhiramdhani_harahap`, `nama_rizki_akhiramdhani_harahap`, `no_hp_rizki_akhiramdhani_harahap`, `alamat_rizki_akhiramdhani_harahap`) VALUES
('3206070512020001', 'Rizki Akhiramdhani Harahap', '085559207029', 'Kp. Cadasngampar RT 006/002 Desa Parungponten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rental_rizki_akhiramdhani_harahap`
--

CREATE TABLE `tbl_rental_rizki_akhiramdhani_harahap` (
  `no_trx_rizki_akhiramdhani_harahap` varchar(20) NOT NULL,
  `nik_ktp_rizki_akhiramdhani_harahap` varchar(16) NOT NULL,
  `no_plat_rizki_akhiramdhani_harahap` varchar(10) NOT NULL,
  `tgl_rental_rizki_akhiramdhani_harahap` date NOT NULL,
  `jam_rental_rizki_akhiramdhani_harahap` time NOT NULL,
  `harga_rizki_akhiramdhani_harahap` int(11) NOT NULL,
  `lama_rizki_akhiramdhani_harahap` int(11) NOT NULL,
  `total_bayar_rizki_akhiramdhani_harahap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_rental_rizki_akhiramdhani_harahap`
--

INSERT INTO `tbl_rental_rizki_akhiramdhani_harahap` (`no_trx_rizki_akhiramdhani_harahap`, `nik_ktp_rizki_akhiramdhani_harahap`, `no_plat_rizki_akhiramdhani_harahap`, `tgl_rental_rizki_akhiramdhani_harahap`, `jam_rental_rizki_akhiramdhani_harahap`, `harga_rizki_akhiramdhani_harahap`, `lama_rizki_akhiramdhani_harahap`, `total_bayar_rizki_akhiramdhani_harahap`) VALUES
('TRX-20240109033953', '', 'Z1234ML', '1212-12-12', '21:21:00', 121, 12, 1452);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_rizki_akhiramdhani_harahap`
--

CREATE TABLE `tbl_user_rizki_akhiramdhani_harahap` (
  `id_user_rizki_akhiramdhani_harahap` int(11) NOT NULL,
  `username_rizki_akhiramdhani_harahap` varchar(35) NOT NULL,
  `password_rizki_akhiramdhani_harahap` varchar(100) NOT NULL,
  `nama_lengkap_rizki_akhiramdhani_harahap` varchar(35) NOT NULL,
  `level_rizki_akhiramdhani_harahap` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user_rizki_akhiramdhani_harahap`
--

INSERT INTO `tbl_user_rizki_akhiramdhani_harahap` (`id_user_rizki_akhiramdhani_harahap`, `username_rizki_akhiramdhani_harahap`, `password_rizki_akhiramdhani_harahap`, `nama_lengkap_rizki_akhiramdhani_harahap`, `level_rizki_akhiramdhani_harahap`) VALUES
(1, 'rizki', '202cb962ac59075b964b07152d234b70', 'Rizki Akhiramdhani Harahap', 'admin'),
(2, 'kania', '250cf8b51c773f3f8dc8b4be867a9a02', 'Kania Nanda Oktaviani', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mobil_rizki_akhiramdhani_harahap`
--
ALTER TABLE `tbl_mobil_rizki_akhiramdhani_harahap`
  ADD PRIMARY KEY (`no_plat_rizki_akhiramdhani_harahap`);

--
-- Indeks untuk tabel `tbl_pelanggan_rizki_akhiramdhani_harahap`
--
ALTER TABLE `tbl_pelanggan_rizki_akhiramdhani_harahap`
  ADD PRIMARY KEY (`nik_ktp_rizki_akhiramdhani_harahap`);

--
-- Indeks untuk tabel `tbl_rental_rizki_akhiramdhani_harahap`
--
ALTER TABLE `tbl_rental_rizki_akhiramdhani_harahap`
  ADD PRIMARY KEY (`no_trx_rizki_akhiramdhani_harahap`);

--
-- Indeks untuk tabel `tbl_user_rizki_akhiramdhani_harahap`
--
ALTER TABLE `tbl_user_rizki_akhiramdhani_harahap`
  ADD PRIMARY KEY (`id_user_rizki_akhiramdhani_harahap`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user_rizki_akhiramdhani_harahap`
--
ALTER TABLE `tbl_user_rizki_akhiramdhani_harahap`
  MODIFY `id_user_rizki_akhiramdhani_harahap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
