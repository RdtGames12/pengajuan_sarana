-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 07.02
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
-- Database: `db_rkas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ajuan_alat`
--

CREATE TABLE `tb_ajuan_alat` (
  `id_ajuan` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `tgl_ajuan` datetime NOT NULL,
  `tahun` int(4) NOT NULL,
  `total` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `sumber_dana` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ajuan_keg`
--

CREATE TABLE `tb_ajuan_keg` (
  `id_ajuan_keg` int(4) NOT NULL,
  `id_user_keg` int(4) NOT NULL,
  `tgl_ajuan` datetime NOT NULL,
  `tahun` int(4) NOT NULL,
  `total` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `sumber_dana` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(4) NOT NULL,
  `jenis` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bagian`
--

CREATE TABLE `tb_bagian` (
  `id_bagian` int(4) NOT NULL,
  `nama_bagian` varchar(60) NOT NULL,
  `id_akses` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_det_alat`
--

CREATE TABLE `tb_det_alat` (
  `id_det` int(4) NOT NULL,
  `id_ajuan` int(4) NOT NULL,
  `item` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `pajak` int(10) NOT NULL,
  `sub_total` int(10) NOT NULL,
  `kebutuhan_untuk` text NOT NULL,
  `link_siplah` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_det_keg`
--

CREATE TABLE `tb_det_keg` (
  `id_det` int(4) NOT NULL,
  `id_ajuan` int(4) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `hari` char(7) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `orang` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas`
--

CREATE TABLE `tb_kas` (
  `id_trans` int(4) NOT NULL,
  `tgl` date NOT NULL,
  `diterima_dari` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `sumber_dana` int(11) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemasukan`
--

CREATE TABLE `tb_pemasukan` (
  `id_pemasukan` int(4) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `sumber_dana` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `diterima dari` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id_pemasukan` int(4) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `sumber_dana` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `diterima dari` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status_ajuan`
--

CREATE TABLE `tb_status_ajuan` (
  `id_status` int(4) NOT NULL,
  `id_ajuan` int(4) NOT NULL,
  `tgl` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `periode_cair` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `nama` char(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_bagian` int(4) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ajuan_alat`
--
ALTER TABLE `tb_ajuan_alat`
  ADD PRIMARY KEY (`id_ajuan`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_ajuan_keg`
--
ALTER TABLE `tb_ajuan_keg`
  ADD PRIMARY KEY (`id_ajuan_keg`),
  ADD UNIQUE KEY `id_user_keg` (`id_user_keg`);

--
-- Indeks untuk tabel `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  ADD PRIMARY KEY (`id_bagian`),
  ADD UNIQUE KEY `id_akses` (`id_akses`);

--
-- Indeks untuk tabel `tb_det_alat`
--
ALTER TABLE `tb_det_alat`
  ADD PRIMARY KEY (`id_det`),
  ADD UNIQUE KEY `id_ajuan` (`id_ajuan`);

--
-- Indeks untuk tabel `tb_det_keg`
--
ALTER TABLE `tb_det_keg`
  ADD PRIMARY KEY (`id_det`),
  ADD UNIQUE KEY `id_ajuan` (`id_ajuan`);

--
-- Indeks untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indeks untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indeks untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indeks untuk tabel `tb_status_ajuan`
--
ALTER TABLE `tb_status_ajuan`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `id_ajuan` (`id_ajuan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_bagian` (`id_bagian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_ajuan_alat`
--
ALTER TABLE `tb_ajuan_alat`
  MODIFY `id_ajuan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ajuan_keg`
--
ALTER TABLE `tb_ajuan_keg`
  MODIFY `id_ajuan_keg` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  MODIFY `id_bagian` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_det_alat`
--
ALTER TABLE `tb_det_alat`
  MODIFY `id_det` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_det_keg`
--
ALTER TABLE `tb_det_keg`
  MODIFY `id_det` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `id_trans` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  MODIFY `id_pemasukan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id_pemasukan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_status_ajuan`
--
ALTER TABLE `tb_status_ajuan`
  MODIFY `id_status` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;