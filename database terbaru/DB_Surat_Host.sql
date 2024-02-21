-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 21, 2024 at 08:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `data_penduduk`
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
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`nik`, `no_kk`, `nama`, `jekel`, `tanggal_lahir`, `tempat_lahir`, `telepon`, `gol_darah`, `agama`, `status_warga`, `status_perkawinan`, `status_hdk`, `pend_terakhir`, `alamat`, `pekerjaan`, `nama_ayah`, `nama_ibu`) VALUES
('101799', '90909909', 'Subagio - Ketua RT 002', 'Laki-Laki', '2024-01-20', 'bagdat', '0871+++', 'O', 'Islam', '02 / 001', 'Berkeluarga', 'kepala keluarga', 'S1', 'JL Muter Balik', 'pedagang', 'pak mul', 'bu mul'),
('1121', '1122', 'Anis Kirana', 'Perempuan', '2024-01-21', 'Lampung Tengah', '8008880', 'O', 'Islam', '001 / 003', 'Berkeluarga', 'anak', 'SMA/SEDERAJAT', 'Jl Solo no 21', 'Mahasiswi', 'bambang', '-'),
('1212', '1412', 'Burhan', 'Laki-Laki', '1999-12-12', 'Pringsewu', '1232343245', 'A', 'Islam', '02 / 009', 'Belum Berkeluarga', 'anak', 'SMA / SEDERAJAT', '     Jl cengkeh Selatan II No 88.Perumnas Wayhalim', 'tukang', 'pak mul', 'buul'),
('12345678', '', 'Admin RT 1', 'Laki-Laki', '2024-01-06', 'Pringsewu', '', '', '', 'Sekolah', '', '', '', 'jl .jl muter 2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_akta`
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
  `status_anak` varchar(50) NOT NULL,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_request_akta`
--

INSERT INTO `data_request_akta` (`id_request_akta`, `nik`, `nama_anak`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `anak_ke`, `keterangan`, `file_akta`, `request`, `status`, `status_anak`, `acc`) VALUES
(7, '1121', 'ana', '2024-01-21 09:18:19', '1121_.jpg', '1121_.jpg', 'pembuatan akta', '2', 'Surat dicetak, bisa diambil!', 'AKTA_8_Anis Kirana_1121.pdf', 'AKTA', 3, '', '2024-02-05'),
(8, '1121', 'ahmat', '2024-01-21 09:20:28', '1121_.jpg', '1121_.jpg', 'pembautan akta', '4', 'Surat dicetak, bisa diambil!', 'AKTA_8_Anis Kirana_1121.pdf', 'AKTA', 3, '', '2024-01-17'),
(9, '1121', 'anis', '2024-02-05 03:24:41', '1121_.jpg', '1121_.jpg', 'paenambahan anggota', '3', 'Surat sedang dalam proses cetak', '', 'AKTA', 2, '', '2024-02-05'),
(10, '1121', 'kirana', '2024-02-05 03:25:45', '1121_.jpg', '1121_.jpg', 'penambahan anggota', '4', 'Surat sedang dalam proses cetak', '', 'AKTA', 2, '', '2024-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_kk`
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
  `request` varchar(20) NOT NULL DEFAULT 'KARTU KK',
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
-- Dumping data for table `data_request_kk`
--

INSERT INTO `data_request_kk` (`id_request_kk`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `warga_negara`, `keperluan`, `keterangan`, `file_kk`, `request`, `status`, `acc`, `nik_anggota`, `nama_anggota`, `tgl_anggota`, `tempat_anggota`, `jekel_anggota`, `agama_anggota`, `hdk_anggota`) VALUES
(11, '1212', '2023-12-11 14:58:43', '1212_.jpg', '1212_.jpg', '', 'aku pamit', 'Surat sedang dalam proses cetak', '', 'KARTU KK', 2, '2024-01-19', '', '', '2024-02-11', '', '', '', ''),
(19, '1121', '2024-02-12 18:08:33', '1121_.jpg', '1121_.jpg', 'Indonesia', 'tambah anggota', 'Data sedang diperiksa oleh Staf', '', 'KARTU KK', 1, '0000-00-00', '1212', '123', '2024-02-13', '123', 'Laki-Laki', 'Islam', 'anak'),
(20, '1121', '2024-02-14 11:14:05', '1121_.jpg', '1121_.jpg', 'Indonesia', 'coba kk', 'Surat dicetak, bisa diambil!', 'KK_20_Anis Kirana_1121.pdf', 'KARTU KK', 3, '2024-02-14', '1871', 'anggota 1', '2024-02-14', 'arab', 'Laki-Laki', 'Islam', 'keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_ktp`
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
-- Dumping data for table `data_request_ktp`
--

INSERT INTO `data_request_ktp` (`id_request_ktp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `file_ktp`, `warga_negara`, `request`, `status`, `acc`) VALUES
(2, '1121', '2024-01-20 18:14:11', '1121_.jpg', '1121_.jpg', 'perubahan data', 'Surat sedang dalam proses cetak', '', 'Indonesia', 'KTP', '2', '0000-00-00'),
(3, '1121', '2024-01-21 09:21:06', '1121_.jpg', '1121_.jpg', 'perubahan data KTP', 'Surat dicetak, bisa diambil!', 'KTP_3_Anis Kirana_1121.pdf', 'Indonesia', 'KTP', '3', '2024-01-14'),
(4, '1121', '2024-02-14 11:17:35', '1121_.jpg', '1121_.jpg', 'coba ktp', 'Surat dicetak, bisa diambil!', 'KTP_4_Anis Kirana_1121.pdf', 'Indonesia', 'KTP', '3', '2024-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skd`
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
  `request` varchar(20) NOT NULL DEFAULT 'SKD',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `file_skd`, `request`, `status`, `acc`) VALUES
(22, '1212', '2023-12-11 14:58:03', '1212_.jpg', '1212_.jpg', 'pindah', 'Surat sedang dalam proses cetak', '', 'SKD', 2, '2024-01-17'),
(25, '1121', '2024-01-20 17:50:56', '1121_.jpg', '1121_.jpg', 'pindah domisili', 'Surat sedang dalam proses cetak', '', 'SKD', 2, '2024-02-05'),
(26, '1121', '2024-01-20 17:51:45', '1121_.jpg', '1121_.jpg', 'pengajuan temapt tin', 'Surat dicetak, bisa diambil!', 'SKD_26_Anis Kirana_1121.pdf', 'SKD', 3, '2024-01-18'),
(27, '1121', '2024-02-05 03:26:19', '1121_.jpg', '1121_.jpg', 'pindah domisili', 'Surat dicetak, bisa diambil!', 'SKD_27_Anis Kirana_1121.pdf', 'SKD', 3, '2024-02-05'),
(28, '1121', '2024-02-14 11:15:44', '1121_.jpg', '1121_.jpg', 'coba skd', 'Surat sedang dalam proses cetak', '', 'SKD', 2, '2024-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sktm`
--

CREATE TABLE `data_request_sktm` (
  `id_request_sktm` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'SKTM',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL,
  `file_sktm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`, `file_sktm`) VALUES
(53, '1212', '2023-12-11 14:57:13', '1212_.jpg', '1212_.jpg', 'pinjol', 'SKTM', 'Surat dicetak, bisa diunduh', 3, '2023-12-11', ''),
(55, '1121', '2024-01-20 17:46:48', '1121_.jpg', '1121_.jpg', 'pengajuan beasiswa', 'SKTM', 'Surat dicetak, bisa diunduh', 3, '2024-01-24', ''),
(56, '1121', '2024-01-20 17:47:13', '1121_.jpg', '1121_.jpg', 'ingin pengajuan besaiswa 1', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-01-21', ''),
(57, '1121', '2024-01-24 06:38:28', '1121_.jpg', '1121_.jpg', 'perubahan alamat', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-01-24', ''),
(63, '1121', '2024-01-25 07:02:34', '1121_.jpg', '1121_.jpg', 'bansos', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-01-25', '_.pdf'),
(64, '1121', '2024-01-25 07:44:29', '1121_.jpg', '1121_.jpg', 'ngutang', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-01-25', ''),
(65, '1121', '2024-01-25 07:45:02', '1121_.jpg', '1121_.jpg', 'perubahan nama', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-01-25', ''),
(66, '1121', '2024-01-26 02:32:02', '1121_.jpg', '1121_.jpg', 'perubahan alamat', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-01-26', ''),
(67, '1121', '2024-01-26 02:32:39', '1121_.jpg', '1121_.jpg', 'perubahan no KK', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-01-26', ''),
(68, '1121', '2024-02-05 02:21:29', '1121_.jpg', '1121_.jpg', 'pengajuan bansos', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-05', 'SKTM_68_Anis Kirana_1121.pdf'),
(69, '1121', '2024-02-05 02:22:10', '1121_.jpg', '1121_.jpg', 'pengajuan bansos 2', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-05', 'SKTM_69_Anis Kirana_1121.pdf'),
(70, '1121', '2024-02-05 15:43:33', '1121_.jpg', '1121_.jpg', 'ingin pengajuan besaiswa', 'SKTM', 'Surat sedang dalam proses cetak', 2, '2024-02-05', ''),
(71, '1121', '2024-02-12 16:36:28', '1121_.jpg', '1121_.jpg', 'pengajuan koprasi', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-12', 'SKTM_71_Anis Kirana_1121.pdf'),
(72, '1121', '2024-02-12 16:37:19', '1121_.jpg', '1121_.jpg', 'pengajuan koprasi 2', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-12', 'SKTM_72_Anis Kirana_1121.pdf'),
(73, '1121', '2024-02-12 17:23:56', '1121_.jpg', '1121_.jpg', 'ubah data 123', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-13', 'SKTM_73_Anis Kirana_1121.pdf'),
(74, '1121', '2024-02-12 17:26:20', '1121_.jpg', '1121_.jpg', 'ubah data 17', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-13', 'SKTM_74_Anis Kirana_1121.pdf'),
(75, '1121', '2024-02-12 17:41:14', '1121_.jpg', '1121_.jpg', 'ubah data 321', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-13', 'SKTM_75_Anis Kirana_1121.pdf'),
(76, '1121', '2024-02-14 11:00:02', '1121_.jpg', '1121_.jpg', 'coba sktm', 'SKTM', 'Surat dicetak, bisa diambil!', 3, '2024-02-14', 'SKTM_76_Anis Kirana_1121.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sku`
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
  `request` varchar(20) NOT NULL DEFAULT 'SKU',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `jenis_usaha`, `kepemilikan`, `alamat_usaha`, `keperluan`, `keterangan`, `file_sku`, `request`, `status`, `acc`) VALUES
(15, '1121', '2024-01-20 17:49:01', '1121_.jpg', '1121_.jpg', 'bumn', 'warung', 'peribadi', 'JL SOLO 21', 'membuka usaha 2', 'Surat dicetak, bisa diambil!', 'SKU_15_Anis Kirana_1121.pdf_.pdf', 'SKU', 3, '2024-01-20'),
(18, '1121', '2024-01-30 09:26:29', '1121_.jpg', '1121_.jpg', 'BCD', 'LKSDF', 'peribadi', 'jl amin', 'usaha baru 4', 'Surat dicetak, bisa diambil!', 'SKU_19_Anis Kirana_1121.pdfArray', 'SKU', 3, '2024-01-30'),
(19, '1121', '2024-01-30 09:27:02', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'PABRIK', 'persero', 'Jl Buntu', 'usaha 5', 'Surat dicetak, bisa diambil!', 'SKU_20_Anis Kirana_1121.pdf_.pdf', 'SKU', 3, '2024-01-30'),
(20, '1121', '2024-01-30 09:27:49', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'perikanan', 'persero', 'jl amin', 'buka cabang 6', 'Surat dicetak, bisa diambil!', 'SKU_20_Anis Kirana_1121.pdf_.pdf', 'SKU', 3, '2024-01-30'),
(25, '1121', '2024-02-02 07:40:40', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 1', 'Surat dicetak, bisa diambil!', 'SKU_25_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-02'),
(26, '1121', '2024-02-02 07:41:23', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 2', 'Surat dicetak, bisa diambil!', 'SKU_26_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-02'),
(27, '1121', '2024-02-02 07:41:54', '1121_.jpg', '1121_.jpg', 'Warung Toserba', 'warung', 'peribadi', 'jl amin', 'buka warung 3', 'Surat dicetak, bisa diambil!', 'SKU_27_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-02'),
(28, '1121', '2024-02-02 07:42:31', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 4', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-02'),
(29, '1121', '2024-02-02 07:43:00', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 5', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-02'),
(31, '1121', '2024-02-02 07:44:12', '1121_.jpg', '1121_.jpg', 'warung lontong', 'warung', 'peribadi', 'jl amin', 'buka warung 7', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-02'),
(32, '1121', '2024-02-02 09:51:06', '1121_.jpg', '1121_.jpg', '123', '123', '123', '123', '123', 'Surat dicetak, bisa diambil!', 'SKU_28_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-02'),
(35, '1121', '2024-02-12 16:28:31', '1121_.jpg', '1121_.jpg', '123', '123', '123', '123', '123', 'Surat dicetak, bisa diambil!', 'SKU_35_Anis Kirana_1121.pdf', 'SKU', 3, '2024-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
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
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `status_warga`) VALUES
('1212', '123', 'Pemohon', 'Burhan', '1999-12-12', 'Pringsewu', 'Laki-Laki', 'Islam', '     Jl cengkeh Selatan II No 88.Perumnas Wayhalim', 'Kerja'),
('12345678', '4', 'Admin', 'Admin RT 1', '2024-01-06', 'Pringsewu', 'Laki-Laki', '', 'jl .jl muter 2', 'Sekolah'),
('101799', '123', 'RT', 'Subagio - Ketua RT 002', '2024-01-20', 'Pringsewu', 'Laki-Laki', '', 'JL Muter', '001 / 003'),
('1121', '123', 'Pemohon', 'Anis Kirana', '2024-01-21', 'Lampung Tengah', 'Perempuan', 'Islam', ' Jl Solo no 21', '001 / 003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `data_request_akta`
--
ALTER TABLE `data_request_akta`
  ADD PRIMARY KEY (`id_request_akta`),
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- Indexes for table `data_request_kk`
--
ALTER TABLE `data_request_kk`
  ADD PRIMARY KEY (`id_request_kk`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  ADD PRIMARY KEY (`id_request_ktp`),
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- Indexes for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD PRIMARY KEY (`id_request_sktm`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_request_akta`
--
ALTER TABLE `data_request_akta`
  MODIFY `id_request_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_request_kk`
--
ALTER TABLE `data_request_kk`
  MODIFY `id_request_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  MODIFY `id_request_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_request_akta`
--
ALTER TABLE `data_request_akta`
  ADD CONSTRAINT `data_request_akta_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_kk`
--
ALTER TABLE `data_request_kk`
  ADD CONSTRAINT `data_request_kk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_ktp`
--
ALTER TABLE `data_request_ktp`
  ADD CONSTRAINT `data_request_ktp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD CONSTRAINT `data_request_sktm_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_user`
--
ALTER TABLE `data_user`
  ADD CONSTRAINT `data_user_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
