-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 03:01 PM
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
-- Database: `skm`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `taman_id` int(11) DEFAULT NULL,
  `NO_HP` bigint(16) DEFAULT NULL,
  `kategori_layanan` varchar(191) NOT NULL,
  `ulasan` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `taman_id`, `NO_HP`, `kategori_layanan`, `ulasan`, `updated_at`, `created_at`) VALUES
(6, 4, NULL, 'Parkir', 'ksamdflmefmasdf', '2020-06-19 08:06:02', '2020-06-14 22:03:43'),
(7, 5, NULL, 'Kebersihan', 'bagus', '2020-06-19 08:06:02', '2020-06-15 21:48:00'),
(8, 6, NULL, 'Parkir', 'kuang luas', '2020-06-19 08:06:02', '2020-06-15 21:48:09'),
(9, 6, NULL, 'Wifi', 'kuang bagus', '2020-06-19 08:06:02', '2020-06-17 17:54:05'),
(10, 6, NULL, 'Parkir', 'kuang luas', '2020-06-19 08:06:02', '2020-06-17 18:22:17'),
(11, 4, NULL, 'Wifi', 'Sangat kencang dan stabill', '2020-06-19 08:06:02', '2020-06-18 06:35:39'),
(12, 4, NULL, 'Kebersihan', 'Sangat buruk', '2020-06-19 08:06:02', '2020-06-18 06:51:09'),
(13, 5, NULL, 'Wifi', 'Bagus', '2020-06-19 08:05:33', '2020-06-18 19:38:06'),
(14, 5, NULL, 'Wifi', 'Bagus', '2020-06-19 08:05:33', '2020-06-18 21:13:32'),
(15, 4, NULL, 'Wifi', 'Bagus', '2020-06-19 08:05:33', '2020-06-18 21:19:32'),
(16, 6, NULL, 'Wifi', 'Sangat bagus', '2020-06-19 08:05:33', '2020-06-18 21:21:36'),
(17, 6, NULL, 'Wifi', 'Bagus', '2020-06-19 08:05:33', '2020-06-18 22:06:08'),
(18, 4, NULL, 'Kebersihan', 'Buruk', '2020-06-19 08:05:33', '2020-06-18 23:08:49'),
(19, 5, NULL, 'Kebersihan', 'Sangat baik', '2020-06-19 08:05:33', '2020-06-18 23:16:09'),
(20, 4, NULL, 'Parkir', 'Sangat baik', '2020-06-18 23:23:34', '2020-06-18 23:23:34'),
(21, 5, NULL, 'Wifi', 'Sangat stabil', '2020-06-18 23:30:46', '2020-06-18 23:30:46'),
(22, 5, NULL, 'Parkir', 'Sangat rapih', '2020-06-18 23:46:08', '2020-06-18 23:46:08'),
(23, 4, NULL, 'Kebersihan', 'Bagus', '2020-06-18 23:54:27', '2020-06-18 23:54:27'),
(24, 4, NULL, 'Kebersihan', 'Bagus', '2020-06-19 00:21:40', '2020-06-19 00:21:40'),
(25, 6, NULL, 'Wifi', 'Tidak bagus', '2020-06-19 00:23:25', '2020-06-19 00:23:25'),
(26, 6, NULL, 'Wifi', 'Bagus', '2020-06-19 00:34:36', '2020-06-19 00:34:36'),
(27, 6, NULL, 'Parkir', 'Bagus', '2020-06-19 00:35:49', '2020-06-19 00:35:49'),
(28, 6, NULL, 'Kebersihan', 'Sangat Bagus', '2020-06-19 00:36:01', '2020-06-19 00:36:01'),
(29, 6, 1440, 'Wifi', 'Tidak bagus', '2020-06-19 00:41:28', '2020-06-19 00:41:28'),
(30, 6, 1440, 'Parkir', 'Tidak Bagus', '2020-06-19 00:41:35', '2020-06-19 00:41:35'),
(31, 6, 1440, 'Kebersihan', 'Tidak Bagus', '2020-06-19 00:41:57', '2020-06-19 00:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LOG_ID` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `LEVEL` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LOG_ID`, `USERNAME`, `PASSWORD`, `NAMA`, `LEVEL`) VALUES
(1, 'owner', 'owner', 'KEPALA DINAS', 1),
(2, 'admin', 'admin', 'ADMIN', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `NO_HP` bigint(16) NOT NULL,
  `U1` int(1) NOT NULL,
  `U2` int(1) NOT NULL,
  `U3` int(1) NOT NULL,
  `U4` int(1) NOT NULL,
  `U5` int(1) NOT NULL,
  `U6` int(1) NOT NULL,
  `U7` int(1) NOT NULL,
  `U8` int(1) NOT NULL,
  `U9` int(1) NOT NULL,
  `TAHUN` int(4) NOT NULL,
  `taman_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NO_HP`, `U1`, `U2`, `U3`, `U4`, `U5`, `U6`, `U7`, `U8`, `U9`, `TAHUN`, `taman_id`, `updated_at`, `created_at`) VALUES
(1, 4, 4, 3, 4, 3, 3, 3, 4, 3, 2020, NULL, '2020-06-17 18:20:00', '2020-06-17 18:20:00'),
(2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, NULL, '2020-06-17 18:21:50', '2020-06-17 18:21:50'),
(1007, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 20:07:51', '2020-06-18 20:07:51'),
(1008, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 20:08:53', '2020-06-18 20:08:53'),
(1011, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 20:11:05', '2020-06-18 20:11:05'),
(1012, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 20:12:07', '2020-06-18 20:12:07'),
(1038, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 20:41:57', '2020-06-18 20:41:57'),
(1112, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, 5, '2020-06-18 21:12:39', '2020-06-18 21:12:39'),
(1117, 4, 4, 4, 3, 4, 4, 3, 4, 4, 2020, 4, '2020-06-18 21:18:57', '2020-06-18 21:18:57'),
(1120, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-18 21:20:33', '2020-06-18 21:20:33'),
(1130, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, 4, '2020-06-18 21:30:41', '2020-06-18 21:30:41'),
(1132, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2020, 4, '2020-06-18 21:33:08', '2020-06-18 21:33:08'),
(1221122, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, NULL, '2020-06-18 19:37:57', '2020-06-18 19:37:57'),
(1242444, 1, 1, 3, 2, 4, 2, 1, 4, 2, 2020, 0, '2020-05-07 20:11:35', '2020-05-07 20:11:35'),
(8979879, 1, 2, 1, 2, 2, 2, 3, 3, 2, 2020, 0, '2020-05-20 02:36:43', '2020-05-20 02:36:43'),
(14131512, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, NULL, '2020-06-18 19:45:01', '2020-06-18 19:45:01'),
(17010024, 1, 1, 1, 2, 2, 1, 3, 1, 1, 2020, 0, '2020-04-16 04:09:20', '2020-04-16 04:09:20'),
(123456789, 4, 4, 4, 4, 4, 4, 4, 4, 3, 2020, 0, '2020-05-07 20:17:00', '2020-05-07 20:17:00'),
(245357747, 1, 2, 1, 2, 1, 3, 1, 2, 1, 2020, 0, '2020-04-16 20:50:18', '2020-04-16 20:50:18'),
(856347246, 1, 1, 1, 1, 1, 1, 2, 1, 2, 2020, NULL, '2020-05-20 04:08:36', '2020-05-20 04:08:36'),
(862452383, 2, 2, 1, 2, 3, 3, 1, 1, 1, 2020, 0, '2020-04-09 05:22:16', '2020-04-09 05:22:16'),
(876532668, 2, 2, 1, 1, 2, 1, 1, 1, 1, 2020, 0, '2020-05-19 22:42:01', '2020-05-19 22:42:01'),
(989089098, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 20:00:55', '2020-06-18 20:00:55'),
(1212121212, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 06:50:59', '2020-06-18 06:50:59'),
(1213331231, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-18 19:50:43', '2020-06-18 19:50:43'),
(8120853285, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-11 01:39:36', '2020-06-11 01:39:36'),
(8564764646, 2, 2, 2, 3, 3, 3, 2, 3, 2, 2020, 0, '2020-05-19 22:57:38', '2020-05-19 22:57:38'),
(8579234834, 4, 2, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-12 21:14:41', '2020-06-12 21:14:41'),
(8579864742, 2, 3, 4, 4, 3, 3, 4, 4, 4, 2020, NULL, '2020-06-17 17:53:47', '2020-06-17 17:53:47'),
(8675432346, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, 0, '2020-05-20 02:27:44', '2020-05-20 02:27:44'),
(8683153814, 1, 1, 1, 1, 3, 1, 2, 2, 1, 2020, NULL, '2020-06-09 20:20:13', '2020-06-09 20:20:13'),
(12391401436, 1, 1, 2, 1, 1, 1, 2, 1, 2, 2020, 0, '2020-04-16 21:00:14', '2020-04-16 21:00:14'),
(81212121212, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, NULL, '2020-06-18 06:35:21', '2020-06-18 06:35:21'),
(81333744500, 3, 2, 3, 4, 3, 3, 3, 3, 2, 2020, 0, '2020-04-16 22:25:02', '2020-04-16 22:25:02'),
(85678678678, 3, 3, 3, 3, 3, 3, 3, 3, 4, 2020, 0, '2020-05-12 20:01:17', '2020-05-12 20:01:17'),
(85704776986, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2020, 0, '2020-05-07 20:28:00', '2020-05-07 20:28:00'),
(86756756757, 4, 4, 4, 3, 3, 1, 4, 4, 3, 2020, 0, '2020-05-12 20:02:40', '2020-05-12 20:02:40'),
(86787567242, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, NULL, '2020-06-04 21:14:10', '2020-06-04 21:14:10'),
(87263557876, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 0, '2020-05-07 20:33:30', '2020-05-07 20:33:30'),
(815556777854, 2, 2, 2, 2, 2, 2, 2, 3, 1, 2020, NULL, '2020-06-09 20:14:52', '2020-06-09 20:14:52'),
(1234567890123450, 4, 3, 4, 3, 3, 4, 2, 2, 1, 2019, 0, '2019-11-08 20:22:36', '2019-11-08 20:22:36'),
(1234567890123451, 3, 4, 2, 4, 2, 4, 3, 3, 3, 2019, 0, '2019-11-08 19:58:14', '2019-11-08 19:58:14'),
(1234567890123452, 3, 3, 3, 4, 2, 2, 4, 4, 4, 2019, 0, '2019-11-08 19:50:02', '2019-11-08 19:50:02'),
(1234567890123453, 3, 4, 4, 2, 4, 1, 3, 3, 3, 2019, 0, '2019-11-08 19:50:51', '2019-11-08 19:50:51'),
(1234567890123454, 3, 3, 3, 3, 4, 4, 3, 2, 4, 2019, 0, '2019-11-08 19:51:49', '2019-11-08 19:51:49'),
(1234567890123455, 3, 2, 3, 4, 3, 2, 4, 4, 3, 2019, 0, '2019-11-08 20:00:37', '2019-11-08 20:00:37'),
(1234567890123456, 3, 2, 3, 4, 3, 3, 2, 4, 4, 2019, 0, '2019-11-08 20:01:57', '2019-11-08 20:01:57'),
(1234567890123457, 2, 3, 3, 4, 4, 2, 3, 3, 4, 2019, 0, '2019-11-08 20:13:27', '2019-11-08 20:13:27'),
(1234567890123458, 4, 1, 2, 3, 4, 4, 4, 4, 4, 2019, 0, '2019-11-08 20:20:06', '2019-11-08 20:20:06'),
(1234567890123459, 1, 4, 4, 3, 3, 4, 3, 4, 2, 2019, 0, '2019-11-08 20:21:40', '2019-11-08 20:21:40'),
(1132, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2020, 4, '2020-06-18 22:01:27', '2020-06-18 22:01:27'),
(1307, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, 4, '2020-06-18 23:08:03', '2020-06-18 23:08:03'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:11:41', '2020-06-18 23:11:41'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:13:06', '2020-06-18 23:13:06'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:14:37', '2020-06-18 23:14:37'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:15:43', '2020-06-18 23:15:43'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:18:00', '2020-06-18 23:18:00'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:18:03', '2020-06-18 23:18:03'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:18:47', '2020-06-18 23:18:47'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:18:50', '2020-06-18 23:18:50'),
(1310, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 4, '2020-06-18 23:23:19', '2020-06-18 23:23:19'),
(1326, 4, 4, 4, 3, 4, 4, 4, 4, 4, 2020, 5, '2020-06-18 23:28:49', '2020-06-18 23:28:49'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-18 23:47:20', '2020-06-18 23:47:20'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-18 23:48:35', '2020-06-18 23:48:35'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-18 23:52:01', '2020-06-18 23:52:01'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-18 23:52:50', '2020-06-18 23:52:50'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-18 23:53:49', '2020-06-18 23:53:49'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-19 00:16:24', '2020-06-19 00:16:24'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-19 00:17:13', '2020-06-19 00:17:13'),
(1346, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2020, 4, '2020-06-19 00:18:25', '2020-06-19 00:18:25'),
(1422, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, 6, '2020-06-19 00:22:54', '2020-06-19 00:22:54'),
(809, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2020, 6, '2020-06-19 00:34:27', '2020-06-19 00:34:27'),
(1440, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020, 6, '2020-06-19 00:41:03', '2020-06-19 00:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `PERTANYAAN_ID` int(11) NOT NULL,
  `NO_PERTANYAAN` int(11) NOT NULL,
  `PERTANYAAN` text NOT NULL,
  `A` text NOT NULL,
  `B` text NOT NULL,
  `C` text NOT NULL,
  `D` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`PERTANYAAN_ID`, `NO_PERTANYAAN`, `PERTANYAAN`, `A`, `B`, `C`, `D`, `updated_at`, `created_at`) VALUES
(1, 1, 'Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayananya ?', 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', '2020-05-08 02:12:57', '0000-00-00 00:00:00'),
(2, 2, 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini ?', 'Tidak Mudah', 'Kurang Mudah', 'Mudah', 'sangat Mudah', '2019-09-29 11:44:33', '0000-00-00 00:00:00'),
(3, 3, 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan ?', 'Tidak Cepat', 'Kurang Cepat', 'Cepat', 'Sangat Cepat\r\n', '2019-09-29 11:44:33', '0000-00-00 00:00:00'),
(4, 4, 'Bagaimana pendapat Suadara tentang kewajaran biaya/tarif dalam pelayanan ?', 'Sangat Mahal ', 'Cukup Mahal', 'Murah', 'Gratis', '2019-09-29 11:44:33', '0000-00-00 00:00:00'),
(5, 5, 'Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan ?', 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai\r\n', '2019-09-29 11:44:34', '0000-00-00 00:00:00'),
(6, 6, 'Bagaimana pendapat Saudara tentang kompetensi kemampuan petugas dalam pelayanan ?', 'Tidak kompeten', 'Kurang kompeten', 'Kompeten', 'Sangat kompeten', '2019-09-29 12:16:05', '2019-09-16 15:20:35'),
(7, 7, 'Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan ?', 'Tidak sopan dan ramah', 'Kurang sopan dan ramah', 'Sopan dan ramah', 'Sangat sopan dan ramah', '2019-09-29 12:15:50', '2019-09-25 15:16:55'),
(8, 8, 'Bagaimana pendapat saudara tentang kualitas sarana dan prasarana', 'Buruk', 'Cukup', 'Baik', 'Sangat Baik', '2019-10-13 12:38:21', '2019-10-13 05:37:59'),
(10, 9, 'Bagaimana pendapat Saudara tentang penganan pengaduan pengguna layanan ?', 'Tidak ada', 'Ada tapi tidak berfungsi', 'Berfungsi kurang maksimal', 'Dikelola dengan baik', '2019-11-25 22:49:09', '2019-11-25 22:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `NO_HP` bigint(16) NOT NULL,
  `TGL` date NOT NULL,
  `TAHUN` int(4) NOT NULL,
  `JAM` time NOT NULL,
  `GENDER` varchar(1) NOT NULL,
  `UMUR` int(3) NOT NULL,
  `PENDIDIKAN` varchar(3) NOT NULL,
  `PEKERJAAN` varchar(11) NOT NULL,
  `JENIS` varchar(100) NOT NULL,
  `taman_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`NO_HP`, `TGL`, `TAHUN`, `JAM`, `GENDER`, `UMUR`, `PENDIDIKAN`, `PEKERJAAN`, `JENIS`, `taman_id`, `updated_at`, `created_at`) VALUES
(1, '2020-06-18', 2020, '08:00:00', 'P', 15, 'SD', 'TNI', 'Penggunaan Sarpras', 4, '2020-06-17 18:19:47', '2020-06-17 18:19:47'),
(2, '2020-06-18', 2020, '08:00:00', 'P', 15, 'S3', 'WIRASWASTA', 'Penggunaan Sarpras', 4, '2020-06-17 18:21:35', '2020-06-17 18:21:35'),
(1007, '2020-06-19', 2020, '08:00:00', 'L', 22, 'S2', 'WIRASWASTA', 'Layanan Wifi', 4, '2020-06-18 20:07:31', '2020-06-18 20:07:31'),
(1008, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 20:08:37', '2020-06-18 20:08:37'),
(1011, '2020-06-19', 2020, '08:00:00', 'L', 21, 'S1', 'SWASTA', 'Layanan Wifi', 4, '2020-06-18 20:10:44', '2020-06-18 20:10:44'),
(1012, '2020-06-19', 2020, '08:00:00', 'L', 21, 'S1', 'SWASTA', 'Layanan Wifi', 4, '2020-06-18 20:11:52', '2020-06-18 20:11:52'),
(1035, '2020-06-19', 2020, '08:00:00', 'L', 15, 'SD', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-18 20:35:56', '2020-06-18 20:35:56'),
(1036, '2020-06-19', 2020, '08:00:00', 'L', 15, 'SD', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-18 20:36:39', '2020-06-18 20:36:39'),
(1037, '2020-06-19', 2020, '08:00:00', 'L', 15, 'SD', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-18 20:39:46', '2020-06-18 20:39:46'),
(1038, '2020-06-19', 2020, '08:00:00', 'L', 15, 'SD', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-18 20:40:22', '2020-06-18 20:40:22'),
(1051, '2020-06-19', 2020, '08:00:00', 'L', 22, 'SD', 'SWASTA', 'Layanan Wifi', 6, '2020-06-18 20:51:52', '2020-06-18 20:51:52'),
(1052, '2020-06-19', 2020, '08:00:00', 'L', 22, 'SD', 'SWASTA', 'Layanan Wifi', 6, '2020-06-18 20:52:36', '2020-06-18 20:52:36'),
(1055, '2020-06-19', 2020, '08:00:00', 'L', 22, 'SD', 'SWASTA', 'Layanan Wifi', 6, '2020-06-18 20:55:34', '2020-06-18 20:55:34'),
(1056, '2020-06-19', 2020, '08:00:00', 'L', 22, 'SD', 'SWASTA', 'Layanan Wifi', 6, '2020-06-18 20:55:59', '2020-06-18 20:55:59'),
(1057, '2020-06-19', 2020, '08:00:00', 'L', 22, 'SD', 'SWASTA', 'Layanan Wifi', 6, '2020-06-18 20:57:51', '2020-06-18 20:57:51'),
(1111, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 5, '2020-06-18 21:11:30', '2020-06-18 21:11:30'),
(1112, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 5, '2020-06-18 21:12:27', '2020-06-18 21:12:27'),
(1117, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 21:17:58', '2020-06-18 21:17:58'),
(1120, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 21:20:16', '2020-06-18 21:20:16'),
(1130, '2020-06-19', 2020, '08:00:00', 'L', 30, 'S2', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 21:30:22', '2020-06-18 21:30:22'),
(1132, '2020-06-19', 2020, '08:00:00', 'L', 33, 'S3', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 21:32:56', '2020-06-18 21:32:56'),
(1221122, '2020-06-19', 2020, '08:00:00', 'L', 15, 'SMP', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 19:37:23', '2020-06-18 19:37:23'),
(1242444, '2020-05-08', 2020, '08:00:00', 'L', 16, 'SMP', 'TNI', 'Layanan Wifi', 0, '2020-05-07 20:10:32', '2020-05-07 20:10:32'),
(8979879, '2020-05-20', 2020, '08:00:00', 'L', 15, 'SMA', 'SWASTA', 'Peminjaman Taman', 0, '2020-05-20 02:36:10', '2020-05-20 02:36:10'),
(14131512, '2020-06-19', 2020, '08:00:00', 'L', 25, 'S2', 'PNS', 'Layanan Wifi', 5, '2020-06-18 19:44:46', '2020-06-18 19:44:46'),
(17010024, '2020-04-16', 2020, '08:00:00', 'L', 15, 'SD', 'PNS', 'Layanan Wifi', 0, '2020-04-16 04:08:56', '2020-04-16 04:08:56'),
(123456789, '2020-05-08', 2020, '13:00:00', 'P', 15, 'SMP', 'SWASTA', 'Layanan Wifi', 0, '2020-05-07 20:16:44', '2020-05-07 20:16:44'),
(245357747, '2020-04-17', 2020, '13:00:00', 'P', 19, 'S2', 'SWASTA', 'Layanan Wifi', 0, '2020-04-16 20:49:35', '2020-04-16 20:49:35'),
(841375434, '2020-06-13', 2020, '13:00:00', 'L', 15, 'S3', 'LAINNYA', 'Penggunaan Sarpras', 6, '2020-06-12 21:08:51', '2020-06-12 21:08:51'),
(856347246, '2020-05-20', 2020, '08:00:00', 'L', 18, 'SMP', 'SWASTA', 'Layanan Wifi', 1, '2020-05-20 04:08:13', '2020-05-20 04:08:13'),
(862452383, '2020-04-09', 2020, '13:00:00', 'L', 16, 'SMA', 'TNI', 'Layanan Wifi', 0, '2020-04-09 05:21:06', '2020-04-09 05:21:06'),
(876532668, '2020-05-20', 2020, '08:00:00', 'L', 16, 'S1', 'SWASTA', 'Layanan Wifi', 0, '2020-05-19 22:41:05', '2020-05-19 22:41:05'),
(989089098, '2020-06-19', 2020, '08:00:00', 'L', 30, 'S3', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 19:53:06', '2020-06-18 19:53:06'),
(1212121212, '2020-06-18', 2020, '08:00:00', 'L', 17, 'SD', 'PNS', 'Peminjaman Taman', 5, '2020-06-18 06:50:32', '2020-06-18 06:50:32'),
(1213331231, '2020-06-19', 2020, '08:00:00', 'L', 30, 'S3', 'LAINNYA', 'Peminjaman Taman', 5, '2020-06-18 19:49:44', '2020-06-18 19:49:44'),
(8120853285, '2020-06-11', 2020, '13:00:00', 'P', 15, 'SD', 'TNI', 'Peminjaman Taman', 6, '2020-06-11 01:39:16', '2020-06-11 01:39:16'),
(8564764646, '2020-05-20', 2020, '08:00:00', 'P', 65, 'SMA', 'TNI', 'Layanan Wifi', 0, '2020-05-19 22:57:09', '2020-05-19 22:57:09'),
(8579234834, '2020-06-13', 2020, '08:00:00', 'L', 15, 'SMP', 'WIRASWASTA', 'Penggunaan Sarpras', 6, '2020-06-12 21:14:22', '2020-06-12 21:14:22'),
(8579864742, '2020-06-18', 2020, '08:00:00', 'L', 15, 'S1', 'SWASTA', 'Penggunaan Sarpras', 4, '2020-06-17 17:53:32', '2020-06-17 17:53:32'),
(8675432346, '2020-05-20', 2020, '08:00:00', 'L', 21, 'SMP', 'SWASTA', 'Layanan Wifi', 0, '2020-05-20 02:27:24', '2020-05-20 02:27:24'),
(8683153814, '2020-06-10', 2020, '08:00:00', 'P', 16, 'SMA', 'POLRI', 'Penggunaan Sarpras', 5, '2020-06-09 20:19:53', '2020-06-09 20:19:53'),
(12345686778, '2020-05-08', 2020, '08:00:00', 'L', 16, 'SMA', 'TNI', 'Layanan Wifi', 0, '2020-05-07 20:06:00', '2020-05-07 20:06:00'),
(12391401436, '2020-04-17', 2020, '13:00:00', 'P', 19, 'SMA', 'SWASTA', 'Layanan Wifi', 0, '2020-04-16 20:59:52', '2020-04-16 20:59:52'),
(23457869879, '2020-04-17', 2020, '13:00:00', 'L', 67, 'SMP', 'SWASTA', 'Layanan Wifi', 0, '2020-04-16 17:32:40', '2020-04-16 17:32:40'),
(81123334444, '2020-06-16', 2020, '13:00:00', 'L', 26, 'SMP', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-15 22:39:42', '2020-06-15 22:39:42'),
(81212121212, '2020-06-18', 2020, '13:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-18 06:34:02', '2020-06-18 06:34:02'),
(81333744500, '2020-04-17', 2020, '13:00:00', 'P', 22, 'SMA', 'SWASTA', 'Layanan Wifi', 0, '2020-04-16 22:22:58', '2020-04-16 22:22:58'),
(81345666775, '2020-05-20', 2020, '08:00:00', 'P', 23, 'SMA', 'TNI', 'Layanan Wifi', 0, '2020-05-19 23:48:58', '2020-05-19 23:48:58'),
(85678678678, '2020-05-13', 2020, '13:00:00', 'P', 29, 'S1', 'SWASTA', 'Layanan Wifi', 0, '2020-05-12 20:01:00', '2020-05-12 20:01:00'),
(85704776986, '2020-05-08', 2020, '13:00:00', 'P', 15, 'SMP', 'SWASTA', 'Layanan Wifi', 0, '2020-05-07 20:27:47', '2020-05-07 20:27:47'),
(85734623475, '2020-06-13', 2020, '08:00:00', 'L', 15, 'SMP', 'WIRASWASTA', 'Penggunaan Sarpras', 6, '2020-06-12 21:22:52', '2020-06-12 21:22:52'),
(86753674123, '2020-05-11', 2020, '08:00:00', 'P', 22, 'SMA', 'POLRI', 'Layanan Wifi', 0, '2020-05-11 03:02:44', '2020-05-11 03:02:44'),
(86756756757, '2020-05-13', 2020, '13:00:00', 'P', 29, 'S1', 'SWASTA', 'Layanan Wifi', 0, '2020-05-12 20:02:24', '2020-05-12 20:02:24'),
(86787567242, '2020-06-05', 2020, '08:00:00', 'L', 15, 'SMP', 'TNI', 'Layanan Wifi', 4, '2020-06-04 21:13:53', '2020-06-04 21:13:53'),
(87263557876, '2020-05-08', 2020, '13:00:00', 'P', 15, 'S2', 'SWASTA', 'Layanan Wifi', 0, '2020-05-07 20:33:15', '2020-05-07 20:33:15'),
(815556777854, '2020-06-10', 2020, '08:00:00', 'P', 16, 'SMA', 'LAINNYA', 'Layanan Wifi', 5, '2020-06-09 20:14:27', '2020-06-09 20:14:27'),
(1234567890123450, '2019-11-09', 2019, '08:00:00', 'P', 23, 'S2', 'WIRASWASTA', 'Akta Kelahiran', 0, '2019-11-08 20:22:19', '2019-11-08 20:22:19'),
(1234567890123451, '2019-11-09', 2019, '08:00:00', 'L', 18, 'SMA', 'LAINNYA', 'Sertifikat', 0, '2019-11-08 19:57:56', '2019-11-08 19:57:56'),
(1234567890123452, '2019-11-09', 2019, '08:00:00', 'L', 21, 'S1', 'LAINNYA', 'KTP', 0, '2019-11-08 19:49:45', '2019-11-08 19:49:45'),
(1234567890123453, '2019-11-09', 2019, '08:00:00', 'P', 19, 'S1', 'SWASTA', 'Poli Umum', 0, '2019-11-08 19:50:37', '2019-11-08 19:50:37'),
(1234567890123454, '2019-11-09', 2019, '08:00:00', 'L', 15, 'SMP', 'LAINNYA', 'Akta Kelahiran', 0, '2019-11-08 19:51:33', '2019-11-08 19:51:33'),
(1234567890123455, '2019-11-09', 2019, '08:00:00', 'P', 23, 'S1', 'LAINNYA', 'KTP', 0, '2019-11-08 20:00:20', '2019-11-08 20:00:20'),
(1234567890123456, '2019-11-09', 2019, '08:00:00', 'P', 24, 'S2', 'WIRASWASTA', 'Sertifikat', 0, '2019-11-08 20:01:40', '2019-11-08 20:01:40'),
(1234567890123457, '2019-11-09', 2019, '08:00:00', 'L', 24, 'S3', 'SWASTA', 'KTP', 0, '2019-11-08 20:13:08', '2019-11-08 20:13:08'),
(1234567890123458, '2019-11-09', 2019, '08:00:00', 'L', 22, 'S2', 'WIRASWASTA', 'Sertifikat', 0, '2019-11-08 20:19:52', '2019-11-08 20:19:52'),
(1234567890123459, '2019-11-09', 2019, '08:00:00', 'L', 19, 'SMA', 'LAINNYA', 'Sertifikat', 0, '2019-11-08 20:21:16', '2019-11-08 20:21:16'),
(1307, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 4, '2020-06-18 23:07:50', '2020-06-18 23:07:50'),
(1310, '2020-06-19', 2020, '13:00:00', 'L', 15, 'SMP', 'LAINNYA', 'Peminjaman Taman', 4, '2020-06-18 23:11:15', '2020-06-18 23:11:15'),
(1326, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Penggunaan Sarpras', 5, '2020-06-18 23:27:30', '2020-06-18 23:27:30'),
(1346, '2020-06-19', 2020, '13:00:00', 'L', 21, 'S1', 'SWASTA', 'Peminjaman Taman', 4, '2020-06-18 23:47:06', '2020-06-18 23:47:06'),
(1422, '2020-06-19', 2020, '13:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-19 00:22:40', '2020-06-19 00:22:40'),
(809, '2020-06-19', 2020, '08:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-19 00:34:19', '2020-06-19 00:34:19'),
(1440, '2020-06-19', 2020, '13:00:00', 'L', 17, 'SMA', 'LAINNYA', 'Layanan Wifi', 6, '2020-06-19 00:40:52', '2020-06-19 00:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `taman`
--

CREATE TABLE `taman` (
  `taman_id` int(11) NOT NULL,
  `nama_taman` varchar(191) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `fungsi` varchar(191) NOT NULL,
  `layanan` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taman`
--

INSERT INTO `taman` (`taman_id`, `nama_taman`, `gambar`, `fungsi`, `layanan`, `alamat`, `updated_at`, `created_at`) VALUES
(4, 'Taman Sekartaji', '3-taman-696x413.jpeg', 'taman terbuka hijau', 'wifi, parkir, tempat sampah', 'Jl. Veteran, Mojoroto, Kota Kediri', '2020-06-15 22:04:48', '2020-06-15 22:04:48'),
(5, 'Taman Ngronggo', 'lingk1.jpg', 'Taman Rekreasi', 'Tempat Bermain anak, gazebo', 'Jl. Perintis Kemerdekaan, Ngrongggo, Kota Kediri', '2020-06-15 22:06:17', '2020-06-15 22:06:17'),
(6, 'Taman Memorial Park', 'tmppp.jpeg', 'Taman Rekreasi', 'wifi, parkir', 'Jl. PK Bangsa No. 93, Banjaran, Kota Kediri', '2020-06-15 22:07:59', '2020-06-15 22:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `NO_HP` (`NO_HP`),
  ADD KEY `taman_id` (`taman_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LOG_ID`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `NO_HP` (`NO_HP`) USING BTREE;

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`PERTANYAAN_ID`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD KEY `NO_HP` (`NO_HP`) USING BTREE,
  ADD KEY `taman_id` (`taman_id`) USING BTREE;

--
-- Indexes for table `taman`
--
ALTER TABLE `taman`
  ADD PRIMARY KEY (`taman_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LOG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `PERTANYAAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `NO_HP` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567890123460;

--
-- AUTO_INCREMENT for table `taman`
--
ALTER TABLE `taman`
  MODIFY `taman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`NO_HP`) REFERENCES `responden` (`NO_HP`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`taman_id`) REFERENCES `taman` (`taman_id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`NO_HP`) REFERENCES `responden` (`NO_HP`);

--
-- Constraints for table `taman`
--
ALTER TABLE `taman`
  ADD CONSTRAINT `taman_ibfk_1` FOREIGN KEY (`taman_id`) REFERENCES `responden` (`taman_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
