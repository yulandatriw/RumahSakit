-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2020 pada 07.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `id` int(5) NOT NULL,
  `namadokter` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_dokter`
--

INSERT INTO `tabel_dokter` (`id`, `namadokter`, `nohp`, `spesialis`, `jadwal`) VALUES
(10009, 'Anya Geraldine', '086543627189', 'Tulang', 'Setiap Hari, 09.00-19.00'),
(10010, 'Dara Arafah', '084532617862', 'Tulang', 'Sabtu-Minggu, 08.00-18.00'),
(10011, 'Ariana Grande', '089342516524', 'Kandungan', 'Jumat, 10.00-17.00'),
(10013, 'Putri Aisyah', '087456342513', 'Kandungan', 'Jumat, 08.00-17.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kamar`
--

CREATE TABLE `tabel_kamar` (
  `kodekamar` int(3) NOT NULL,
  `namakamar` varchar(50) NOT NULL,
  `namagedung` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kamar`
--

INSERT INTO `tabel_kamar` (`kodekamar`, `namakamar`, `namagedung`, `status`) VALUES
(66667, 'Cendana', 'Gedung Ali', 'Kosong'),
(66668, 'Melati', 'Gedung Ali', 'Terisi'),
(66669, 'Anggrek', 'Gedung Ali', 'Kosong'),
(66670, 'Mawar', 'Gedung Ali', 'Kosong'),
(66672, 'Dandelion', 'Gedung Ali', 'Terisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `noregistrasi` int(7) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `tgldaftar` date NOT NULL,
  `jenisrawat` varchar(50) NOT NULL,
  `kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`noregistrasi`, `namapasien`, `sakit`, `tgldaftar`, `jenisrawat`, `kamar`) VALUES
(3210003, 'Syintia Nur Lela', 'Luka Bakar', '2020-12-10', 'Rawat Inap', 'Melati'),
(3210004, 'Angkasa Megantara', 'Demam', '2020-12-08', 'Rawat Inap', 'Cendana'),
(3210008, 'Maharatu Senjaya', 'Luka Bakar', '2020-12-24', 'Rawat Inap', 'Cendana'),
(3210009, 'Cantika Permana', 'Demam', '2020-12-14', 'Rawat Jalan', '-'),
(3210010, 'Cantika Permana', 'Demam', '2020-12-24', 'Rawat Jalan', '-'),
(3210011, 'Indah Pertiwi', 'Luka Bakar', '2020-12-22', 'Rawat Inap', 'Cendana'),
(3210012, 'Maharatu Senjaya', 'Luka Bakar', '2020-12-22', 'Rawat Jalan', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pembayaran`
--

CREATE TABLE `tabel_pembayaran` (
  `noregis` int(7) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `tgldaftar` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `jenisrawat` varchar(50) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pembayaran`
--

INSERT INTO `tabel_pembayaran` (`noregis`, `namapasien`, `sakit`, `spesialis`, `tgldaftar`, `tglkeluar`, `jenisrawat`, `kamar`, `harga`) VALUES
(1110006, 'Anjayani Putri', 'Demam', 'Umum', '2020-12-22', '0000-00-00', 'Rawat Jalan', 'Cendana', 150000),
(1110010, 'Angkasa Megantara', 'Luka Bakar', 'Kulit', '2020-12-24', '2020-12-26', 'Rawat Inap', 'Cendana', 3150000),
(1110011, 'Indah Pertiwi', 'Demam', 'Kandungan', '2020-12-20', '2020-12-22', 'Rawat Inap', 'Mawar', 2400000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  ADD PRIMARY KEY (`kodekamar`);

--
-- Indeks untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`noregistrasi`);

--
-- Indeks untuk tabel `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  ADD PRIMARY KEY (`noregis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10014;

--
-- AUTO_INCREMENT untuk tabel `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  MODIFY `kodekamar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66674;

--
-- AUTO_INCREMENT untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `noregistrasi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3210013;

--
-- AUTO_INCREMENT untuk tabel `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  MODIFY `noregis` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1110012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
