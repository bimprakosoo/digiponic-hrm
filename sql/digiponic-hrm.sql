-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 08:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
  `cv` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=diterima| 0=pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_lamaran`
--

INSERT INTO `data_lamaran` (`id`, `nama`, `provinsi`, `kota_kabupaten`, `kecamatan`, `alamat_lengkap`, `jk`, `tgl_lahir`, `no_telp`, `status_perkawinan`, `pendidikan_terakhir`, `surat_lamaran`, `cv`, `status`) VALUES
(448, 'tes 0310 1900', 'jawa timur', 'malang', 'pakis', 'krajan ', 'laki-laki', '18/02/1999', '083898996210', 'belum kawin', 's1', 'Sertifikat5.pdf', 'Tepi_35.pdf', 0),
(453, 'zulfi', '', '', '', '', '', '', '', '', '', '', '', 0),
(454, 'peter', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_departemen` int(11) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_departemen`, `department`) VALUES
(1, 'departemen keuangan'),
(2, 'departemen finance');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `nama_lowongan` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `industri` varchar(100) NOT NULL,
  `tipe_pekerjaan` varchar(100) NOT NULL,
  `pengalaman_kerja` int(20) NOT NULL,
  `insentif_lembur` varchar(200) NOT NULL,
  `level_pekerjaan` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `waktu_bekerja` varchar(200) NOT NULL,
  `gaji` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `ket` text NOT NULL,
  `syarat_pengalaman` text NOT NULL,
  `tunjangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nama_lowongan`, `lokasi`, `perusahaan`, `industri`, `tipe_pekerjaan`, `pengalaman_kerja`, `insentif_lembur`, `level_pekerjaan`, `pendidikan`, `waktu_bekerja`, `gaji`, `post_date`, `ket`, `syarat_pengalaman`, `tunjangan`) VALUES
(1, 'Staff HRD', 'Malang', 'PT. Maju Jaya', 'manufaktur', 'kontrak', 2, 'Insentif Lembur', 'Staff', 'Diploma/S1/S2', 'Senin-Jumat : 07:00-16:00', '5.000.000', '2021-10-29', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan\nMampu menjalin hubungan baik kepada pihak Internal & eksternal\nPengurusan dokumen untuk kepentingan Internal Perusahaan\nMengawasi kinerja dan kedisiplinan karyawan per-periode\nMenjaga, mendata dan merawat seluruh asset perusahaan\nMelakukan proses pengadaan & pendistribusian kebutuhan operasional Perusahaan</p>', '<ul>\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\n</ul>\n', '<ul>\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\n</ul>\n'),
(2, 'Office Boy', 'Jombang', '', '', '', 0, '', '', '', '', '', '2021-10-21', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan\nMampu menjalin hubungan baik kepada pihak Internal & eksternal\nPengurusan dokumen untuk kepentingan Internal Perusahaan\nMengawasi kinerja dan kedisiplinan karyawan per-periode\nMenjaga, mendata dan merawat seluruh asset perusahaan\nMelakukan proses pengadaan & pendistribusian kebutuhan operasional Perusahaan</p>', '<ul>\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\n</ul>\n', '<ul> 	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li> 	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li> 	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li> 	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li> 	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li> 	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li> </ul>'),
(3, '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', ''),
(4, 'staff IT', 'Jombang', 'Maju Jaya', 'Teknik', 'Kontrak', 2, 'insentif lembur', 'staff', 'S1', '<p>Senin &ndash; Jumat : Jam 08.00 s/d 16.00<br />\nSabtu : Jam 08.00 s/d 13.00</p>\n', '10000', '0000-00-00', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan\nMampu menjalin hubungan baik kepada pihak Internal & eksternal\nPengurusan dokumen untuk kepentingan Internal Perusahaan\nMengawasi kinerja dan kedisiplinan karyawan per-periode\nMenjaga, mendata dan merawat seluruh asset perusahaan\nMelakukan proses pengadaan & pendistribusian kebutuhan operasional Perusahaan</p>', '<ul>\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\n</ul>\n', '<ul>\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\n</ul>\n'),
(5, 'marketing', 'Malang', 'Maju Jaya', 'Digital', 'Kontrak', 4, 'insentif lembur', 'staff', 'S1', '<p>Senin &ndash; Jumat : Jam 08.00 s/d 16.00</p>\r\n\r\n<p>Sabtu : Jam 08.00 s/d 13.00</p>\r\n', '20000', '2021-01-21', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan\nMampu menjalin hubungan baik kepada pihak Internal & eksternal\nPengurusan dokumen untuk kepentingan Internal Perusahaan\nMengawasi kinerja dan kedisiplinan karyawan per-periode\nMenjaga, mendata dan merawat seluruh asset perusahaan\nMelakukan proses pengadaan & pendistribusian kebutuhan operasional Perusahaan</p>', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n'),
(6, 'marketing', 'Malang', 'Maju Jaya', 'Digital', 'Kontrak', 4, 'insentif lembur', 'staff', 'S1', '<p>Senin &ndash; Jumat : Jam 08.00 s/d 16.00</p>\r\n\r\n<p>Sabtu : Jam 08.00 s/d 13.00</p>\r\n', '20000', '2021-01-21', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan\nMampu menjalin hubungan baik kepada pihak Internal & eksternal\nPengurusan dokumen untuk kepentingan Internal Perusahaan\nMengawasi kinerja dan kedisiplinan karyawan per-periode\nMenjaga, mendata dan merawat seluruh asset perusahaan\nMelakukan proses pengadaan & pendistribusian kebutuhan operasional Perusahaan</p>', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n'),
(7, 'staff IT', 'Madiun', 'Maju Jaya', 'Teknik', 'kontrak', 1, 'tidak ada', 'staff', 'S1', '<p>Senin &ndash; Jumat : Jam 08.00 s/d 16.00</p>\r\n\r\n<p>Sabtu : Jam 08.00 s/d 13.00</p>\r\n', '5000000', '0000-00-00', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan\nMampu menjalin hubungan baik kepada pihak Internal & eksternal\nPengurusan dokumen untuk kepentingan Internal Perusahaan\nMengawasi kinerja dan kedisiplinan karyawan per-periode\nMenjaga, mendata dan merawat seluruh asset perusahaan\nMelakukan proses pengadaan & pendistribusian kebutuhan operasional Perusahaan</p>', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n'),
(8, 'staff IT', 'Madiun', 'Maju Jaya', 'Teknik', 'kontrak', 1, 'tidak ada', 'staff', 'S1', '<p>Senin &ndash; Jumat : Jam 08.00 s/d 16.00</p>\r\n\r\n<p>Sabtu : Jam 08.00 s/d 13.00</p>\r\n', '5000000', '0000-00-00', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal Pengurusan dokumen untuk kepentingan Internal Perusahaan</p>\n\n<p>Mengawasi kinerja dan kedisiplinan karyawan per-periode Menjaga, mendata dan merawat seluruh asset perusahaan Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</p>\n', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n'),
(9, 'staff Networking', 'Jombang', 'Maju Jaya', 'Net', 'tetap', 2, 'tidak ada', 'staff', 'SMA/SMK', '<p>Senin &ndash; Jumat : Jam 08.00 s/d 16.00</p>\r\n\r\n<p>Sabtu : Jam 08.00 s/d 13.00</p>\r\n', '5000000', '2021-11-26', '<p>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal Pengurusan dokumen untuk kepentingan Internal Perusahaan</p>\n\n<p>Mengawasi kinerja dan kedisiplinan karyawan per-periode Menjaga, mendata dan merawat seluruh asset perusahaan Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</p>\n', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan</li>\r\n	<li>Mampu menjalin hubungan baik kepada pihak Internal &amp; eksternal</li>\r\n	<li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>\r\n	<li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>\r\n	<li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>\r\n	<li>Melakukan proses pengadaan &amp; pendistribusian kebutuhan operasional Perusahaan</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `syarat_pengalaman`
--

CREATE TABLE `syarat_pengalaman` (
  `id_syarat` int(11) NOT NULL,
  `nama_lowongan` varchar(100) NOT NULL,
  `syarat-1` varchar(200) NOT NULL,
  `syarat-2` varchar(200) NOT NULL,
  `syarat-3` varchar(200) NOT NULL,
  `syarat-4` varchar(200) NOT NULL,
  `syarat-5` varchar(200) NOT NULL,
  `syarat-6` varchar(200) NOT NULL,
  `syarat-7` varchar(200) NOT NULL,
  `syarat-8` varchar(200) NOT NULL,
  `syarat-9` varchar(200) NOT NULL,
  `syarat-10` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syarat_pengalaman`
