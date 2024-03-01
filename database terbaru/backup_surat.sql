-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 09 Jan 2024 pada 17.35
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backup_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_warga` varchar(30) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `status_hdk` varchar(30) NOT NULL,
  `pend_terakhir` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`nik`, `no_kk`, `nama`, `jekel`, `tanggal_lahir`, `tempat_lahir`, `telepon`, `gol_darah`, `agama`, `status_warga`, `status_perkawinan`, `status_hdk`, `pend_terakhir`, `alamat`, `pekerjaan`, `nama_ayah`, `nama_ibu`) VALUES
('009908', '', 'NJBKJBH', 'Laki-Laki', '2021-12-11', 'kjnkj', '', '', '', 'Kerja', '', '', '', 'kjnhkjn', '', '', ''),
('1', '', 'coba', 'Laki-Laki', '2021-10-20', 'coba', '', '', '', 'Kerja', '', '', '', 'coba', '', '', ''),
('1111111111111111', '', 'Fachri Shofiyyuddin Ahmad', 'Laki-Laki', '2021-10-17', 'Jakarta', '087897315639', '', 'Islam', 'Sekolah', '', '', '', '        Jakarta RT 01/RW 07', '', '', ''),
('1212', '', 'Burhan', 'Laki-Laki', '1999-12-12', 'Pringsewu', '1232343245', '', 'Islam', 'Kerja', '', '', '', '     Jl cengkeh Selatan II No 88.Perumnas Wayhalim', '', '', ''),
('12345678', '', 'Admin RT 1', 'Laki-Laki', '2024-01-06', 'Pringsewu', '', '', '', 'Sekolah', '', '', '', 'jl .jl muter 2', '', '', ''),
('1515', '5151', 'mancung', 'Laki-Laki', '2024-01-09', 'Pringsewu', '', 'O', 'Islam', '', 'Berkeluarga', 'anak', 'SMA/SEDERAJAT', 'jalan blong', 'pedagang', 'parjo', 'burjo'),
('2', '', 'coba', 'Perempuan', '2021-10-20', 'coba', '', '', '', 'Kerja', '', '', '', 'coba', '', '', ''),
('777', '', 'a', 'Laki-Laki', '2021-10-20', 'oke', '', '', '', 'Sekolah', '', '', '', 'x', '', '', ''),
('888', '', 'cobalagi', 'Perempuan', '2021-10-20', 'cobalagi', '', '', '', 'Sekolah', '', '', '', 'coba', '', '', ''),
('8923478923789489', '', 'coba', 'Laki-Laki', '2022-05-22', 'kudus', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_akta`
--

CREATE TABLE `data_request_akta` (
  `id_request_akta` int(11) NOT NULL,
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `scan_kk` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keperluan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'AKTA',
  `status` int(11) DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_kk`
--

CREATE TABLE `data_request_kk` (
  `id_request_kk` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'LAINNYA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_kk`
--

INSERT INTO `data_request_kk` (`id_request_kk`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(10, '1111111111111111', '2021-10-18 06:14:07', '1111111111111111_.jpg', '1111111111111111_.jpg', 'KTP Hilang', 'Surat dicetak, bisa diambil!', 'LAINNYA', 3, '2021-10-18'),
(11, '1212', '2023-12-11 14:58:43', '1212_.jpg', '1212_.jpg', 'aku pamit', 'Data sedang diperiksa oleh Staf', 'LAINNYA', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_ktp`
--

CREATE TABLE `data_request_ktp` (
  `id_request_ktp` int(11) NOT NULL,
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `scan_kk` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keperluan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'KTP',
  `status` varchar(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(21, '1111111111111111', '2021-10-18 06:46:28', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Administrasi Bank', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-10-18'),
(22, '1212', '2023-12-11 14:58:03', '1212_.jpg', '1212_.jpg', 'pindah', 'Data sedang diperiksa oleh Staf', 'DOMISILI', 1, '0000-00-00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`) VALUES
(50, '1111111111111111', '2021-10-17 10:06:35', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Beasiswa Sekolah', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-10-17'),
(53, '1212', '2023-12-11 14:57:13', '1212_.jpg', '1212_.jpg', 'pinjol', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2023-12-11');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(9, '1111111111111111', '2021-10-17 10:37:58', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Warung Kopi', 'Bantuan UMKM', 'Surat dicetak, bisa diambil!', 'USAHA', 3, '2021-10-17'),
(11, '1212', '2023-12-11 14:18:57', '1212_.jpg', '1212_.jpg', 'bumn', 'buka warung', 'Data sedang diperiksa oleh Staf', 'USAHA', 1, '0000-00-00');

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
  `status_warga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `status_warga`) VALUES
('009908', 'kjnkjn', 'Pemohon', 'NJBKJBH', '2021-12-11', 'kjnkj', 'Laki-Laki', '', 'kjnhkjn', 'Kerja'),
('1', '1', 'Lurah', 'coba', '2021-10-20', 'coba', 'Laki-Laki', '', 'coba', 'Kerja'),
('1111111111111111', '12345', 'Pemohon', 'Fachri Shofiyyuddin Ahmad', '2021-10-17', 'Jakarta', 'Laki-Laki', 'Islam', '        Jakarta RT 01/RW 07', 'Sekolah'),
('1212', '123', 'Pemohon', 'Burhan', '1999-12-12', 'Pringsewu', 'Laki-Laki', 'Islam', '     Jl cengkeh Selatan II No 88.Perumnas Wayhalim', 'Kerja'),
('12345678', '4', 'Admin', 'Admin RT 1', '2024-01-06', 'Pringsewu', 'Laki-Laki', '', 'jl .jl muter 2', 'Sekolah'),
('2', '2', 'Staf', 'coba', '2021-10-20', 'coba', 'Perempuan', '', 'coba', 'Kerja'),
('777', '12345', 'Pemohon', 'a', '2021-10-20', 'oke', 'Laki-Laki', '', 'x', 'Sekolah'),
('888', '12345', 'Pemohon', 'cobalagi', '2021-10-20', 'cobalagi', 'Perempuan', '', 'coba', 'Sekolah'),
('8923478923789489', 'tes', 'Pemohon', 'coba', '2022-05-22', 'kudus', 'Laki-Laki', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  ADD PRIMARY KEY (`id_request_akta`),
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `data_request_kk`
--
ALTER TABLE `data_request_kk`
  ADD PRIMARY KEY (`id_request_kk`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  ADD PRIMARY KEY (`id_request_ktp`),
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD PRIMARY KEY (`id_request_sktm`),
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
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  MODIFY `id_request_akta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_request_kk`
--
ALTER TABLE `data_request_kk`
  MODIFY `id_request_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  MODIFY `id_request_ktp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  ADD CONSTRAINT `data_request_akta_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_kk`
--
ALTER TABLE `data_request_kk`
  ADD CONSTRAINT `data_request_kk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  ADD CONSTRAINT `data_request_ktp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD CONSTRAINT `data_request_sktm_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD CONSTRAINT `data_user_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
