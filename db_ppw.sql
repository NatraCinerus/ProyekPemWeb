-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppw`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id_detail_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `exp` int(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  `github_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'php'),
(2, 'html'),
(4, 'css');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `waktu_terbit` date NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `poin` int(100) NOT NULL,
  `level_kelas` varchar(10) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `waktu_terbit`, `deskripsi`, `poin`, `level_kelas`, `id_kategori`) VALUES
(1, 'PHP Dasar', '2020-05-04', 'Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end website untuk mengatur logika dan interaksi dengan database.', 350, 'mudah', 1),
(2, 'Belajar HTML 5', '2020-05-04', 'HTML5 adalah versi terbaru dari html, banyak element-element yang menarik untuk kita pelajari disini. Terus update pengetahuan html kita dengan kelas ini', 90, 'mudah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(41, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(43, 'doni', '202cb962ac59075b964b07152d234b70', 'user'),
(48, 'test', '202cb962ac59075b964b07152d234b70', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `judul_video` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `id_kelas`, `judul_video`, `deskripsi`, `link`) VALUES
(1, 2, 'Intro html5', 'html5 adalah versi terbaru dari html, pastikan teman-teman sudah pernah belajar html sebelum mengikut kelas ini.', 'https://youtu.be/f6eEPEUVNqs'),
(2, 2, 'Struktur Dasar', 'Struktur dasar html yang akan kita manfaatkan dalam kelas ini. Kita akan melihat layout yang dibuat dengan html dan css.', 'https://youtu.be/kgvFp-IBz8I'),
(5, 1, 'intro PHP', 'blablablablabla', 'blablablabla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detail_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id_detail_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
