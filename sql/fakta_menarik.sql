-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 05:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakta_menarik`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakta`
--

CREATE TABLE `fakta` (
  `id_fakta` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakta`
--

INSERT INTO `fakta` (`id_fakta`, `judul`, `gambar`, `isi`, `id_kategori`) VALUES
(1, 'Patut Dicoba! Cara Popok Bayi Menjadi Pupuk', 'pupuk_bayi.png', 'Kalau berbicara tentang popok bayi, mungkin kamu akan langsung berpikir limbah popok bayi tidak ada gunanya dan sulit terurai. Padahal, ada cara mudah untuk memanfaatkan popok bayi menjadi pupuk. Popok bayi atau diapers merupakan salah satu limbah yang kerap kali menjadi masalah pada lingkungan. Berdasarkan faktanya, diapers baru dapat terurai pada waktu 100 tahun. Di berbagai wilayah Indonesia khususnya yang sering terkena banjir, limbah diapers ini seringkali terbawa arus hingga sampai ke perumahan warga.', 1),
(2, 'Kotoran Manusia Ternyata Bisa Jadi Pupuk', 'pupuk.png', 'Selama ini mungkin kamu berpikir bahwa kotoran manusia tidak ada gunanya bahkan hanya dapat mencemarkan lingkungan saja dengan bau yang tidak sedap. Padahal kamu bisa saja membuat fasilitas toilet kompos. Tempat wisata alam dan pedesaan menjadi sasaran utama untuk pembuatan toilet kompos agar bisa mencegah pencemaran lingkungan sehingga kotoran manusia tersebut dapat dikumpulkan dan diolah agar menjadi pupuk kompos. Penasaran gimana cara untuk membuat toilet kompos tersebut? Yuk simak!', 1),
(3, 'Memanfaatkan Sampah Organik Sebagai Kompos', 'kompos.png', 'Pengolahan sampah rumah tangga menjadi kompos memiliki manfaat ganda, yaitu mengatasi masalah sampah rumah tangga, sekaligus mendapatkan pupuk organik yang sangat bermutu.', 1),
(4, 'Menarik! Pohon Kedondong Dapat Menghasilkan Aliran Listrik', 'pohon_kedondong.png', 'Seorang anak bernama Naufal berusia belasan tahun berhasil menciptakan inovasi teknologi pertanian yaitu energi listrik dari pohon kedondong, salah satu pohon buah-buahan yang juga termasuk produk pertanian asli Indonesia. Alasan Naufal memilih pohon kedondong karena dapat menghasilkan arus listrik dengan bantuan bahan tembaga, logam, dan kain atau tisu.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kfakta`
--

CREATE TABLE `kfakta` (
  `id_kategori` int(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kfakta`
--

INSERT INTO `kfakta` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pupuk'),
(2, 'Pohon'),
(3, 'Tanaman'),
(4, 'Bibit');

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
('dindakusuma', 'dindakusuma', 'dindakusuma@apps.ipb.ac.id', '42f773c60b466027f14fd8cd22601719'),
('kharisma01', 'Fiona Kharismatunnisaa', 'fionakharisma01@gmail.com', '370bbef2027a7ae37a826ff02cd94756');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakta`
--
ALTER TABLE `fakta`
  ADD PRIMARY KEY (`id_fakta`);

--
-- Indexes for table `kfakta`
--
ALTER TABLE `kfakta`
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
