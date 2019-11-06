-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 09:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-project_personal-01-event_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(50) DEFAULT NULL,
  `poster_event` varchar(25) DEFAULT NULL,
  `kategori_event` varchar(20) DEFAULT NULL,
  `jenis_event` varchar(8) DEFAULT NULL,
  `kapasitas_event` int(10) DEFAULT NULL,
  `tanggal_mulai_event` date DEFAULT NULL,
  `jam_mulai_event` time DEFAULT NULL,
  `tanggal_akhir_event` date DEFAULT NULL,
  `jam_akhir_event` time DEFAULT NULL,
  `nama_tempat_event` varchar(50) DEFAULT NULL,
  `alamat_event` text DEFAULT NULL,
  `kota_kabupaten_event` varchar(25) DEFAULT NULL,
  `provinsi_event` varchar(20) DEFAULT NULL,
  `id_organisasi` varchar(25) DEFAULT NULL,
  `deskripsi_event` text DEFAULT NULL,
  `syarat_dan_ketentuan_event` text DEFAULT NULL,
  `info_dan_kontak_event` text DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_event`, `poster_event`, `kategori_event`, `jenis_event`, `kapasitas_event`, `tanggal_mulai_event`, `jam_mulai_event`, `tanggal_akhir_event`, `jam_akhir_event`, `nama_tempat_event`, `alamat_event`, `kota_kabupaten_event`, `provinsi_event`, `id_organisasi`, `deskripsi_event`, `syarat_dan_ketentuan_event`, `info_dan_kontak_event`, `create_date`, `update_date`) VALUES
(1, 'a', '5d86a4713b47b.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-21 22:30:09'),
(2, '', NULL, '5d86b8083b690', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-22 06:53:44', '2019-09-21 23:53:44'),
(3, '', NULL, '5d86b82f35b0a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-22 06:54:23', '2019-09-21 23:54:23'),
(4, '', NULL, '5d86b87815794', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-22 06:55:36', '2019-09-21 23:55:36'),
(5, '', NULL, '5d86b901c431f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-22 06:57:53', '2019-09-21 23:57:53'),
(6, '', NULL, '5d86bcc8a83b8', 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-22 07:14:00', '2019-09-22 00:14:00'),
(7, '', NULL, '5d86bcef39f3f', 'Public', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-22 07:14:39', '2019-09-22 00:14:39'),
(8, 'testing0', NULL, '5d883a433fbfa', 'Public', 1000, '2019-09-23', '00:00:00', '2019-09-24', '00:00:00', 'testing0', 'testing0', 'testing0', 'testing0', '1', '<p>testing0<br></p>', 'testing0', 'testing0', '2019-09-23 10:21:39', '2019-09-23 03:21:39'),
(9, '', NULL, '5d883b2107623', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '2', '', '', '', '2019-09-23 10:25:21', '2019-09-23 03:25:21'),
(10, '', NULL, '5d883bbbc95ce', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '3', '', '', '', '2019-09-23 10:27:55', '2019-09-23 03:27:55'),
(11, '', '5d883be3e352d.png', '5d883be3e352d', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '4', '<p><img src=\"http://localhost/Project_Personal/Project_01_Event_Website/uploads/deskripsi_image/Screenshot_(85)1.png\" style=\"width: 800px;\"><br></p>', '', '', '2019-09-23 10:28:36', '2019-09-23 03:28:36'),
(12, '', '5d883ce557be0.png', '5d883ce557be0', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '5', '', '', '', '2019-09-23 10:32:53', '2019-09-23 03:32:53'),
(13, 'testing1', '5d884aa8f0242.png', '5d884aa8f0242', 'Public', 1000, '2019-09-23', '00:00:00', '2019-09-24', '00:00:00', 'testing1', 'testing1', 'testing1', 'testing1', '6', '<p>testing1<br></p>', 'testing1', 'testing1', '2019-09-23 11:31:37', '2019-09-23 04:31:37'),
(14, '', '5d884cc97f2dc.png', '5d884cc97f2dc', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '7', '', '', '', '2019-09-23 11:40:41', '2019-09-23 04:40:41'),
(15, '', '5d884dde769cc.png', '5d884dde769cc', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '8', '', '', '', '2019-09-23 11:45:18', '2019-09-23 04:45:18'),
(16, '', '5d884e33185fc.png', '5d884e33185fc', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '9', '', '', '', '2019-09-23 11:46:43', '2019-09-23 04:46:43'),
(17, '', '5d884e76a6f36.png', '5d884e76a6f36', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '10', '', '', '', '2019-09-23 11:47:50', '2019-09-23 04:47:50'),
(18, '', '5d884f24276c7.png', '5d884f24276c7', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '13', '', '', '', '2019-09-23 11:50:44', '2019-09-23 04:50:44'),
(19, '', '5d884f684f765.png', '5d884f684f765', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '14', '', '', '', '2019-09-23 11:51:52', '2019-09-23 04:51:52'),
(20, '', '5d885658485e0.png', '5d885658485e0', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '19', '', '', '', '2019-09-23 12:21:28', '2019-09-23 05:21:28'),
(21, '', '5d8857b4b7f1d.png', '5d8857b4b7f1d', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '20', '', '', '', '2019-09-23 12:27:16', '2019-09-23 05:27:16'),
(22, 'testing2', '5d88585324d78.png', '5d88585324d78', 'Public', 1000, '2019-09-23', '00:00:00', '2019-09-24', '00:00:00', 'testing2', 'testing2', 'testing2', 'testing2', '21', '<p>testing2<br></p>', 'testing2', 'testing2', '2019-09-23 12:29:55', '2019-09-23 05:29:55'),
(23, 'testing3', '5d8861550e7b3.png', '5d8861550e7b3', 'Public', 1000, '2019-09-23', '00:00:00', '2019-09-24', '00:00:00', 'testing3', 'testing3', 'testing3', 'testing3', '22', '<p><img src=\"http://localhost/Project_Personal/Project_01_Event_Website/uploads/deskripsi_image/Screenshot_(85)2.png\" style=\"width: 800px;\">testing3<br></p>', 'testing3', 'testing3', '2019-09-23 13:08:21', '2019-09-23 06:08:21'),
(24, '', NULL, '5d89c2b653704', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '23', '', '', '', '2019-09-24 14:16:06', '2019-09-24 07:16:06'),
(25, '', NULL, '5d89c3ef0f9ff', 'Public', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '24', '', '', '', '2019-09-24 14:21:19', '2019-09-24 07:21:19'),
(26, 'testing10', '5d89d1ac33aba.png', '5d89d1ac33aba', 'Public', 1000, '2019-09-23', '14:02:00', '2019-09-25', '15:03:00', 'testing10', 'testing10', 'testing10', 'testing10', '25', '<p>testing10<br></p>', 'testing10', 'testing10', '2019-09-24 15:19:56', '2019-09-24 08:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_event`
--

