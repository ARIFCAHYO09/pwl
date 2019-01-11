-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2019 at 09:27 AM
-- Server version: 10.2.17-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u390197436_lokal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('arif.0009@students.amikom.ac.id', 'telotelo'),
('admin@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `alamat_member`
--

CREATE TABLE `alamat_member` (
  `id_alamat` int(11) NOT NULL,
  `provinsi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kabupaten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Desa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Kode Pos` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'pakaian'),
(3, 'mainan'),
(4, 'aksesoris'),
(5, 'dekorasi'),
(6, 'properti'),
(7, 'perabotan');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `nama`, `email`, `subject`, `pesan`) VALUES
(1, '', 'admin@gmail.com', 'dsds', ''),
(2, 'sdhsdklsk;ds', 'admin@gmail.com', 'sdsds', 'sdsdsds'),
(3, 'zxc', 'zxc@gmail.com', 'zcccc', 'dfnskdjfkldjfklan'),
(4, 'zxc', 'zxc@gmail.com', 'zcccc', 'dfnskdjfkldjfklan'),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'aaaa', 'aa@mail.com', 'qwe', 'qwqwqwqwqwqwqw'),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, 'dsd', 'sdsd@gamil.com', 'sds', 'dsd'),
(14, 'dsd', 'sdsd@gamil.coms', 'dsds', 'sdsd'),
(15, '221', 'cahyo@gmail.com', '22', '222'),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, 'dsd', 'sdsd@gamil.coms', 'dsds', 'sdsd'),
(22, 'xxxzz', 'zx@mail.com', 'asss', 'azzzzzzzzzzzzzzzzzzzzzzzzz'),
(23, 'xxxzz', 'zx@mail.com', 'asss', 'azzzzzzzzzzzzzzzzzzzzzzzzz'),
(24, 'tttd', 'a@mail.com', 'dffd', 'MMMMMMMMMMMMMMMM');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `status_telp` varchar(15) NOT NULL,
  `status_email` int(1) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kode_pos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_depan`, `nama_belakang`, `email`, `password`, `alamat`, `telp`, `status_telp`, `status_email`, `jenis_kelamin`, `tgl_lahir`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `kode_pos`) VALUES
(1, 'cahyo', 'admin', 'admin@gmail.com', 'ptptwt', 'Yogyakarta', '851100018', '0', 0, '', '0000-00-00', '', '', '', '', ''),
(2, 'aa', 'aaaa', 'aaa@amikom.id', 'assasa', 'assa', '222', '0', 0, 'laki', '2018-12-05', '', '', '', '', ''),
(3, 'cahyp', 'cah', 'ac@am.id', '22', '222', '22', '0', 0, 'laki', '2018-12-02', '', '', '', '', ''),
(4, 'arife', 'cahyo prasetyoee', 'arif.0009@students.amikom.ac.id', 'MasCahyo11111', 'jl nusa indah no 130b', '087826021994', '1', 1, 'Pria', '2018-06-06', 'Bali', 'Aceh Barat', 'condongcatur', 'condong catur', '12345'),
(5, 'arifff', 'cahyooo prasetyo', 'mascahyo15@gmail.com', 'Cahyo11111', 'yogyakarta', '', '', 0, 'Pria', '2018-12-05', '', '', '', '', ''),
(6, 'cahyo', 'cahyooo', 'arif.009@students.amikom.ac.id', 'Cahyo12345', '222', '', '', 0, 'Pria', '2018-12-12', '', '', '', '', ''),
(7, 'cahyo', 'wikwik', 'minotour43@gmail.com', 'Jogja123', 'jogja', '', '', 0, 'Pria', '2018-12-20', '', '', '', '', ''),
(8, 'asd', 'dsa', 'asd@mail.com', 'Qq123456789', 'amikom', '', '', 0, 'Pria', '2018-11-06', '', '', '', '', ''),
(9, 'AA', 'PP', '4ndre.atmaja@gmail.com', 'Qwaszx1234', 'bakungan', '', '', 0, 'Pria', '2018-02-16', '', '', '', '', ''),
(10, 'arif.9@students.amikom.ac.id', '11111', 'arif.9@students.amikom.ac.id', 'Cahyo222222', 'Chhh', '92929292', '', 0, 'Pria', '2018-12-04', 'ueue', 'lkak', 'lkakla', 'saks', 'askl'),
(11, 'asd', 'dsa', 'a@mail.com', 'Qq12345678', 'rt 01/ rw 01', '123456789', '', 0, 'Pria', '2018-11-26', 'yogyakarta', 'kulonprogo', 'temon', 'depok', '55555'),
(12, 'TOP', 'PAY', 't@mail.com', 'Qq12345678', 'rt 01/ rw 01', '08912234455', '', 0, 'Pria', '2018-11-27', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `harga` int(12) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `direktori_gambar` varchar(100) NOT NULL,
  `direktori_gambar2` varchar(100) NOT NULL,
  `direktori_gambar3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_toko`, `nama_produk`, `jumlah_stok`, `harga`, `deskripsi`, `direktori_gambar`, `direktori_gambar2`, `direktori_gambar3`) VALUES
(1, 3, 1, 'mainan tradisional', 2, 9000, '		    mainan produk terbaru		', '1gambar1.jpg', '1gambar2.jpg', '1gambar3.jpg'),
(2, 3, 1, 'mainan', 1, 1000, 'produk ini', 'produk (2).jpg', '', ''),
(3, 3, 1, 'produk baru', 2, 9000, 'mainan tradisional', 'produk (3).jpg', '', ''),
(4, 3, 1, 'mainmain', 5, 8000, 'produk A', 'produk (4).jpg', '', ''),
(5, 2, 2, 'Batik', 4, 120000, 'Batik jogja', 'produk (5).jpg', 'produk (4).jpg', ''),
(6, 4, 3, 'gantungan kunci', 3, 90000, 'gantungan kunci Unik', 'produk (6).jpg', '', ''),
(7, 6, 3, 'hiasan', 4, 8000, 'hiasan rumah', 'product-4.jpg', '', ''),
(8, 6, 3, 'Hiasan unik sekali', 21, 120000, '		    		    		    hiasanMu	aaaa					', '8gambar1.jpg', '8gambar2.jpg', '8gambar3.jpg'),
(9, 5, 2, 'dekorasi baru', 7, 8000, 'dekorasi produk yang paling baru', 'produk (9).jpg', '', ''),
(10, 4, 0, 'pintu antik', 10, 3000000, 'pintu antic mahal', '10gambar1.jpg', '10gambar2.jpg', '10gambar3.jpg'),
(11, 2, 0, 'sarung mahal antik', 29, 999000, 'sarung mahal antic kuno', '11gambar1.jpg', '11gambar2.jpg', '11gambar3.jpg'),
(12, 4, 0, 'pintu antik', 1, 30000, '		    pintu antic mahal		', '12gambar1.jpg', '12gambar2.jpg', '12gambar3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk_transaksi`
--

