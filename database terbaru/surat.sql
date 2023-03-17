-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2023 pada 04.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_skd`
--

CREATE TABLE `data_request_skd` (
  `id_request_skd` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(22, '6301090912890001', '2023-02-20 12:13:52', '6301090912890001_.jpg', '6301090912890001_.jpg', 'senggol dong', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2023-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_skp`
--

CREATE TABLE `data_request_skp` (
  `id_request_skp` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'LAINNYA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_skp`
--

INSERT INTO `data_request_skp` (`id_request_skp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(11, '6301090912890001', '2023-02-20 12:12:46', '6301090912890001_.jpg', '6301090912890001_.jpg', 'pamit darinya', 'Surat dicetak, bisa diambil!', 'LAINNYA', 3, '2023-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_sktm`
--

CREATE TABLE `data_request_sktm` (
  `id_request_sktm` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'TIDAK MAMPU',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`) VALUES
(59, '6301090912890001', '2023-02-15 15:19:21', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Untuk pencairan dana di sekola', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2023-02-16'),
(60, '6301090912890001', '2023-02-15 15:41:26', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Untuk pencairan dana di sekola', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2025-02-20'),
(61, '6301090912890001', '2023-02-16 02:51:41', '6301090912890001_.jpg', '6301090912890001_.jpg', 'kgyfyf', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-02-20'),
(62, '6301090912890001', '2023-02-20 12:10:17', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Untuk pencairan dana di sekola', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2023-02-20'),
(63, '6301090912890001', '2023-02-21 06:08:51', '6301090912890001_.jpg', '6301090912890001_.jpg', 'kshugsgs', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '0000-00-00'),
(64, '6301090912890001', '2023-02-22 05:47:04', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Untuk pencairan dana di sekola', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '0000-00-00'),
(65, '6301090912890001', '2023-02-22 06:11:51', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Untuk pencairan dana di sekola', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '0000-00-00'),
(66, '6301090912890001', '2023-02-22 06:12:22', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Untuk pencairan dana di sekola', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '0000-00-00'),
(67, '6301090912890001', '2023-02-22 06:22:11', '6301090912890001_.jpg', '6301090912890001_.jpg', 'k;ajjdkk', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2023-02-22'),
(68, '6301090912890001', '2023-02-22 06:22:53', '6301090912890001_.jpg', '6301090912890001_.jpg', 'kwkwkwkwk', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2023-02-22'),
(69, '6301090912890001', '2023-03-07 21:00:37', '6301090912890001_.jpg', '6301090912890001_.jpg', 'alppakaakak', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2023-03-08'),
(70, '6301090912890001', '2023-03-08 02:30:25', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Bpjs', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2023-03-08'),
(71, '6301090912890001', '2023-03-16 00:34:44', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Untuk pencairan dana di sekola', 'TIDAK MAMPU', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_sktu`
--

CREATE TABLE `data_request_sktu` (
  `id_request_sktu` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh staff',
  `request` varchar(20) NOT NULL DEFAULT 'TEMPAT USAHA',
  `status` int(11) NOT NULL,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_sktu`
--

INSERT INTO `data_request_sktu` (`id_request_sktu`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(62, '6301090912890001', '2023-02-20 06:42:59', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Warung Sembako', 'hvgfufifyfyfy', 'Surat dicetak, bisa diambil!', 'TEMPAT USAHA', 3, '2023-02-20'),
(63, '6301090912890001', '2023-02-20 12:12:10', '6301090912890001_.jpg', '6301090912890001_.jpg', 'kopi', 'Untuk pencairan dana', 'Surat dicetak, bisa diambil!', 'TEMPAT USAHA', 3, '2023-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_sku`
--

CREATE TABLE `data_request_sku` (
  `id_request_sku` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(12, '6301090912890001', '2023-02-15 16:14:57', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Warung Sembako', 'Untuk pencairan dana di sekola', '', 'USAHA', 3, '0000-00-00'),
(13, '6301090912890001', '2023-02-16 03:00:17', '6301090912890001_.jpg', '6301090912890001_.jpg', 'jftud', 'ppjufy', 'Surat dicetak, bisa diambil!', 'USAHA', 3, '2023-01-10'),
(14, '6301090912890001', '2023-02-20 12:11:00', '6301090912890001_.jpg', '6301090912890001_.jpg', 'kopi', 'Untuk pencairan dana di sekola', 'Surat dicetak, bisa diambil!', 'USAHA', 3, '2023-02-20'),
(15, '6301090912890001', '2023-02-22 08:23:15', '6301090912890001_.jpg', '6301090912890001_.jpg', 'Warung Sembako', 'Pinjaman Bank', 'Data sedang diperiksa oleh Staf', 'USAHA', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `nik` varchar(16) NOT NULL,
  `password` varchar(225) NOT NULL,
  `hak_akses` varchar(225) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `status_warga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `status_warga`) VALUES
('1', '1', 'Kepala Desa', 'coba', '2023-03-15', 'coba', 'Laki-Laki', '', 'coba', '', 'Kerja'),
('2', '2', 'Staf', 'coba', '2023-03-15', 'coba', 'Perempuan', '', 'coba', '', 'Kerja'),
('6301090912890001', '12345', 'Pemohon', 'Sarwo Edy', '1989-12-09', 'Durian Bungkuk', 'Laki-Laki', 'Islam', '    Desa Durian Bungkuk Rt O7 RW 0 Kec . Batu Ampar Kab. Tanah Laut Kalimantan Selatan', '082251611536', 'Kerja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD PRIMARY KEY (`id_request_skp`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD PRIMARY KEY (`id_request_sktm`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_sktu`
--
ALTER TABLE `data_request_sktu`
  ADD PRIMARY KEY (`id_request_sktu`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  MODIFY `id_request_skp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `data_request_sktu`
--
ALTER TABLE `data_request_sktu`
  MODIFY `id_request_sktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD CONSTRAINT `data_request_skp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD CONSTRAINT `data_request_sktm_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_sktu`
--
ALTER TABLE `data_request_sktu`
  ADD CONSTRAINT `data_request_sktu_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
