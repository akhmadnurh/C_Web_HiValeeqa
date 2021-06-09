-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2021 pada 14.49
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hi.valeeqa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_user`, `id_produk`, `jumlah`) VALUES
(1, 14, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_produk`, `jumlah`) VALUES
(1, 14, 3),
(2, 14, 1),
(6, 14, 40),
(7, 15, 5),
(7, 18, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_produk` int(11) NOT NULL,
  `lokasi_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_produk`, `lokasi_gambar`) VALUES
(14, 'images/product-img/yumna1.png'),
(15, 'images/product-img/yumna2.png'),
(16, 'images/product-img/yumna3.png'),
(17, 'images/product-img/yumna4.png'),
(18, 'images/product-img/yumna5.png'),
(19, 'images/product-img/yumna6.png'),
(20, 'images/product-img/chayra1.png'),
(21, 'images/product-img/chayra2.png'),
(22, 'images/product-img/chayra3.png'),
(23, 'images/product-img/chayra4.png'),
(24, 'images/product-img/chayra5.png'),
(25, 'images/product-img/chayra6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Chayra Abaya'),
(2, 'Yumna Dress');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(70) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `bahan` varchar(30) NOT NULL,
  `harga` int(8) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `best_seller` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_barang`, `warna`, `bahan`, `harga`, `keterangan`, `stok`, `best_seller`) VALUES
(2, 1, 'Chayra Abaya', 'Black', 'Wollycrape', 140000, '-', 4, 1),
(3, 1, 'Chayra Abaya', 'Caramel', 'Wollycrape', 150000, '-\r\n', 4, 0),
(14, 2, 'Yumna Dress 1', 'Milo', 'Wolpeach Exclusive', 177000, '-', 25, 0),
(15, 2, 'Yumna Dress 2', 'Dusty Peach', 'Wolpeach Exclusive', 177000, '-', 80, 0),
(16, 2, 'Yumna Dress 3', 'Dark Army', 'Wolpeach Exclusive', 177000, '-', 7, 1),
(17, 2, 'Yumna Dress 4', 'Milo', 'Wolpeach Exclusive', 177000, '-', 43, 0),
(18, 2, 'Yumna Dress 5', 'Dusty Peach', 'Wolpeach Exclusive', 177000, '-', 23, 0),
(19, 2, 'Yumna Dress 6', 'Dark Army', 'Wolpeach Exclusive', 177000, '-', 12, 0),
(20, 1, 'Chayra Abaya 1', 'Caramel', 'Wollycrepe', 167000, '-', 33, 0),
(21, 1, 'Chayra Abaya 2', 'Black', 'Wollycrepe', 167000, '-', 55, 0),
(22, 1, 'Chayra Abaya 3', 'Gray', 'Wollycrepe', 167000, '-', 2, 0),
(23, 1, 'Chayra Abaya 4', 'Caramel', 'Wollycrepe', 167000, '-', 78, 0),
(24, 1, 'Chayra Abaya 5', 'Black', 'Wollycrepe', 167000, '-', 67, 0),
(25, 1, 'Chayra Abaya 6', 'Gray', 'Wollycrepe', 167000, '-', 16, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `nama` varchar(70) NOT NULL,
  `rekening` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `nomor_wa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`nama`, `rekening`, `bank`, `nomor_wa`) VALUES
('Akhmad Nur Hidayatulloh', '212233', 'BNI', '6285784197425');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_pembayaran` varchar(15) NOT NULL,
  `jenis_pengiriman` varchar(15) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `tabungan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `resi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `jenis_pembayaran`, `jenis_pengiriman`, `tanggal_transaksi`, `tabungan`, `total`, `status`, `resi`) VALUES
(1, 2, 'tabungan', 'kurir', '2020-12-01', 137000, 137000, 'selesai', '-'),
(2, 2, 'cash', 'cod', '2020-12-02', 0, 137000, 'menunggu kirim', '-'),
(6, 2, 'cash', 'kurir', '2021-01-16', 0, 7100000, 'proses kirim', '-'),
(7, 2, 'tabungan', 'kurir', '2021-01-16', 10000, 1436000, 'gagal', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran`
--

CREATE TABLE `ukuran` (
  `id_produk` int(11) NOT NULL,
  `lebar_dada` int(3) NOT NULL,
  `panjang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukuran`
--

INSERT INTO `ukuran` (`id_produk`, `lebar_dada`, `panjang`) VALUES
(14, 100, 136),
(15, 100, 136),
(16, 100, 136),
(17, 100, 136),
(18, 100, 136),
(19, 100, 136),
(20, 100, 137),
(21, 100, 137),
(22, 100, 137),
(23, 100, 137),
(24, 100, 137),
(25, 100, 137);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_wa` varchar(15) NOT NULL,
  `level` int(1) NOT NULL,
  `lupa_password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `pass`, `nama`, `jenis_kelamin`, `alamat`, `nomor_wa`, `level`, `lupa_password`) VALUES
(1, '07akhmadnur@gmail.com', '12345', 'Akhmad Nur Hidayatulloh', 'L', 'Mojokerto', '085784197425', 1, 'ya'),
(2, 'aaa@gmail.com', 'aaa', 'Tony Chopper', 'L', 'Jombang', '123213123', 0, 'tidak'),
(3, 'aku@gmail.com', 'aku', 'aku', 'P', 'Jember', '6281211111111', 0, 'ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `id_user` (`id_user`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori` (`id_kategori`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  ADD CONSTRAINT `ukuran_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
