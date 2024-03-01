-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 11 Feb 2024 pada 17.58
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
(7, '1121', 'ana', '2024-01-21 09:18:19', '1121_.jpg', '1121_.jpg', 'pembuatan akta', '2', 'Surat dicetak, bisa diambil!', 'AKTA_8_Anis Kirana_1121.pdf', 'AKTA', 3, '2024-02-05'),
(8, '1121', 'ahmat', '2024-01-21 09:20:28', '1121_.jpg', '1121_.jpg', 'pembautan akta', '4', 'Surat dicetak, bisa diambil!', 'AKTA_8_Anis Kirana_1121.pdf', 'AKTA', 3, '2024-01-17'),
(9, '1121', 'anis', '2024-02-05 03:24:41', '1121_.jpg', '1121_.jpg', 'paenambahan anggota', '3', 'Surat sedang dalam proses cetak', '', 'AKTA', 2, '2024-02-05'),
(10, '1121', 'kirana', '2024-02-05 03:25:45', '1121_.jpg', '1121_.jpg', 'penambahan anggota', '4', 'Surat sedang dalam proses cetak', '', 'AKTA', 2, '2024-02-05');

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
  `acc` date NOT NULL,
  `nik_anggota` varchar(16) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `tgl_anggota` date NOT NULL,
  `tempat_anggota` varchar(50) NOT NULL,
  `jekel_anggota` varchar(20) NOT NULL,
  `agama_anggota` varchar(20) NOT NULL,
  `hdk_anggota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_kk`
--