CREATE TABLE `kategori_event` (
  `id` int(5) NOT NULL,
  `kategori_event_id` varchar(20) NOT NULL,
  `katagori_event` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_event`
--

INSERT INTO `kategori_event` (`id`, `kategori_event_id`, `katagori_event`) VALUES
(1, '5d86b87815794', 'Web Master'),
(2, '5d86b87815794', 'Coding For'),
(3, '5d86b901c431f', 'Bazaar'),
(4, '5d86b901c431f', 'Job Fair'),
(5, '5d86b901c431f', 'Pameran'),
(6, '5d86bcc8a83b8', 'Bazaar'),
(7, '5d86bcef39f3f', 'Bazaar'),
(8, '5d883a433fbfa', 'Bazaar'),
(9, '5d883a433fbfa', 'Job Fair'),
(10, '5d883b2107623', 'Bazaar'),
(11, '5d883bbbc95ce', 'Bazaar'),
(12, '5d883be3e352d', 'Bazaar'),
(13, '5d883ce557be0', 'Bazaar'),
(14, '5d884aa8f0242', 'Bazaar'),
(15, '5d884aa8f0242', 'Job Fair'),
(16, '5d884cc97f2dc', 'Bazaar'),
(17, '5d884dde769cc', 'Bazaar'),
(18, '5d884e33185fc', 'Bazaar'),
(19, '5d884e76a6f36', 'Bazaar'),
(20, '5d884f24276c7', 'Bazaar'),
(21, '5d884f684f765', 'Bazaar'),
(22, '5d885658485e0', 'Bazaar'),
(23, '5d8857b4b7f1d', 'Bazaar'),
(24, '5d88585324d78', 'Bazaar'),
(25, '5d88585324d78', 'Job Fair'),
(26, '5d8861550e7b3', 'Bazaar'),
(27, '5d8861550e7b3', 'Job Fair'),
(28, '5d89c2b653704', 'Bazaar'),
(29, '5d89c3ef0f9ff', 'Bazaar'),
(30, '5d89d1ac33aba', 'Bazaar'),
(31, '5d89d1ac33aba', 'Job Fair');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'testing0', 'testing0@gmail.com', 'testing0', 'testing0'),
(2, 'testing1', 'testing1@gmail.com', 'testing1', 'testing1'),
(3, 'testing3', 'testing3@gmail.com', 'testing3', 'testing3');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(5) NOT NULL,
  `nama_organisasi` varchar(20) DEFAULT NULL,
  `logo_organisasi` varchar(25) DEFAULT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama_organisasi`, `logo_organisasi`, `create_date`) VALUES
