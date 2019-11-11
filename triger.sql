-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 09.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triger`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `hp_lama` varchar(12) NOT NULL,
  `hp_baru` varchar(12) NOT NULL,
  `ubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `nim`, `hp_lama`, `hp_baru`, `ubah`) VALUES
(13, '1240000450', '089999', '089999', '2019-11-11 15:40:25'),
(14, '160740000987', '081112', '081112', '2019-11-11 15:40:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `alamat`, `hp`) VALUES
('121240000502', 'Angga', 'laki-laki', 'bangsri', '0844444'),
('122000259', 'Risa', 'Perempuan', 'jakarta', '085555'),
('1240000450', 'Sholihah', 'Perempuan', 'sinanggul', '089999'),
('1240000451', 'Afif', 'laki-laki', 'semarang', '083333'),
('160740000987', 'Tguh wijaya', 'laki-laki', 'Jambu Timur', '081112');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `log` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
	INSERT INTO log
	SET nim = old.nim,
	hp_lama = old.hp,
	hp_baru = new.hp,
	ubah = NOW();
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
