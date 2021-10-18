-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 04:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digiponic-hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_lamaran`
--

CREATE TABLE `data_lamaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota_kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `surat_lamaran` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_lamaran`
--

INSERT INTO `data_lamaran` (`id`, `nama`, `provinsi`, `kota_kabupaten`, `kecamatan`, `alamat_lengkap`, `jk`, `tgl_lahir`, `no_telp`, `status_perkawinan`, `pendidikan_terakhir`, `surat_lamaran`, `cv`) VALUES
(448, 'tes 0310 1900', 'jawa timur', 'malang', 'pakis', 'krajan ', 'laki-laki', '18/02/1999', '083898996210', 'belum kawin', 's1', 'Sertifikat5.pdf', 'Tepi_35.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota_kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `surat_lamaran` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=diterima| 0=pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `nama`, `provinsi`, `kota_kabupaten`, `kecamatan`, `alamat_lengkap`, `jk`, `tgl_lahir`, `no_telp`, `status_perkawinan`, `pendidikan_terakhir`, `surat_lamaran`, `cv`, `status`) VALUES
(0, 'tes 0310 1900', 'jawa timur', 'malang', 'pakis', 'krajan ', 'laki-laki', '18/02/1999', '083898996210', 'belum kawin', 's1', 'Sertifikat6.pdf', 'Tepi_36.pdf', 0),
(0, 'tes 1210', 'jawa timur', 'malang', 'pakis', 'krajan ', 'laki-laki', '18/02/1999', '083898996210', 'belum kawin', 's1', 'Sertifikat7.pdf', 'Tepi_37.pdf', 0),
(0, 'tes 1210', 'jawa timur', 'malang', 'pakis', 'krajan ', 'laki-laki', '18/02/1999', '083898996210', 'belum kawin', 's1', 'Sertifikat10.pdf', 'Tepi_310.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive ',
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `password`, `created`, `modified`, `status`, `role_id`) VALUES
(1, 'zulfi kurniawan', 'zulfi@mhs.stiki.ac.id', '0000', '2021-09-24 04:38:20', '2021-09-24 04:38:20', 1, 0),
(2, 'Moh. Bahrul Ulum', '181111082@mhs.stiki.ac.id', '0082', '2021-09-24 04:40:58', '2021-09-24 04:40:58', 1, 0),
(3, 'tes', 'tes@gmail.com', '0000', '2021-09-27 07:30:45', '2021-09-27 07:30:45', 1, 1),
(4, 'tes2', 'tes2@gmail.com', '0000', '2021-09-27 07:35:28', '2021-09-27 07:35:28', 1, 2),
(5, 'ulum', 'ulum@gmail.com', '0000', '2021-09-27 08:07:00', '2021-09-27 08:07:00', 1, 1),
(7, 'wina', 'wina@gmail.com', '1234', '2021-09-27 11:06:17', '2021-09-27 11:06:17', 1, 3),
(8, 'ulums', 'ulums@gmail.com', '1234', '2021-09-28 03:40:09', '2021-09-28 03:40:09', 1, 3),
(9, 'tes3', 'tes3@gmail.com', '0000', '2021-10-01 01:45:03', '2021-10-01 01:45:03', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_lamaran`
--
ALTER TABLE `data_lamaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_lamaran`
--
ALTER TABLE `data_lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
