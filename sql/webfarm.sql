-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 05:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `isi`, `id_kategori`) VALUES
(0, '', '', '', 0),
(5, 'Limbah tempurung kelapa menjadi arang', 'gambar5.png', ' Milenial mencapai Rp4,5 juta per bulan.\n“Rata-rata Rp4,5 juta sebulan. Rp18 juta dalam 4 bulan atau sekali panen. (Sedangkan petani) lebah madu belum ada laporan,” kata Epi. \nEpi menuturkan, Dishut Jabar berkomitmen untuk mendorong peserta Program Petani Milenial budidaya jamur kayu dan lebih madu bisa mendapatkan penghasilan di atas upah rata-rata. Pasar yang luas dan offtaker yang sudah ada dapat mewujudkan target tersebut. Asalkan, katanya, para peserta konsisten. ', 1),
(6, 'Limbah tempurung kelapa menjadi arang', 'gambar6.png', ' Milenial mencapai Rp4,5 juta per bulan.\n“Rata-rata Rp4,5 juta sebulan. Rp18 juta dalam 4 bulan atau sekali panen. (Sedangkan petani) lebah madu belum ada laporan,” kata Epi. \nEpi menuturkan, Dishut Jabar berkomitmen untuk mendorong peserta Program Petani Milenial budidaya jamur kayu dan lebih madu bisa mendapatkan penghasilan di atas upah rata-rata. Pasar yang luas dan offtaker yang sudah ada dapat mewujudkan target tersebut. Asalkan, katanya, para peserta konsisten. ', 1),
(7, 'Pisang Bakar', 'gambar7.png', ' Pisang oli', 3),
(8, 'Limbah tempurung kelapa menjadi arang', 'gambar8.png', ' Milenial mencapai Rp4,5 juta per bulan.\n“Rata-rata Rp4,5 juta sebulan. Rp18 juta dalam 4 bulan atau sekali panen. (Sedangkan petani) lebah madu belum ada laporan,” kata Epi. \nEpi menuturkan, Dishut Jabar berkomitmen untuk mendorong peserta Program Petani Milenial budidaya jamur kayu dan lebih madu bisa mendapatkan penghasilan di atas upah rata-rata. Pasar yang luas dan offtaker yang sudah ada dapat mewujudkan target tersebut. Asalkan, katanya, para peserta konsisten. ', 1),
(9, 'Pisang Bakar', 'gambar9.png', ' Pisang oli', 3),
(10, 'Petani Milenial dari Bulukumba', 'gambar10.png', ' Manfaat dari batok kelapa atau tempurung kelapa ternyata sangat banyak. Bahkan mempunyai nilai guna dan jual. Seperti dibuat arang tempurung, kancing pakaian, asbak rokok, cangkir, sendok, pot bunga, dan kerajinan lainnya.\nAdalah Asrianto pemuda asal Desa Pantama, Kecamatan Kajang, Kabupaten Bulukumba. Mampu mengolah limbah tempurung kelapa menjado arang.', 3),
(11, 'Tanaman Hidroponik', 'gambar11.png', ' Pandemi membuat Khafidz (25) warga Keamatan Mijen, Kota Semarang berfikir kreatif. Mencari pekerjaan ketika pandemi cukup sulit, itulah yang dirasakan olehnya. Namun, dibalik kesulitan pasti ada kemudahan itula yang dia alami saat ini.\nKini dia menekuni bisnis tanaman hidroponik sejak pandemi. Dengan modal awal Rp2 juta, dia bisa memanfaatkan lahan keluarga untuk produksi tanaman hidroponik.  \nDari hasil jualan tanaman hidropnik itu, dia bisa untuk belasan juta rupiah setiap bulannya. Tanaman hidroponik yang dia tanam cukup berhasil, hal itu membuat banyak warga membeli tanaman di tempatnya.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kberita`
--

CREATE TABLE `kberita` (
  `id_kategori` int(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kberita`
--

INSERT INTO `kberita` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pohon'),
(2, 'Tanaman'),
(3, 'Kisah Pentani');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `email`, `nama`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('asdasd', 'SADASD', 'onlyramdan@apps.ipb.ac.id', 'b7abef22e0749171c4b4cb5197e8ea0f'),
('dindakusuma', 'dindakusuma', 'dindakusuma@apps.ipb.ac.id', '42f773c60b466027f14fd8cd22601719');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kberita`
--
ALTER TABLE `kberita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