(1, 'testing0', NULL, '2019-09-23 10:21:39'),
(2, '', NULL, '2019-09-23 10:25:21'),
(3, '', '5d883bbbc95ce.png', '2019-09-23 10:27:55'),
(4, '', '5d883be3e352d.png', '2019-09-23 10:28:35'),
(5, '', NULL, '2019-09-23 10:32:53'),
(6, 'testing1', '5d884aa8f0242.png', '2019-09-23 11:31:36'),
(7, '', NULL, '2019-09-23 11:40:41'),
(8, '', NULL, '2019-09-23 11:45:18'),
(9, '', NULL, '2019-09-23 11:46:43'),
(10, '', NULL, '2019-09-23 11:47:50'),
(11, '', NULL, '2019-09-23 11:48:41'),
(12, '', NULL, '2019-09-23 11:50:17'),
(13, '', NULL, '2019-09-23 11:50:44'),
(14, '', NULL, '2019-09-23 11:51:52'),
(15, '', NULL, '2019-09-23 12:18:29'),
(16, '', NULL, '2019-09-23 12:18:53'),
(17, '', NULL, '2019-09-23 12:19:36'),
(18, '', NULL, '2019-09-23 12:20:45'),
(19, '', NULL, '2019-09-23 12:21:28'),
(20, '', NULL, '2019-09-23 12:27:16'),
(21, 'testing2', '5d88585324d78.png', '2019-09-23 12:29:55'),
(22, 'testing3', '5d8861550e7b3.png', '2019-09-23 13:08:21'),
(23, '', NULL, '2019-09-24 14:16:06'),
(24, '', NULL, '2019-09-24 14:21:19'),
(25, 'testing10', '5d89d1ac33aba.png', '2019-09-24 15:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(5) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `create_date`) VALUES
(1, 'testing0@gmail.com', '2019-09-24 01:04:33'),
(2, 'testing1@gmail.com', '2019-09-24 01:05:11'),
(3, 'testing2@gmail.com', '2019-09-24 01:05:27'),
(4, 'testing3@gmail.com', '2019-09-24 01:08:00'),
(5, 'testing4@gmail.com', '2019-09-24 01:08:09'),
(6, 'testing6@gmail.com', '2019-09-24 01:09:32'),
(7, 'testing7@gmail.com', '2019-09-24 01:10:43'),
(8, 'testing8@gmail.com', '2019-09-24 01:12:14'),
(9, 'testing5@gmail.com', '2019-09-24 01:24:50'),
(10, 'testing9@gmail.com', '2019-09-24 01:25:16'),
(11, 'testing10@gmail.com', '2019-09-24 01:26:36'),
(12, 'testing11@gmail.com', '2019-09-24 01:27:43'),
(13, 'testing12@gmail.com', '2019-09-24 01:31:50'),
(14, 'testing13@gmail.com', '2019-09-24 01:32:47'),
(15, 'testing14@gmail.com', '2019-09-24 01:34:38'),
(16, 'testing16@gmail.com', '2019-09-24 01:41:14'),
(17, 'testing15@gmail.com', '2019-09-24 01:42:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_event`
--
ALTER TABLE `kategori_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kategori_event`
--
ALTER TABLE `kategori_event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
