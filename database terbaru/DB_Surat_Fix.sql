-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 04 Feb 2024 pada 19.05
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
('009908', '12131415', 'mang ', 'Laki-Laki', '2021-12-11', 'arab', '12132112', 'O', 'Islam', '24 / 001', 'Berkeluarga', 'bujang', 'SMA / SEDERAJAT', 'jl kopi', 'tukang', 'pak ahamt', 'bu ahmat'),
('1', '', 'coba', 'Laki-Laki', '2021-10-20', 'coba', '', '', '', 'Kerja', '', '', '', 'coba', '', '', ''),
('101799', '90909909', 'Subagio - Ketua RT 002', 'Laki-Laki', '2024-01-20', 'bagdat', '0871+++', 'O', 'Islam', '02 / 001', 'Berkeluarga', 'kepala keluarga', 'S1', 'JL Muter Balik', 'pedagang', 'pak mul', 'bu mul'),
('1111111111111111', '', 'Fachri Shofiyyuddin Ahmad', 'Laki-Laki', '2021-10-17', 'Jakarta', '087897315639', '', 'Islam', 'Sekolah', '', '', '', '        Jakarta RT 01/RW 07', '', '', ''),
('1121', '1122', 'Anis Kirana', 'Perempuan', '2024-01-21', 'Lampung Tengah', '8008880', 'O', 'Islam', '001 / 003', 'Berkeluarga', 'anak', 'SMA/SEDERAJAT', 'Jl Solo no 21', 'Mahasiswi', 'bambang', '-'),
('1212', '1412', 'Burhan', 'Laki-Laki', '1999-12-12', 'Pringsewu', '1232343245', 'A', 'Islam', '02 / 009', 'Belum Berkeluarga', 'anak', 'SMA / SEDERAJAT', '     Jl cengkeh Selatan II No 88.Perumnas Wayhalim', 'tukang', 'pak mul', 'buul'),
('12345678', '', 'Admin RT 1', 'Laki-Laki', '2024-01-06', 'Pringsewu', '', '', '', 'Sekolah', '', '', '', 'jl .jl muter 2', '', '', ''),
('1515', '5151', 'mancung', 'Laki-Laki', '2024-01-09', 'Pringsewu', '', 'O', 'Islam', '', 'Berkeluarga', 'anak', 'SMA/SEDERAJAT', 'jalan blong', 'pedagang', 'parjo', 'burjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_akta`
--

CREATE TABLE `data_request_akta` (
  `id_request_akta` int(11) NOT NULL,
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_anak` varchar(80) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `scan_kk` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keperluan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `anak_ke` varchar(50) NOT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `file_akta` varchar(50) NOT NULL,
  `request` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'AKTA',
  `status` int(11) DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_request_akta`
--

INSERT INTO `data_request_akta` (`id_request_akta`, `nik`, `nama_anak`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `anak_ke`, `keterangan`, `file_akta`, `request`, `status`, `acc`) VALUES
(7, '1121', 'ana', '2024-01-21 09:18:19', '1121_.jpg', '1121_.jpg', 'pembuatan akta', '2', 'Data sedang diperiksa oleh Staf', '', 'AKTA', 0, '0000-00-00'),
(8, '1121', 'ahmat', '2024-01-21 09:20:28', '1121_.jpg', '1121_.jpg', 'pembautan akta', '4', 'Surat sedang dalam proses cetak', '', 'AKTA', 2, '2024-01-17');

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
  `warga_negara` varchar(50) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `file_kk` varchar(50) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'LAINNYA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_kk`
--

INSERT INTO `data_request_kk` (`id_request_kk`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `warga_negara`, `keperluan`, `keterangan`, `file_kk`, `request`, `status`, `acc`) VALUES
(10, '1111111111111111', '2021-10-18 06:14:07', '1111111111111111_.jpg', '1111111111111111_.jpg', '', 'KTP Hilang', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2021-10-18'),
(11, '1212', '2023-12-11 14:58:43', '1212_.jpg', '1212_.jpg', '', 'aku pamit', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-01-19'),
(13, '1121', '2024-01-20 17:49:54', '1121_.jpg', '1121_.jpg', 'indonesia', 'perubahan data', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(14, '1121', '2024-01-20 17:50:21', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah nama', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-01-19'),
(15, '1121', '2024-02-03 14:48:27', '1121_.jpg', '1121_.jpg', 'Indonesia', 'perubahan data', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(16, '1121', '2024-02-03 14:48:51', '1121_.jpg', '1121_.jpg', 'Indonesia', 'perubahan data 2', 'Surat dicetak, bisa diambil!', '_.pdf', 'LAINNYA', 3, '2024-02-03'),
(17, '1121', '2024-02-03 14:49:10', '1121_.jpg', '1121_.jpg', 'Indonesia', 'perubahan data 3', 'Surat dicetak, bisa diambil!', 'Array', 'LAINNYA', 3, '2024-02-03'),
(18, '1121', '2024-02-03 14:49:31', '1121_.jpg', '1121_.jpg', 'Indonesia', 'perubahan data 4', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(19, '1121', '2024-02-03 14:49:51', '1121_.jpg', '1121_.jpg', 'Indonesia', 'perubahan data  5', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(20, '1121', '2024-02-03 14:50:08', '1121_.jpg', '1121_.jpg', 'Indonesia', 'perubahan data', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(21, '1121', '2024-02-03 16:35:51', '1121_.jpg', '1121_.jpg', 'Indonesia', 'pembuatan akta', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(22, '1121', '2024-02-03 16:36:18', '1121_.jpg', '1121_.jpg', 'Indonesia', 'pembuatan akta 1', 'Surat dicetak, bisa diambil!', 'KK_22_Anis Kirana_1121.pdf', 'LAINNYA', 3, '2024-02-03'),
(23, '1121', '2024-02-03 16:36:38', '1121_.jpg', '1121_.jpg', 'Indonesia', 'pembuatan akta 2', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(24, '1121', '2024-02-03 16:36:55', '1121_.jpg', '1121_.jpg', 'Indonesia', 'pembuatan akta 3', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(25, '1121', '2024-02-03 16:47:59', '1121_.jpg', '1121_.jpg', 'Indonesia', 'pembuatan akta 4', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(26, '1121', '2024-02-03 16:48:18', '1121_.jpg', '1121_.jpg', 'Indonesia', 'pembuatan akta 5', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(27, '1121', '2024-02-03 16:48:50', '1121_.jpg', '1121_.jpg', '', 'pembuatan akta  6', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(28, '1121', '2024-02-03 16:49:21', '1121_.jpg', '1121_.jpg', 'Indonesia', 'pembuatan akta 7', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-03'),
(29, '1121', '2024-02-03 18:18:03', '1121_.jpg', '1121_.jpg', '123', '123', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-04'),
(30, '1121', '2024-02-03 18:18:35', '1121_.jpg', '1121_.jpg', 'Indonesia', '1', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-04'),
(31, '1121', '2024-02-03 18:18:49', '1121_.jpg', '1121_.jpg', 'Indonesia', '2', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-04'),
(32, '1121', '2024-02-03 18:19:05', '1121_.jpg', '1121_.jpg', 'Indonesia', '3', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2024-02-04'),
(33, '1121', '2024-02-03 18:19:19', '1121_.jpg', '1121_.jpg', 'Indonesia', '4', 'Surat dicetak, bisa diambil!', '_.pdf', 'LAINNYA', 3, '2024-02-04'),
(34, '1121', '2024-02-03 18:19:33', '1121_.jpg', '1121_.jpg', 'Indonesia', '5', 'Surat dicetak, bisa diambil!', '_.pdf', 'LAINNYA', 3, '2024-02-04'),
(35, '1121', '2024-02-03 18:19:44', '1121_.jpg', '1121_.jpg', 'Indonesia', '6', 'Surat dicetak, bisa diambil!', '_.pdf', 'LAINNYA', 3, '2024-02-04'),
(36, '1121', '2024-02-03 18:19:58', '1121_.jpg', '1121_.jpg', 'Indonesia', '7', 'Surat dicetak, bisa diambil!', '_.pdf', 'LAINNYA', 3, '2024-02-04'),
(37, '1121', '2024-02-03 18:20:11', '1121_.jpg', '1121_.jpg', 'Indonesia', '8', 'Surat dicetak, bisa diambil!', '_.pdf', 'LAINNYA', 3, '2024-02-04'),
(38, '1121', '2024-02-03 18:20:32', '1121_.jpg', '1121_.jpg', 'Indonesia', '8', 'Surat dicetak, bisa diambil!', 'Array_.pdf', 'LAINNYA', 3, '2024-02-04'),
(39, '1121', '2024-02-04 07:53:58', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data 1', 'Surat dicetak, bisa diambil!', '_.pdf', 'LAINNYA', 3, '2024-02-04'),
(40, '1121', '2024-02-04 07:54:19', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data 2', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(41, '1121', '2024-02-04 07:54:47', '1121_.jpg', '1121_.jpg', '', 'ubah data 3', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(42, '1121', '2024-02-04 07:55:10', '1121_.jpg', '1121_.jpg', 'Indonesia', 'udah data 4', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(43, '1121', '2024-02-04 07:55:35', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data 5', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(44, '1121', '2024-02-04 07:55:52', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data 6', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(45, '1121', '2024-02-04 07:56:11', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data 7', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(46, '1121', '2024-02-04 07:56:27', '1121_.jpg', '1121_.jpg', '', 'ubah data 8', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(47, '1121', '2024-02-04 07:56:40', '1121_.jpg', '1121_.jpg', '', 'ubah data 9', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(48, '1121', '2024-02-04 07:56:59', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah  data 10', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(49, '1121', '2024-02-04 07:57:15', '1121_.jpg', '1121_.jpg', 'Indonesia', 'perubahan  data 1', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(50, '1121', '2024-02-04 08:13:38', '1121_.jpg', '1121_.jpg', 'Indonesia', 'udah data 5', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(51, '1121', '2024-02-04 08:14:05', '1121_.jpg', '1121_.jpg', 'Indonesia', 'udah data 6', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(52, '1121', '2024-02-04 08:15:53', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data 7', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04'),
(53, '1121', '2024-02-04 08:16:15', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data 8', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-04');

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
  `file_ktp` varchar(50) NOT NULL,
  `warga_negara` varchar(50) NOT NULL,
  `request` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'KTP',
  `status` varchar(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_request_ktp`
--

INSERT INTO `data_request_ktp` (`id_request_ktp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `file_ktp`, `warga_negara`, `request`, `status`, `acc`) VALUES
(2, '1121', '2024-01-20 18:14:11', '1121_.jpg', '1121_.jpg', 'perubahan data', 'Surat sedang dalam proses cetak', '', 'Indonesia', 'KTP', '2', '0000-00-00'),
(3, '1121', '2024-01-21 09:21:06', '1121_.jpg', '1121_.jpg', 'perubahan data KTP', 'Surat sedang dalam proses cetak', '', 'Indonesia', 'KTP', '2', '2024-01-14');

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
  `file_skd` varchar(50) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `file_skd`, `request`, `status`, `acc`) VALUES
(21, '1111111111111111', '2021-10-18 06:46:28', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Administrasi Bank', 'Surat dicetak, bisa diambil!', '', 'DOMISILI', 3, '2021-10-18'),
(22, '1212', '2023-12-11 14:58:03', '1212_.jpg', '1212_.jpg', 'pindah', 'Surat dicetak, bisa diambil!', 'SKD_22_Burhan_1212.pdf', 'DOMISILI', 3, '2024-01-17'),
(25, '1121', '2024-01-20 17:50:56', '1121_.jpg', '1121_.jpg', 'pindah domisili', 'Data sedang diperiksa oleh Staf', '', 'DOMISILI', 0, '0000-00-00'),
(26, '1121', '2024-01-20 17:51:45', '1121_.jpg', '1121_.jpg', 'pengajuan temapt tin', 'Surat sedang dalam proses cetak', '', 'DOMISILI', 2, '2024-01-18');

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
  `acc` date NOT NULL,
  `file_sktm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`, `file_sktm`) VALUES
(50, '1111111111111111', '2021-10-17 10:06:35', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Beasiswa Sekolah', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-10-17', ''),
(53, '1212', '2023-12-11 14:57:13', '1212_.jpg', '1212_.jpg', 'pinjol', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2023-12-11', 'SKTM_53_Burhan_1212.pdf'),
(55, '1121', '2024-01-20 17:46:48', '1121_.jpg', '1121_.jpg', 'pengajuan beasiswa', 'TIDAK MAMPU', 'Data sedang diperiksa oleh Staf', 0, '0000-00-00', ''),
(56, '1121', '2024-01-20 17:47:13', '1121_.jpg', '1121_.jpg', 'ingin pengajuan besaiswa 1', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2024-01-21', '');

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
  `jenis_usaha` varchar(50) NOT NULL,
  `kepemilikan` varchar(30) NOT NULL,
  `alamat_usaha` varchar(50) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `file_sku` varchar(50) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `jenis_usaha`, `kepemilikan`, `alamat_usaha`, `keperluan`, `keterangan`, `file_sku`, `request`, `status`, `acc`) VALUES
(52, '1121', '2024-02-04 13:47:14', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka cabang 1', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-02-04'),
(53, '1121', '2024-02-04 13:47:40', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka cabang  2', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-02-04'),
(54, '1121', '2024-02-04 13:48:05', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka cabang 3', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-02-04'),
(55, '1121', '2024-02-04 13:48:39', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka cabang 4', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-02-04'),
(56, '1121', '2024-02-04 13:49:04', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka cabnag 5', 'Surat dicetak, bisa diambil!', 'Array_.pdf', 'USAHA', 3, '2024-02-04'),
(57, '1121', '2024-02-04 13:49:32', '1121_.jpg', '1121_.jpg', 'warung lontong', 'perikanan', 'peribadi', 'jl amin', 'buka cabanag 6', 'Surat dicetak, bisa diambil!', 'SKU_56_Anis Kirana_1121.pdfname.pdf', 'USAHA', 3, '2024-02-04'),
(58, '1121', '2024-02-04 13:50:06', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buks cabang 7', 'Surat dicetak, bisa diambil!', 'SKU_58_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-04');

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
('101799', '123', 'RT', 'Subagio - Ketua RT 002', '2024-01-20', 'Pringsewu', 'Laki-Laki', '', 'JL Muter', '001 / 003'),
('1121', '123', 'Pemohon', 'Anis Kirana', '2024-01-21', 'Lampung Tengah', 'Perempuan', 'Islam', '  Jl Solo no 21', '001 / 003');

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
  MODIFY `id_request_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_request_kk`
--
ALTER TABLE `data_request_kk`
  MODIFY `id_request_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  MODIFY `id_request_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
