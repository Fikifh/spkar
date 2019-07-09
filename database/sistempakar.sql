-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jul 2019 pada 17.37
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_pakar`
--

CREATE TABLE `admin_pakar` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_pakar`
--

INSERT INTO `admin_pakar` (`username`, `password`) VALUES
('mj', '007de96adfa8b36dc2c8dd268d039129');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `kode_gangguan` varchar(100) NOT NULL,
  `nama_gangguan` varchar(50) NOT NULL,
  `solusi` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`kode_gangguan`, `nama_gangguan`, `solusi`, `ket`) VALUES
('X001', 'Narsistik ringan', 'op', 'l');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(100) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `mb` double NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `pertanyaan`, `mb`, `ket`) VALUES
('g1', '', 'Apakah anda merasa diri anda istimewa ?', 0.6, ''),
('g2', '', 'pakah anda tenggelam dalam hayalan akan kesuksesan, kekuasaan, kecerdasan, kecantikan atau percintaan yang ideal ?', 0.6, ''),
('g3', '', 'pakah anda merasa tidak senang bergabung dengan orang yang tidak sepaham dengan anda ?', 0.8, ''),
('g4', '', 'Ketika anda memiliki suatu capaian, apakah anda merasa terlalu bangga atas pencapaian anda ?', 0.8, ''),
('g5', '', 'Apakah anda menuntut suatu hak ketika ada suatu permasalah ? ', 0.6, ''),
('g6', '', 'Apakah anda bersifat eksploitasi terhadap orang lain ? ', 0.7, ''),
('g7', '', 'Kurangkah anda dalam rasa empati ?', 1, ''),
('g8', '', 'Apakah anda merasa iri dengan orang lain karena anda tidak lebih dari orang lain ?', 1, ''),
('g9', '', 'Apakah diri anda arogan dan tidak ingin bersosialisasi dengan orang ?  \r\n', 0.8, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE `relasi` (
  `kode_relasi` varchar(100) NOT NULL,
  `kode_gejala` varchar(200) NOT NULL,
  `kode_gangguan` varchar(100) NOT NULL,
  `nilai_mb` double NOT NULL,
  `nilai_md` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`kode_relasi`, `kode_gejala`, `kode_gangguan`, `nilai_mb`, `nilai_md`) VALUES
('Z001', '[G001] Waham Kebesaran akan dirinya', '[X001]Narsistik ringan ', 0.8, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `diagnosa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
