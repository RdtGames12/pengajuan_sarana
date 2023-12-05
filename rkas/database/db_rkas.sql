-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 01.46
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

--
-- Dumping data untuk tabel `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `jenis`) VALUES
(1, 'Jurusan'),
(2, 'Waka'),
(3, 'TU'),
(4, 'Kepsek'),
(5, 'Admin'),
(6, 'Validator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alat`
--

CREATE TABLE `tb_alat` (
  `id_alat` int(11) NOT NULL,
  `sumber_dana` varchar(10) NOT NULL,
  `tahun_ajuan` int(4) NOT NULL,
  `item` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(20) NOT NULL,
  `kebutuhan_untuk` text NOT NULL,
  `jurusan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `sumber_dana`, `tahun_ajuan`, `item`, `merk`, `spesifikasi`, `harga`, `qty`, `kebutuhan_untuk`, `jurusan`) VALUES
(1, 'BOS', 2021, 'Obeng', '--', 'Obeng -', 25000, 3, 'Membuka Baud', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bagian`
--

CREATE TABLE `tb_bagian` (
  `id_bagian` int(4) NOT NULL,
  `nama_bagian` varchar(60) NOT NULL,
  `id_akses` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `nama_bagian`, `id_akses`) VALUES
(1, 'Mekatronika', 1),
(2, 'PPLG', 1),
(3, 'Kimia', 1),
(4, 'Animasi', 1),
(5, 'DKV', 1),
(6, 'Pemesinan', 1),
(7, 'Wakil Kepala Sekolah', 2),
(8, 'Tata Usaha', 3),
(9, 'Kepala Sekolah', 4),
(10, 'Admin', 5),
(11, 'Validator', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id_bahan` int(11) NOT NULL,
  `sumber_dana` varchar(10) NOT NULL,
  `tahun_ajuan` int(4) NOT NULL,
  `item` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(20) NOT NULL,
  `kebutuhan_untuk` text NOT NULL,
  `jurusan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bahan`
--

INSERT INTO `tb_bahan` (`id_bahan`, `sumber_dana`, `tahun_ajuan`, `item`, `merk`, `spesifikasi`, `harga`, `qty`, `kebutuhan_untuk`, `jurusan`) VALUES
(1, 'BOS', 2021, 'Processor', 'Intel', 'I3 7100', 1250000, 3, 'Upgrade PC', ''),
(2, 'BOS', 2021, 'Processor', 'AMD', 'Ryzen 3 3500U', 4000000, 5, 'Upgrade PC', ''),
(3, 'BOS', 2021, 'tes', 'tes', 'tes', 125, 125, 'tes', 'Animasi');

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
  `qty` int(20) NOT NULL,
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
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `nama`, `password`, `id_bagian`, `status`) VALUES
(1, 'Admin', 'Administrator', '@SMKN2cmi', 10, ''),
(2, 'Meka', 'Mekatronika', '@MEKAcmi', 1, ''),
(3, 'PPLG', 'Pengembangan Perangkat Lunak dan GIM', '@PPLGcmi', 1, ''),
(4, 'Kimia', 'KIMIA', '@KIMIAcmi', 1, ''),
(5, 'Animasi', 'Animasi', '@Animacmi', 1, ''),
(6, 'DKV', 'Desain Komunikasi Visual', '@DKVcmi', 1, ''),
(7, 'TPA', 'Teknik Pemesinan', '@TPAcmi', 1, ''),
(8, 'Wakepsek', 'Wakil Kepala Sekolah\r\n', '@WAKEPSEKcmi', 2, ''),
(9, 'TU', 'Tata Usaha', '@TUcmi', 3, ''),
(10, 'KEPSEK', 'Kepala Sekolah', '@KEPSEKcmi', 4, ''),
(11, 'VDTR', 'Validator', '@VDTRcmi', 11, '');

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
-- Indeks untuk tabel `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indeks untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indeks untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id_bahan`);

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
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id_akses` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_alat`
--
ALTER TABLE `tb_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  MODIFY `id_bagian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_det_alat`
--
ALTER TABLE `tb_det_alat`
  MODIFY `id_det` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
