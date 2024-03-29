-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Jan 2023 pada 08.48
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus6666`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('AG005', 'Imam', 'Laki-laki', 'makasar', '0293023902');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(8, 'imam', 'imam', ' imam', 1),
(9, 'putra', 'putra', ' putra', 2),
(10, 'user', 'user', 'user', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_pengarang`, `id_penerbit`, `judul_buku`, `tahun_terbit`, `jumlah`) VALUES
('BK001', 1, 1, 'TEST1', 2020, 84),
('BK002', 1, 1, 'TEST2', 2018, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pm` varchar(10) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pm`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
('PM001', '', 'BK001', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'dfdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(1, 'FF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `tgl_pengembalian`) VALUES
(1, 'AG005', 'BK007', '2022-08-03', '2022-07-27', '2022-07-10'),
(2, 'AG005', 'BK007', '0000-00-00', '0000-00-00', '2022-08-21'),
(3, 'AG005', 'BK017', '2022-08-22', '2022-08-24', '2022-08-21'),
(4, 'AG005', 'BK012', '2022-08-31', '2022-09-02', '2022-08-21'),
(5, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-22'),
(6, 'AG005', 'BK017', '2022-08-22', '2022-08-22', '2022-08-22'),
(7, 'AG005', 'BK017', '2022-08-23', '2022-08-19', '2022-08-22'),
(8, 'AG005', 'BK017', '2022-08-22', '2022-08-22', '2022-08-22'),
(9, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-22'),
(10, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-22'),
(11, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-22'),
(12, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-22'),
(13, 'AG005', 'BK016', '2022-08-22', '2022-08-23', '2022-08-22'),
(14, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-22'),
(15, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-22'),
(16, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-22'),
(17, 'AG005', 'BK017', '2022-08-23', '2022-08-23', '2022-08-23'),
(18, 'AG005', 'BK016', '2022-08-23', '0000-00-00', '2022-08-23'),
(19, 'AG005', 'BK016', '2022-08-26', '2022-08-18', '2022-08-23'),
(20, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(21, 'AG005', '', '0000-00-00', '0000-00-00', '2022-08-23'),
(22, 'AG005', '', '0000-00-00', '0000-00-00', '2022-08-23'),
(23, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(24, 'AG005', '', '2022-08-23', '0000-00-00', '2022-08-23'),
(25, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(26, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(27, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(28, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(29, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(30, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(31, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(32, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-23'),
(33, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-23'),
(34, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(35, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(36, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(37, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(38, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(39, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(40, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(41, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(42, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(43, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(44, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-23'),
(45, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(46, 'AG005', 'BK016', '0000-00-00', '0000-00-00', '2022-08-23'),
(47, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-23'),
(48, 'AG005', '', '0000-00-00', '0000-00-00', '2022-08-23'),
(49, 'AG005', 'BK017', '2022-08-23', '0000-00-00', '2022-08-23'),
(50, 'AG005', 'BK016', '2022-08-23', '0000-00-00', '2022-08-23'),
(51, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-23'),
(52, 'AG005', 'BK017', '2022-08-12', '2022-08-11', '2022-08-23'),
(53, 'AG005', 'BK016', '2022-08-30', '2022-08-23', '2022-08-23'),
(54, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-23'),
(55, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-23'),
(56, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-23'),
(57, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-23'),
(58, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-23'),
(59, 'AG005', 'BK016', '2022-08-24', '2022-08-26', '2022-08-23'),
(60, 'AG005', 'BK016', '2022-08-23', '2022-08-25', '2022-08-23'),
(61, 'AG005', 'BK017', '2022-08-07', '2022-08-24', '2022-08-23'),
(62, 'AG005', 'BK016', '2022-08-24', '2022-08-25', '2022-08-23'),
(63, 'AG005', 'BK016', '2022-08-30', '2022-08-31', '2022-08-23'),
(64, 'AG005', 'BK016', '2022-08-25', '2022-08-26', '2022-08-23'),
(65, 'AG005', 'BK016', '2022-08-18', '2022-08-26', '2022-08-23'),
(66, 'AG005', 'BK017', '2022-08-26', '2022-08-25', '2022-08-23'),
(67, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(68, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(69, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(70, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(71, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(72, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(73, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(74, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(75, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(76, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(77, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(78, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(79, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(80, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(81, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(82, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(83, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(84, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(85, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(86, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(87, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(88, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(89, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(90, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(91, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(92, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(93, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(94, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(95, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(96, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(97, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(98, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(99, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(100, 'AG005', 'BK016', '2022-08-22', '2022-08-19', '2022-08-23'),
(101, 'AG005', 'BK017', '2022-08-18', '2022-08-19', '2022-08-23'),
(102, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-24'),
(103, 'AG005', 'BK016', '2022-08-25', '2022-08-26', '2022-08-24'),
(104, 'AG005', 'BK016', '2022-08-24', '2022-08-17', '2022-08-24'),
(105, 'AG005', 'BK016', '2022-08-25', '2022-08-27', '2022-08-24'),
(106, 'AG005', 'BK016', '2022-08-25', '2022-08-24', '2022-08-24'),
(107, 'AG005', 'BK016', '2022-08-24', '2022-08-29', '2022-08-24'),
(108, 'AG005', 'BK016', '2022-08-24', '2022-08-27', '2022-08-24'),
(109, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-24'),
(110, 'AG005', 'BK017', '2022-08-24', '2022-08-30', '2022-08-24'),
(111, 'AG005', 'BK017', '2022-08-24', '2022-08-26', '2022-08-24'),
(112, 'AG005', 'BK016', '2022-08-25', '2022-08-27', '2022-08-24'),
(113, 'AG005', 'BK016', '2022-08-24', '2022-08-26', '2022-08-24'),
(114, 'AG005', 'BK017', '2022-08-24', '2022-08-26', '2022-08-24'),
(115, 'AG005', 'BK016', '2022-08-24', '2022-08-30', '2022-08-24'),
(116, 'AG005', 'BK017', '2022-08-24', '2022-08-26', '2022-08-24'),
(117, 'AG005', 'BK017', '2022-08-25', '2022-08-27', '2022-08-24'),
(118, 'AG005', 'BK017', '0000-00-00', '0000-00-00', '2022-08-24'),
(119, 'AG005', 'BK017', '2022-08-24', '2022-08-27', '2022-08-24'),
(120, 'AG005', 'BK017', '2022-08-24', '2022-08-24', '2022-08-24'),
(121, 'AG005', 'BK017', '2022-08-17', '2022-08-30', '2022-08-24'),
(122, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-24'),
(123, 'AG005', 'BK017', '2022-08-24', '2022-08-26', '2022-08-24'),
(124, 'AG005', 'BK017', '2022-08-24', '2022-08-29', '2022-08-24'),
(125, 'AG005', 'BK017', '2022-08-24', '2022-08-25', '2022-08-24'),
(126, 'AG005', 'BK001', '2022-08-24', '2022-08-29', '2022-08-24'),
(127, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(128, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(129, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(130, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(131, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(132, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(133, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(134, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(135, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(136, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(137, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(138, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(139, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(140, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(141, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(142, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(143, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(144, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(145, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(146, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(147, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(148, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(149, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(150, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(151, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(152, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(153, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(154, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(155, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(156, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(157, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-25'),
(158, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-25'),
(159, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-25'),
(160, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-25'),
(161, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-25'),
(162, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-25'),
(163, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(164, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(165, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(166, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(167, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(168, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(169, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(170, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(171, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(172, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(173, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(174, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(175, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(176, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(177, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(178, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(179, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(180, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(181, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(182, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(183, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(184, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(185, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(186, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(187, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(188, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(189, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(190, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(191, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(192, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(193, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(194, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(195, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(196, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(197, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(198, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(199, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(200, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(201, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(202, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(203, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(204, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(205, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(206, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(207, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(208, 'AG005', 'BK002', '0000-00-00', '0000-00-00', '2022-08-24'),
(209, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(210, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(211, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(212, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-24'),
(213, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-25'),
(214, 'AG005', 'BK001', '2022-08-25', '2022-08-25', '2022-08-25'),
(215, 'AG005', 'BK001', '2022-08-25', '2022-08-25', '2022-08-27'),
(216, 'AG005', 'BK001', '2022-08-25', '2022-08-25', '2022-08-27'),
(217, 'AG005', 'BK001', '0000-00-00', '0000-00-00', '2022-08-27'),
(218, 'AG005', 'BK001', '2022-08-28', '2022-08-29', '2022-08-27'),
(219, 'AG005', 'BK001', '2022-08-28', '2022-08-29', '2022-08-28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