--

INSERT INTO `syarat_pengalaman` (`id_syarat`, `nama_lowongan`, `syarat-1`, `syarat-2`, `syarat-3`, `syarat-4`, `syarat-5`, `syarat-6`, `syarat-7`, `syarat-8`, `syarat-9`, `syarat-10`) VALUES
(1, 'staff hrd', 'Usia maksimal 30 tahun', 'Pendidikan minimal Diploma / Sarjana Strata-1 IPK minimal 3.00', 'Memiliki pengalaman dalam bidang Staff HRD minimal 2 tahun', 'Memahami Undang-Undang Ketenagakerjaan', 'Memahami segala bentuk perizinan yang dibutuhkan oleh perusahaan dan pengurusannya', 'Menguasai Microsoft Office, minimal Word, Excel (Pivot, Formula), Power Point', 'Berintegrasi dalam bekerja (teliti, rajin, tanggung jawab, sigap, cepat belajar/tanggap, disiplin)', 'Memiliki wibawa yang bagus dan dapat bekerja sama secara kelompok maupun individual', 'Memiliki kemampuan bekerja dibawah tekanan dan dapat memastikan ', 'Bersedia ditempatkan di cabang Jakarta dan/atau Surabaya'),
(2, 'marketing', 'baru lulus', 'disiplin', 'rajin', '', '', '', '', '', '', '');

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
  `id_departemen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `nama`, `provinsi`, `kota_kabupaten`, `kecamatan`, `alamat_lengkap`, `jk`, `tgl_lahir`, `no_telp`, `status_perkawinan`, `pendidikan_terakhir`, `surat_lamaran`, `cv`, `id_departemen`) VALUES
(448, 'tes 0310 1900', 'jawa timur', 'malang', 'pakis', 'krajan ', 'laki-laki', '18/02/1999', '083898996210', 'belum kawin', 's1', 'Sertifikat5.pdf', 'Tepi_35.pdf', 1),
(454, 'peter', '', '', '', '', '', '', '', '', '', '', '', 1),
(455, 'ulum', '', '', '', '', '', '', '', '', '', '', '', 2);

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
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `syarat_pengalaman`
--
ALTER TABLE `syarat_pengalaman`
  ADD PRIMARY KEY (`id_syarat`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_departemen` (`id_departemen`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `syarat_pengalaman`
--
ALTER TABLE `syarat_pengalaman`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
