-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2024 pada 11.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id` int(10) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_agama`
--

INSERT INTO `tbl_agama` (`id`, `agama`) VALUES
(1, 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cross_auth`
--

CREATE TABLE `tbl_cross_auth` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_cross_auth`
--

INSERT INTO `tbl_cross_auth` (`id`, `user`, `waktu`, `ket`) VALUES
(1, '11111', '2024-09-13 15:07:18', 'Pengguna dengan username 11111, nama: prof Dorikhi Melakukan cross authority ke Admin dengan akses sebagai Rw'),
(2, '789786578756', '2024-09-17 17:21:57', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai Mahasiswa'),
(3, '', '2024-09-17 17:22:01', 'Pengguna dengan username  , nama_user :  melakukan cross authority dengan akses sebagai Administrator'),
(4, '789786578756', '2024-09-17 17:24:53', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(5, '789786578756', '2024-09-17 17:25:42', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(6, '789786578756', '2024-09-17 17:27:06', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(7, '789786578756', '2024-09-17 17:27:13', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(8, '789786578756', '2024-09-17 17:27:21', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(9, '789786578756', '2024-09-17 17:28:17', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai Mahasiswa'),
(10, '789786578756', '2024-09-17 17:28:24', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai Mahasiswa'),
(11, '789786578756', '2024-09-17 17:30:30', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(12, '789786578756', '2024-09-17 17:30:38', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(13, '789786578756', '2024-09-17 17:31:41', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(14, '789786578756', '2024-09-17 17:31:48', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(15, '789786578756', '2024-09-17 17:32:32', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai '),
(16, 'rw', '2024-09-17 17:35:53', 'Pengguna dengan username rw , nama : bapak rw melakukan cross authority dengan akses sebagai Rw'),
(17, 'rw', '2024-09-17 17:37:39', 'Pengguna dengan username rw , nama : bapak rw melakukan cross authority dengan akses sebagai Rw'),
(18, 'rw', '2024-09-17 17:40:08', 'Pengguna dengan username rw , nama : bapak rw melakukan cross authority dengan akses sebagai Dosen'),
(19, '789786578756', '2024-09-17 17:44:02', 'Pengguna dengan username 789786578756 , nama : Candrasa Asmaradanta melakukan cross authority dengan akses sebagai Mahasiswa'),
(20, 'rt', '2024-09-18 18:15:31', 'Pengguna dengan username rt , nama_user : Samad melakukan cross authority dengan akses sebagai '),
(21, 'rt', '2024-09-18 18:15:56', 'Pengguna dengan username rt , nama_user : Samad melakukan cross authority dengan akses sebagai '),
(22, 'rt', '2024-09-18 18:16:03', 'Pengguna dengan username rt , nama_user : Samad melakukan cross authority dengan akses sebagai '),
(23, 'rt', '2024-09-18 18:16:12', 'Pengguna dengan username rt , nama_user : Samad melakukan cross authority dengan akses sebagai '),
(24, 'rt', '2024-09-18 18:16:19', 'Pengguna dengan username rt , nama_user : Samad melakukan cross authority dengan akses sebagai '),
(25, 'rt', '2024-09-18 18:17:55', 'Pengguna dengan username rt , nama_user : Samad melakukan cross authority dengan akses sebagai '),
(26, 'rt', '2024-09-18 18:18:45', 'Pengguna dengan username rt , nama_user : Samad melakukan cross authority dengan akses sebagai ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_pengantar`
--

CREATE TABLE `tbl_kategori_pengantar` (
  `id_kategori` int(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori_pengantar`
--

INSERT INTO `tbl_kategori_pengantar` (`id_kategori`, `keterangan`) VALUES
(1, 'Surat Keterangan Domisili'),
(2, 'Surat Bantuan PKH'),
(3, 'Surat Keterangan Kelahiran'),
(4, 'Surat Keterangan Kematian'),
(5, 'Surat Keterangan Usaha'),
(6, 'Surat Keterangan Pengantar Nikah'),
(7, 'Surat Keterangan Izin Keramaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id` int(2) NOT NULL,
  `elemen` varchar(50) NOT NULL,
  `lokasi_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id`, `elemen`, `lokasi_file`) VALUES
(1, 'logo-app', '../img/img-logoapp1725274560.png'),
(2, 'logo-title-bar', '../img/img-logotitle1725276970.png'),
(3, 'SIGAP DESA APP', 'kosong'),
(4, 'Sistem Informasi Pengantar Desa', 'kosong'),
(5, 'Desa Blumbang Gereng', 'kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`nik`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
('789786578756', 'Candrasa', 'Laki-laki', 'tegal', '089988776655');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`username`, `password`, `nama_user`, `status`) VALUES
('09876789807968', '3f2d11758f1729b39d8d79fe54a88a66f8bd59f5', 'suparjangkio', 1),
('66666666666666666666', 'bf05c4c195c17ea94eb438dac114e25564c165a0', 'Juki Markono', 1),
('6878656567', '91a20ecb6b58172cc4dc143541121ca279676f00', 'fgfgghfghj', 1),
('789786578756', 'f0c70fbf516d17fa49cde450f6747be69172b4d2', 'Candrasa', 2),
('87546355465768', 'f02ccf9b419ad923c6e9b8b3f2b08532de003d74', 'Dakim', 3),
('admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'administrator', 0),
('penduduk', '230ec8df3aca17589bbc37b1fa6b1b37d295ef18', 'dendi zidni ilman', 2),
('rt', '97ced4f7d017d6cce770b961f28642492093b965', 'Samad', 3),
('rw', '8cb2237d0679ca88db6464eac60da96345513964', 'bapak rw', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permohonan_surat`
--

CREATE TABLE `tbl_permohonan_surat` (
  `id_permohonan` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `id_kategori_pengantar` int(20) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rt`
--

CREATE TABLE `tbl_rt` (
  `id` int(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `ketua` varchar(200) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rt`
--

INSERT INTO `tbl_rt` (`id`, `nik`, `rt`, `ketua`, `kontak`, `alamat`) VALUES
(3, '87546355465768', '009', 'Dakim', '0876767675646', 'Jalan jalan ke Pondok Gede');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rw`
--

CREATE TABLE `tbl_rw` (
  `id` int(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `ketua` varchar(254) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rw`
--

INSERT INTO `tbl_rw` (`id`, `nik`, `rw`, `ketua`, `kontak`, `alamat`) VALUES
(1, '66666666666666666666', '001', 'Juki Markono', '085602382038', 'Jalan Kenanga Nomor 99 Kampung Baru Kota Bekasi Jawa Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_cross_auth`
--
ALTER TABLE `tbl_cross_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori_pengantar`
--
ALTER TABLE `tbl_kategori_pengantar`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tbl_permohonan_surat`
--
ALTER TABLE `tbl_permohonan_surat`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indeks untuk tabel `tbl_rt`
--
ALTER TABLE `tbl_rt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_rw`
--
ALTER TABLE `tbl_rw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_cross_auth`
--
ALTER TABLE `tbl_cross_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_pengantar`
--
ALTER TABLE `tbl_kategori_pengantar`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_permohonan_surat`
--
ALTER TABLE `tbl_permohonan_surat`
  MODIFY `id_permohonan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rt`
--
ALTER TABLE `tbl_rt`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_rw`
--
ALTER TABLE `tbl_rw`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