INSERT INTO `data_request_kk` (`id_request_kk`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `warga_negara`, `keperluan`, `keterangan`, `file_kk`, `request`, `status`, `acc`, `nik_anggota`, `nama_anggota`, `tgl_anggota`, `tempat_anggota`, `jekel_anggota`, `agama_anggota`, `hdk_anggota`) VALUES
(10, '1111111111111111', '2021-10-18 06:14:07', '1111111111111111_.jpg', '1111111111111111_.jpg', '', 'KTP Hilang', 'Surat dicetak, bisa diambil!', '', 'LAINNYA', 3, '2021-10-18', '', '', '2024-02-11', '', '', '', ''),
(11, '1212', '2023-12-11 14:58:43', '1212_.jpg', '1212_.jpg', '', 'aku pamit', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-01-19', '', '', '2024-02-11', '', '', '', ''),
(13, '1121', '2024-01-20 17:49:54', '1121_.jpg', '1121_.jpg', 'indonesia', 'perubahan data', 'mantap', '', 'LAINNYA', 1, '0000-00-00', '', '', '2024-02-11', '', '', '', ''),
(14, '1121', '2024-01-20 17:50:21', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah nama', 'Surat dicetak, bisa diambil!', 'KK_14_Anis Kirana_1121.pdf', 'LAINNYA', 3, '2024-01-19', '', '', '2024-02-11', '', '', '', ''),
(18, '1121', '2024-02-11 15:30:31', '1121_.jpg', '1121_.jpg', 'Indonesia', 'ubah data', 'Surat sedang dalam proses cetak', '', 'LAINNYA', 2, '2024-02-11', '1212', '123', '2024-02-11', '123', 'Laki-Laki', 'Islam', 'anak');

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
(3, '1121', '2024-01-21 09:21:06', '1121_.jpg', '1121_.jpg', 'perubahan data KTP', 'Surat dicetak, bisa diambil!', 'KTP_3_Anis Kirana_1121.pdf', 'Indonesia', 'KTP', '3', '2024-01-14');

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
(22, '1212', '2023-12-11 14:58:03', '1212_.jpg', '1212_.jpg', 'pindah', 'Surat sedang dalam proses cetak', '', 'DOMISILI', 2, '2024-01-17'),
(25, '1121', '2024-01-20 17:50:56', '1121_.jpg', '1121_.jpg', 'pindah domisili', 'Surat sedang dalam proses cetak', '', 'DOMISILI', 2, '2024-02-05'),
(26, '1121', '2024-01-20 17:51:45', '1121_.jpg', '1121_.jpg', 'pengajuan temapt tin', 'Surat dicetak, bisa diambil!', 'SKD_26_Anis Kirana_1121.pdf', 'DOMISILI', 3, '2024-01-18'),
(27, '1121', '2024-02-05 03:26:19', '1121_.jpg', '1121_.jpg', 'pindah domisili', 'Surat sedang dalam proses cetak', '', 'DOMISILI', 2, '2024-02-05');

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
  `file_sktm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`, `file_sktm`) VALUES
(50, '1111111111111111', '2021-10-17 10:06:35', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Beasiswa Sekolah', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-10-17', ''),
(53, '1212', '2023-12-11 14:57:13', '1212_.jpg', '1212_.jpg', 'pinjol', 'TIDAK MAMPU', 'Surat dicetak, bisa diunduh', 3, '2023-12-11', ''),
(55, '1121', '2024-01-20 17:46:48', '1121_.jpg', '1121_.jpg', 'pengajuan beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diunduh', 3, '2024-01-24', ''),
(56, '1121', '2024-01-20 17:47:13', '1121_.jpg', '1121_.jpg', 'ingin pengajuan besaiswa 1', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-01-21', ''),
(57, '1121', '2024-01-24 06:38:28', '1121_.jpg', '1121_.jpg', 'perubahan alamat', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-01-24', ''),
(63, '1121', '2024-01-25 07:02:34', '1121_.jpg', '1121_.jpg', 'bansos', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-01-25', '_.pdf'),
(64, '1121', '2024-01-25 07:44:29', '1121_.jpg', '1121_.jpg', 'ngutang', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-01-25', ''),
(65, '1121', '2024-01-25 07:45:02', '1121_.jpg', '1121_.jpg', 'perubahan nama', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-01-25', ''),
(66, '1121', '2024-01-26 02:32:02', '1121_.jpg', '1121_.jpg', 'perubahan alamat', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-01-26', ''),
(67, '1121', '2024-01-26 02:32:39', '1121_.jpg', '1121_.jpg', 'perubahan no KK', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-01-26', ''),
(68, '1121', '2024-02-05 02:21:29', '1121_.jpg', '1121_.jpg', 'pengajuan bansos', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2024-02-05', 'SKTM_68_Anis Kirana_1121.pdf'),
(69, '1121', '2024-02-05 02:22:10', '1121_.jpg', '1121_.jpg', 'pengajuan bansos 2', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2024-02-05', ''),
(70, '1121', '2024-02-05 15:43:33', '1121_.jpg', '1121_.jpg', 'ingin pengajuan besaiswa', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2024-02-05', '');

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
(9, '1111111111111111', '2021-10-17 10:37:58', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Warung Kopi', '', '', '0', 'Bantuan UMKM', 'Surat dicetak, bisa diambil!', '', 'USAHA', 3, '2021-10-17'),
(11, '1212', '2023-12-11 14:18:57', '1212_.jpg', '1212_.jpg', 'bumn', '', '', '0', 'buka warung', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-01-20'),
(14, '1121', '2024-01-20 17:48:22', '1121_.jpg', '1121_.jpg', 'PT ABC', 'PABRIK', 'peribadi', 'JL SOLO 21', 'MEMBUKA USAHA BARU', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-01-30'),
(15, '1121', '2024-01-20 17:49:01', '1121_.jpg', '1121_.jpg', 'bumn', 'warung', 'peribadi', 'JL SOLO 21', 'membuka usaha 2', 'Surat dicetak, bisa diambil!', 'SKU_15_Anis Kirana_1121.pdf_.pdf', 'USAHA', 3, '2024-01-20'),
(16, '1121', '2024-01-30 07:47:58', '1121_.jpg', '1121_.jpg', 'abcd', 'abcd', 'pribadi', 'jalan buntu', 'surat usaha baru', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-01-30'),
(17, '1121', '2024-01-30 07:48:42', '1121_.jpg', '1121_.jpg', 'dbfg', 'sdfg', 'peribadi', 'sdfg', 'usaha baru 2', 'Surat dicetak, bisa diambil!', '_.pdf', 'USAHA', 3, '2024-01-30'),
(18, '1121', '2024-01-30 09:26:29', '1121_.jpg', '1121_.jpg', 'BCD', 'LKSDF', 'peribadi', 'jl amin', 'usaha baru 4', 'Surat dicetak, bisa diambil!', 'SKU_19_Anis Kirana_1121.pdfArray', 'USAHA', 3, '2024-01-30'),
(19, '1121', '2024-01-30 09:27:02', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'PABRIK', 'persero', 'Jl Buntu', 'usaha 5', 'Surat dicetak, bisa diambil!', 'SKU_20_Anis Kirana_1121.pdf_.pdf', 'USAHA', 3, '2024-01-30'),
(20, '1121', '2024-01-30 09:27:49', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'perikanan', 'persero', 'jl amin', 'buka cabang 6', 'Surat dicetak, bisa diambil!', 'SKU_20_Anis Kirana_1121.pdf_.pdf', 'USAHA', 3, '2024-01-30'),
(21, '1121', '2024-02-02 07:06:46', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'warung', 'peribadi', 'jl amin', 'buka warung 1', 'Surat dicetak, bisa diambil!', '', 'USAHA', 3, '2024-02-02'),
(25, '1121', '2024-02-02 07:40:40', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 1', 'Surat dicetak, bisa diambil!', 'SKU_25_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(26, '1121', '2024-02-02 07:41:23', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 2', 'Surat dicetak, bisa diambil!', 'SKU_26_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(27, '1121', '2024-02-02 07:41:54', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'warung', 'peribadi', 'jl amin', 'buka warung 3', 'Surat dicetak, bisa diambil!', 'SKU_27_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(28, '1121', '2024-02-02 07:42:31', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 4', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(29, '1121', '2024-02-02 07:43:00', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 5', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(30, '1121', '2024-02-02 07:43:34', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'warung', 'peribadi', 'jl amin', 'buka warung 6', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(31, '1121', '2024-02-02 07:44:12', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 7', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(32, '1121', '2024-02-02 09:51:06', '1121_.jpg', '1121_.jpg', '123', '123', '123', '123', '123', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'USAHA', 3, '2024-02-02'),
(33, '1121', '2024-02-05 02:28:01', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'warung', 'pribadi', 'jl amin', 'buka warung cabang 15', 'Surat sedang dalam proses cetak', '', 'USAHA', 2, '2024-02-05'),
(34, '1121', '2024-02-05 02:30:46', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'pribadi', 'jl amin', 'buka warung lagi', 'Surat sedang dalam proses cetak', '', 'USAHA', 2, '2024-02-05');

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
('1121', '123', 'Pemohon', 'Anis Kirana', '2024-01-21', 'Lampung Tengah', 'Perempuan', 'Islam', '   Jl Solo no 21', '001 / 003');

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
  MODIFY `id_request_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_request_kk`
--
ALTER TABLE `data_request_kk`
  MODIFY `id_request_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  MODIFY `id_request_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
