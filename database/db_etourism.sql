-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 07:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_etourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_complaint`
--

CREATE TABLE `t_complaint` (
  `id_complaint` int(11) NOT NULL,
  `id_pariwisata` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `isi_complaint` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_complaint`
--

INSERT INTO `t_complaint` (`id_complaint`, `id_pariwisata`, `fullname`, `email`, `subject`, `isi_complaint`, `status`, `created_on`) VALUES
(1, 1, 'Muhammad Suryono', 'msuryono0@gmail.com', 'Pengaduan Pelayanan', 'Pelayanan kurang baik terutama pada pantainya masih kotor sekali', 0, '2020-06-02 14:01:07'),
(9, 6, 'Muhammad', 'msuryono0@gmail.com', 'UI', 'SHKASKASKBS SJKS a', 0, '2020-06-02 17:08:48'),
(10, 6, 'Muhammad', 'msuryono0@gmail.com', 'KOSONG', 'Gak ada sama sekali', 0, '2020-06-02 17:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `t_counter_pengunjung`
--

CREATE TABLE `t_counter_pengunjung` (
  `id_pariwisata` int(11) NOT NULL,
  `counter_harian` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_counter_pengunjung`
--

INSERT INTO `t_counter_pengunjung` (`id_pariwisata`, `counter_harian`, `updated_on`) VALUES
(1, 300, '2020-06-02 03:50:15'),
(1, 150, '2020-06-02 03:50:15'),
(1, 160, '2020-06-02 03:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `t_pariwisata`
--

CREATE TABLE `t_pariwisata` (
  `id_pariwisata` int(11) NOT NULL,
  `nama_pariwisata` varchar(255) NOT NULL,
  `stakeholder` varchar(255) NOT NULL,
  `nama_pengelola` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `sk_pengelola` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `keterangan_tiket` varchar(255) NOT NULL,
  `on_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pariwisata`
--

INSERT INTO `t_pariwisata` (`id_pariwisata`, `nama_pariwisata`, `stakeholder`, `nama_pengelola`, `lokasi`, `sk_pengelola`, `deskripsi`, `layanan`, `gambar1`, `gambar2`, `keterangan_tiket`, `on_created`) VALUES
(1, 'Pantai Sindu', 'Pemerintah', 'Dinas Pariwisata Provinsi', 'Desa Uluwuatu Kec. Kuta Selatan', '1267/SK-SJ/2020/9/21', '', '', 'sindu2.jpg', 'sindu1.jpg', '', '2020-06-02 16:19:13'),
(4, 'Pantai Kuta', 'Government', 'Dinas Pariwisata Badung', 'Kuta', 'Tidak ada', '', '', 'kuta1.jpg', 'kuta2.jpg', '', '2020-06-02 16:21:45'),
(5, 'Pantai Jimabaran', 'Swasta', 'CV Pariwisata Perkasa', 'Jimbaran', 'Kosong', '', '', 'gambar1.jpg', 'gambar2.jpg', '', '2020-06-02 16:24:36'),
(6, 'Pantai Pandawa', 'Government', 'Dinas Pariwisata Badung', 'Nusa Dua', '128/09/09/20010', '', '', 'pantai-pandawa-bali.jpg', 'pantai_pandawa.jpg', '', '2020-06-02 16:25:12'),
(7, 'Pantai Melasti', 'Swasta', 'Desa Uluwatu', 'Uluwatu', 'Kosong', '', '', 'melasti2.jpg', 'melasti1.jpg', '', '2020-06-02 16:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id_users`, `username`, `password`, `hak_akses`, `fullname`, `created_on`) VALUES
(1, 'admin', 'admin', 'government', 'Administrator', '2020-06-02 01:59:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_complaint`
--
ALTER TABLE `t_complaint`
  ADD PRIMARY KEY (`id_complaint`);

--
-- Indexes for table `t_pariwisata`
--
ALTER TABLE `t_pariwisata`
  ADD PRIMARY KEY (`id_pariwisata`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_complaint`
--
ALTER TABLE `t_complaint`
  MODIFY `id_complaint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_pariwisata`
--
ALTER TABLE `t_pariwisata`
  MODIFY `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