CREATE TABLE `produk_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `ulasan_bintang` int(1) NOT NULL,
  `ulasan_deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_transaksi`
--

INSERT INTO `produk_transaksi` (`id_transaksi`, `id_produk`, `jumlah_produk`, `catatan`, `ulasan_bintang`, `ulasan_deskripsi`) VALUES
(2, 2, 5, '', 0, ''),
(5, 2, 1, '', 0, ''),
(5, 10, 2, '', 0, ''),
(9, 2, 1, '', 0, ''),
(9, 10, 2, '', 0, ''),
(12, 2, 1, '', 0, ''),
(12, 10, 2, '', 0, ''),
(13, 1, 1, '', 0, ''),
(14, 1, 1, '', 0, ''),
(15, 1, 2, '', 0, ''),
(16, 1, 3, '', 0, ''),
(20, 8, 1, '', 0, ''),
(20, 1, 1, '', 0, ''),
(21, 8, 1, '', 0, ''),
(21, 1, 2, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status_pembayaran` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `logistik` varchar(50) NOT NULL,
  `jenis_logistik` varchar(100) NOT NULL,
  `biaya_logistik` int(11) NOT NULL,
  `resi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `tanggal`, `status_pembayaran`, `bukti_pembayaran`, `logistik`, `jenis_logistik`, `biaya_logistik`, `resi`) VALUES
(1, 2, '2019-01-04', '0', '12', 'a', 'b', 0, ''),
(2, 4, '2019-01-04', '1', '', 'jne', 'REG', 47, ''),
(3, 4, '2019-01-04', '1', '11', 'jne', 'REG', 47000, ''),
(4, 4, '2019-01-04', '1', '11', 'jne', 'REG', 47000, '2222'),
(5, 4, '2019-01-04', '0', '5bukti.jpg', 'jne', 'REG', 47000, ''),
(6, 4, '2019-01-04', '0', '', 'jne', 'REG', 47000, ''),
(7, 4, '2019-01-04', '0', '', 'jne', 'REG', 47000, ''),
(8, 4, '2019-01-04', '0', '', 'jne', 'REG', 47000, ''),
(9, 4, '2019-01-04', '0', '', 'jne', 'REG', 47000, ''),
(10, 4, '2019-01-04', '0', '', 'jne', 'REG', 47000, ''),
(11, 4, '2019-01-04', '0', '', 'jne', 'REG', 47000, ''),
(12, 4, '2019-01-04', '0', '', 'jne', 'REG', 47000, ''),
(13, 4, '2019-01-06', '0', '', '', '', 0, ''),
(14, 4, '2019-01-06', '0', '', 'jne', 'REG', 57000, ''),
(15, 4, '2019-01-06', '0', '', 'jne', 'YES', 30000, ''),
(16, 4, '2019-01-06', '0', '', 'jne', 'OKE', 24000, ''),
(17, 4, '2019-01-06', '0', '', 'jne', 'REG', 36000, ''),
(18, 4, '2019-01-06', '0', '', '', '', 0, ''),
(19, 4, '2019-01-06', '0', '', 'tiki', 'REG', 9000, ''),
(20, 4, '2019-01-06', '0', '', 'jne', 'REG', 36000, ''),
(21, 4, '2019-01-06', '0', '21bukti.jpg', 'jne', 'YES', 30000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_member`
--
ALTER TABLE `alamat_member`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `produk_transaksi`
--
ALTER TABLE `produk_transaksi`
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_member`
--
ALTER TABLE `alamat_member`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk_transaksi`
--
ALTER TABLE `produk_transaksi`
  ADD CONSTRAINT `produk_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
