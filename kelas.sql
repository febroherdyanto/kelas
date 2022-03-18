-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Mar 2022 pada 21.09
-- Versi server: 5.7.36-cll-lve
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `febroher_kelas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_detail`
--

CREATE TABLE `k_detail` (
  `id_detail` int(11) NOT NULL,
  `id_kas` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_mhs` int(11) DEFAULT NULL,
  `k_1` varchar(5) DEFAULT 'N',
  `k_2` varchar(5) DEFAULT 'N',
  `k_3` varchar(5) DEFAULT 'N',
  `k_4` varchar(5) DEFAULT 'N',
  `k_5` varchar(5) DEFAULT 'N',
  `k_6` varchar(5) DEFAULT 'N',
  `k_7` varchar(5) DEFAULT 'N',
  `k_8` varchar(5) DEFAULT 'N',
  `k_9` varchar(5) DEFAULT 'N',
  `k_10` varchar(5) DEFAULT 'N',
  `k_11` varchar(5) DEFAULT 'N',
  `k_12` varchar(5) DEFAULT 'N',
  `total_tahun` varchar(10) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `k_detail`
--

INSERT INTO `k_detail` (`id_detail`, `id_kas`, `id_tahun`, `id_mhs`, `k_1`, `k_2`, `k_3`, `k_4`, `k_5`, `k_6`, `k_7`, `k_8`, `k_9`, `k_10`, `k_11`, `k_12`, `total_tahun`) VALUES
(150, 1, 1, 1, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(151, 1, 1, 2, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(152, 1, 1, 3, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(153, 1, 1, 4, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(154, 1, 1, 5, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(155, 1, 1, 6, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(156, 1, 1, 7, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(157, 1, 1, 8, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(158, 1, 1, 9, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(159, 1, 1, 10, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(160, 1, 1, 11, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(161, 1, 1, 12, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(162, 1, 1, 13, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(163, 1, 1, 14, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(164, 1, 1, 15, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(165, 1, 1, 16, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(166, 1, 1, 17, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(167, 1, 1, 18, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(168, 1, 1, 19, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(169, 1, 1, 20, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(170, 1, 1, 21, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(171, 1, 1, 22, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(172, 1, 1, 23, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(173, 1, 1, 24, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(174, 1, 1, 25, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(175, 1, 1, 26, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(176, 1, 1, 27, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(177, 1, 1, 28, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(178, 1, 1, 29, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(179, 1, 1, 30, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(180, 1, 1, 31, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(181, 1, 1, 32, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(182, 1, 1, 33, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(183, 1, 1, 34, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(184, 1, 1, 35, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(185, 1, 1, 36, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(186, 1, 1, 37, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(187, 1, 1, 38, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(188, 1, 1, 39, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(189, 1, 1, 40, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(190, 1, 1, 41, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(191, 1, 1, 42, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(192, 1, 1, 43, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(193, 1, 1, 44, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(194, 1, 1, 45, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(195, 1, 1, 46, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(196, 1, 1, 47, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(197, 1, 1, 48, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N'),
(198, 1, 2, 1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N'),
(199, 1, 2, 2, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(200, 1, 2, 3, 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(201, 1, 2, 4, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(202, 1, 2, 5, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(203, 1, 2, 6, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N'),
(204, 1, 2, 7, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(205, 1, 2, 8, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(206, 1, 2, 9, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'P', 'N'),
(207, 1, 2, 10, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(208, 1, 2, 11, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N'),
(209, 1, 2, 12, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'P', 'N', 'N', 'N'),
(210, 1, 2, 13, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(211, 1, 2, 14, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'P', 'N', 'N', 'N', 'N', 'N', 'N'),
(212, 1, 2, 15, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(213, 1, 2, 16, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N'),
(214, 1, 2, 17, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(215, 1, 2, 18, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(216, 1, 2, 19, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N'),
(217, 1, 2, 20, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N'),
(218, 1, 2, 21, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(219, 1, 2, 22, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(220, 1, 2, 23, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(221, 1, 2, 24, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(222, 1, 2, 25, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N'),
(223, 1, 2, 26, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(224, 1, 2, 27, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N'),
(225, 1, 2, 28, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(226, 1, 2, 29, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(227, 1, 2, 30, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'P', 'N'),
(228, 1, 2, 31, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'P', 'N', 'N', 'N'),
(229, 1, 2, 32, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(230, 1, 2, 33, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(231, 1, 2, 34, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(232, 1, 2, 35, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(233, 1, 2, 36, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N'),
(234, 1, 2, 37, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N'),
(235, 1, 2, 38, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(236, 1, 2, 39, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(237, 1, 2, 40, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(238, 1, 2, 41, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(239, 1, 2, 42, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(240, 1, 2, 43, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(241, 1, 2, 44, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(242, 1, 2, 45, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(243, 1, 2, 46, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(244, 1, 2, 47, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(245, 1, 2, 48, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(246, 1, 3, 1, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(247, 1, 3, 2, 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(248, 1, 3, 3, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(249, 1, 3, 4, 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(250, 1, 3, 5, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(251, 1, 3, 6, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(252, 1, 3, 7, 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(253, 1, 3, 8, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(254, 1, 3, 9, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(255, 1, 3, 10, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(256, 1, 3, 11, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(257, 1, 3, 12, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(258, 1, 3, 13, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(259, 1, 3, 14, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(260, 1, 3, 15, 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(261, 1, 3, 16, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(262, 1, 3, 17, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(263, 1, 3, 18, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(264, 1, 3, 19, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(265, 1, 3, 20, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(266, 1, 3, 21, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(267, 1, 3, 22, 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(268, 1, 3, 23, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(269, 1, 3, 24, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(270, 1, 3, 25, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(271, 1, 3, 26, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(272, 1, 3, 27, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(273, 1, 3, 28, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(274, 1, 3, 29, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(275, 1, 3, 30, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(276, 1, 3, 31, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(277, 1, 3, 32, 'Y', 'Y', 'P', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(278, 1, 3, 33, 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(279, 1, 3, 34, 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(280, 1, 3, 35, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(281, 1, 3, 36, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(282, 1, 3, 37, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(283, 1, 3, 38, 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(284, 1, 3, 39, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(285, 1, 3, 40, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(286, 1, 3, 41, 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(287, 1, 3, 42, 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(288, 1, 3, 43, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(289, 1, 3, 44, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(290, 1, 3, 45, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N'),
(291, 1, 3, 46, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(292, 1, 3, 47, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(293, 1, 3, 48, 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(294, 1, 4, 1, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(295, 1, 4, 2, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(296, 1, 4, 3, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(297, 1, 4, 4, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(298, 1, 4, 5, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(299, 1, 4, 6, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(300, 1, 4, 7, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(301, 1, 4, 8, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(302, 1, 4, 9, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(303, 1, 4, 10, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(304, 1, 4, 11, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(305, 1, 4, 12, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(306, 1, 4, 13, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(307, 1, 4, 14, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(308, 1, 4, 15, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(309, 1, 4, 16, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(310, 1, 4, 17, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(311, 1, 4, 18, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(312, 1, 4, 19, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(313, 1, 4, 20, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(314, 1, 4, 21, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(315, 1, 4, 22, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(316, 1, 4, 23, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(317, 1, 4, 24, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(318, 1, 4, 25, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(319, 1, 4, 26, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(320, 1, 4, 27, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(321, 1, 4, 28, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(322, 1, 4, 29, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(323, 1, 4, 30, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(324, 1, 4, 31, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(325, 1, 4, 32, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(326, 1, 4, 33, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(327, 1, 4, 34, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(328, 1, 4, 35, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(329, 1, 4, 36, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(330, 1, 4, 37, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(331, 1, 4, 38, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(332, 1, 4, 39, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(333, 1, 4, 40, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(334, 1, 4, 41, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(335, 1, 4, 42, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(336, 1, 4, 43, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(337, 1, 4, 44, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(338, 1, 4, 45, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(339, 1, 4, 46, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(340, 1, 4, 47, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(341, 1, 4, 48, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(342, 1, 4, 61, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(343, 1, 4, 62, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(344, 1, 4, 65, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(345, 1, 4, 66, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(346, 1, 4, 67, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(347, 1, 4, 68, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_kas`
--

CREATE TABLE `k_kas` (
  `id_kas` int(11) NOT NULL,
  `jago` int(11) NOT NULL,
  `qris` int(11) NOT NULL,
  `jml_kas` int(11) NOT NULL,
  `last_update` date NOT NULL,
  `update_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `k_kas`
--

INSERT INTO `k_kas` (`id_kas`, `jago`, `qris`, `jml_kas`, `last_update`, `update_by`) VALUES
(1, 1431712, 0, 1431712, '2022-03-17', '312010014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_tahun`
--

CREATE TABLE `k_tahun` (
  `id_tahun` int(11) NOT NULL,
  `nm_tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `k_tahun`
--

INSERT INTO `k_tahun` (`id_tahun`, `nm_tahun`) VALUES
(1, 2020),
(2, 2021),
(3, 2022),
(4, 2023),
(5, 2024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_upload`
--

CREATE TABLE `k_upload` (
  `id_upload` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `file` varchar(255) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `status` varchar(5) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `k_upload`
--

INSERT INTO `k_upload` (`id_upload`, `id_detail`, `tgl`, `jam`, `file`, `detail`, `status`) VALUES
(6, 153, '2021-12-09', '19:08:49', 'logo-mini.png', 'Saya bayar uang kas bulan November dan Desember 2020', 'Y'),
(7, 249, '2021-12-11', '18:19:59', 'bg zoom.jpeg', 'Pembayaran Uang Kas Bulan jan-feb 2022', 'Y'),
(8, 238, '2021-12-14', '13:52:24', 'images.png', 'Untuk pembayaran uang kas bulan desember', 'Y'),
(9, 199, '2021-12-14', '14:50:58', 'images.png', 'Saya Membayar uang kas bulan oktober', 'Y'),
(10, 188, '2021-12-27', '18:11:09', 'Screenshot_2021-12-27-17-48-13-01.jpg', '', 'Y'),
(11, 211, '2021-12-27', '04:36:23', 'UTS_RPL_Andriansyah_312010011.docx', '', 'Y'),
(12, 244, '2022-01-04', '13:32:59', 'Screenshot_2022-01-04-13-32-33-67_78ed797590cf9a33dfc5e341b7a9537a.jpg', '', 'Y'),
(13, 249, '2022-01-06', '18:00:11', 'WhatsApp Image 2022-01-06 at 5.59.50 PM.jpeg', 'Payment Kas 5 Bulan', 'Y'),
(14, 273, '2022-01-29', '08:41:36', 'WhatsApp Image 2022-01-29 at 08.41.08.jpeg', 'LUNAS', 'Y'),
(15, 208, '2022-02-01', '14:21:01', '416C6BC6-084B-4353-AB51-E7FF27F974B5.png', 'Tuntutan', 'Y'),
(16, 208, '2022-02-01', '14:22:59', 'CF8AFA17-5B8A-492D-90FE-642C8C19DB29.png', '', 'Y'),
(17, 208, '2022-02-01', '16:58:56', 'CF8AFA17-5B8A-492D-90FE-642C8C19DB29.png', '', 'Y'),
(18, 208, '2022-02-01', '17:24:48', 'CF8AFA17-5B8A-492D-90FE-642C8C19DB29.png', '', 'Y'),
(19, 252, '2022-03-03', '20:07:29', 'Screenshot_20220303-200411_BCA mobile.jpg', 'Gunawan-312010191 \r\nPembayaran Kas bln 1,2,3', 'Y'),
(20, 278, '2022-03-05', '19:23:26', 'Screenshot_2022-03-05-19-22-46-953_id.dana.jpg', '2 bulan maret sama april', 'Y'),
(21, 285, '2022-03-14', '20:12:32', 'IMG-20220314-WA0025.jpg', 'JAN - DES 2022', 'Y'),
(22, 279, '2022-03-15', '13:49:26', 'IMG_Tue Mar 15 13_47_23 GMT+07_00 2022.jpg', '', 'Y'),
(23, 199, '2022-03-15', '15:59:27', 'Screenshot_2022-03-15-15-56-21-85_121d0782f1cd8474b48c9b27865007fd.jpg', 'Udah yaa dari nov-maretðŸ’†ðŸ»â€â™‚ï¸', 'Y'),
(24, 290, '2022-03-16', '21:16:54', 'Screenshot_2022-03-16-21-00-35-050_com.jago.digitalBanking.jpg', '', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kelas` enum('YA','TIDAK') NOT NULL DEFAULT 'YA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama_lengkap`, `no_hp`, `email`, `kelas`) VALUES
(1, '312010244', 'ARIP HIDAYATTULOH', '08568900936', 'arip-hidayat@mhs.pelitabangsa.ac.id', 'YA'),
(2, '312010061', 'ABDUL RAHMAN', '089656415263', 'abd.rahman12@mhs.pelitabangsa.ac.id', 'YA'),
(3, '312010247', 'RIDHO KURNIAWAN', 'NULL', 'NULL', 'YA'),
(4, '312010043', 'FEBRO HERDYANTO', '085215565501', 'febroherdyanto@mhs.pelitabangsa.ac.id', 'YA'),
(5, '312010094', 'MUHAMMAD CHAFIDZ', 'NULL', 'NULL', 'YA'),
(6, '312010111', 'NUR AS SINDY', '83896410402', 'nurassindy012@mhs.pelitabangsa.ac.id', 'YA'),
(7, '312010191', 'GUNAWAN', '8111928091', 'gunawan.1603@mhs.pelitabangsa.ac.id', 'YA'),
(8, '312010166', 'SABRON JAMIL', 'NULL', 'NULL', 'YA'),
(9, '312010140', 'M. AQIL ALFARID', '81295456271', 'muhammadaqil@mhs.pelitabangsa.ac.id', 'YA'),
(10, '312010159', 'HENDRIO PARULIAN SIMANJUNTAK', 'NULL', 'NULL', 'YA'),
(11, '312010210', 'MUHAMMAD FARHAN ALFARIZI', '85156298225', 'farhan.19@mhs.pelitabangsa.ac.id', 'YA'),
(12, '312010148', 'BANGKIT AKBAR ANGGARA', '81382202954', 'bangkitakbaranggara@mhs.pelitabangsa.ac.id', 'YA'),
(13, '312010189', 'DANI DARSONO', 'NULL', 'NULL', 'YA'),
(14, '312010023', 'LIA AMALIAH', '85872962313', 'lia.amaliah0204@mhs.pelitabangsa.ac.id', 'YA'),
(15, '312010027', 'RUDI HARTONO', '81282391985', 'rudihartono@mhs.pelitabangsa.ac.id', 'YA'),
(16, '312010207', 'AKA ERLANDA', '85788192290', 'aka-erlanda@mhs.pelitabangsa.ac.id', 'YA'),
(17, '312010272', 'CHAIRUL FAHMI AKBAR', 'NULL', 'NULL', 'YA'),
(18, '312010007', 'HENDRI HENDRAWAN', 'NULL', 'NULL', 'YA'),
(19, '312010037', 'AHMAD REIZA', '087875817998', 'ahmadreiza@mhs.pelitabangsa.ac.id', 'YA'),
(20, '312010087', 'FARHAN NUR KAHFI FAUZI', '81282761818', 'farhan@mhs.pelitabangsa.ac.id', 'YA'),
(21, '312010088', 'RIZKY MEYLANA YOANKO', 'NULL', 'NULL', 'YA'),
(22, '312010180', 'MULIFATKHUL RACHIIM', '89636662049', 'Mulifatkhul.rach2@gmail.com', 'YA'),
(23, '312010233', 'AJI MUHLISIN', '87789757836', 'ajimuhlisin95@mhs.pelitabangsa.ac.id', 'YA'),
(24, '312010239', 'VENANSIUS ALFIANUS KASE', 'NULL', 'NULL', 'YA'),
(25, '312010039', 'SANDI BINTARA', '82128285788', 'Sabin.f22@mhs.pelitabangsa.ac.id', 'YA'),
(26, '312010100', 'RIAN PRASETYO', 'NULL', 'NULL', 'YA'),
(27, '312010208', 'ADE PRASETIA', '82229195752', 'Ade020506@mhs.pelitabangsa.ac.id', 'YA'),
(28, '312010001', 'FAZA ARDAN KUSUMA', '85725414723', 'faza.kusuma47@mhs.pelitabangsa.ac.id', 'YA'),
(29, '312010015', 'FERIANSYAH', 'NULL', 'NULL', 'YA'),
(30, '312010024', 'KURNIA DIFA WIJAYA', 'NULL', 'NULL', 'YA'),
(31, '312010032', 'SITI NUR FAUZIAH', 'NULL', 'NULL', 'YA'),
(32, '312010152', 'AHMAD MUAFIQ', '81386111106', 'ahmadmuafiq@mhs.pelitabangsa.ac.id', 'YA'),
(33, '312010170', 'BAGUS TRI HANDONO', '085808406065', 'bagustri00@mhs.pelitabangsa.ac.id', 'YA'),
(34, '312010011', 'ANDRIANSYAH', '082149776790', 'andri.a13@mhs.pelitabangsa.ac.id', 'YA'),
(35, '312010081', 'AGUSTIN AFAREL', 'NULL', 'NULL', 'YA'),
(36, '312010122', 'MOCH. NAUVAL FARIS MUZAKI', '85801179570', 'naufal66@mhs.pelitabangsa.ac.id', 'YA'),
(37, '312010202', 'BAGUS TRIARSA', '87815401506', 'bagus.08@mhs.pelitabangsa.ac.id', 'YA'),
(38, '312010231', 'MOHAMAD FARIZAL ARIFIN', 'NULL', 'NULL', 'YA'),
(39, '312010234', 'WIRLIAN TEGAR PUNJOPO', '881025566809', 'wirlian15@mhs.pelitabangsa.ac.id', 'YA'),
(40, '312010004', 'ANTONIUS SIMANJUNTAK', 'NULL', 'NULL', 'YA'),
(41, '312010014', 'MIFTAHU RIZKIYAH', '85880372322', 'mtrizkiyah@mhs.pelitabangsa.ac.id', 'YA'),
(42, '312010104', 'ASRI LIYA ASTUTI', '81329633114', 'asriliyaastuti@mhs.pelitabangsa.ac.id', 'YA'),
(43, '312010149', 'INDRA NOVITA D. SIMANJUNTAK', '85289692193', 'Indra.novita@mhs.pelitabangsa.ac.id', 'YA'),
(44, '312010036', 'MUHAMMAD RIZKI SETIAWAN', 'NULL', 'NULL', 'YA'),
(45, '312010095', 'ANTINI PERMATASARI', '085701309857', 'antinipermatasari92@gmail.com', 'YA'),
(46, '312010277', 'MUHAMMAD RENDE RAMADHANI', '82299367180', 'rende.ramadhani@mhs.pelitabangsa.ac.id', 'YA'),
(47, '312010074', 'DIKY RAMADHANI', '087880327326', 'diky.ramadhani@mhs.pelitabangsa.ac.id', 'YA'),
(48, '312010154', 'DANI DARMAWAN', '82124304239', 'danidrwn@mhs.pelitabangsa.ac.id', 'YA'),
(61, '311910570', 'AGUNG ADLHIANTO', '081286156685', 'adhlianto18@gmail.com', 'TIDAK'),
(62, '311710177', 'TRI REZA OKTAVIAN', '082114488833', 'tri.rezzaocthavian@gmail.com', 'TIDAK'),
(65, '311920813', 'BAROKAH RAHMATTIKA', '089522339727', 'barokahrahmattika1997@gmail.com', 'TIDAK'),
(66, '311810554', 'DANI SARIF PIRANTI', '085939769806', 'danipiranti97@mhs.pelitabangsa.ac.id', 'TIDAK'),
(67, '312010235', 'ILHAM AGUNG P', '081390446136', 'ilhamagungpamungkass@mhs.pelitabangsa.ac.id', 'TIDAK'),
(68, '313010061', 'ABDUL RAHMAN', '089656415263', 'abd.rahman12@mhs.pelitabangsa.ac.id', 'YA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumpulan`
--

CREATE TABLE `pengumpulan` (
  `id_pengumpulan` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time DEFAULT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumpulan`
--

INSERT INTO `pengumpulan` (`id_pengumpulan`, `id_tugas`, `id_mhs`, `tgl`, `jam`, `file`) VALUES
(8, 2, 45, '2021-10-04', NULL, 'ANTINI PERMATASARI_312010095_TUGAS MASKRIT 1.pdf'),
(17, 2, 4, '2021-10-04', NULL, 'FEBRO HERDYANTO_312010043_TUGAS MASKRIT 1.pdf'),
(18, 2, 9, '2021-10-04', NULL, 'M. AQIL ALFARID_312010140_TUGAS MASKRIT 1.pdf'),
(19, 2, 48, '2021-10-04', NULL, 'DANI DARMAWAN_312010154_TUGAS MASKRIT 1.pdf'),
(21, 2, 28, '2021-10-04', NULL, 'FAZA ARDAN KUSUMA_312010001_TUGAS MASKRIT 1.pdf'),
(22, 2, 12, '2021-10-04', NULL, 'BANGKIT AKBAR ANGGARA_312010148_TUGAS MASKRIT 1.pdf'),
(23, 2, 42, '2021-10-04', NULL, 'ASRI LIYA ASTUTI_312010104_TUGAS MASKRIT 1.pdf'),
(24, 2, 15, '2021-10-04', NULL, 'RUDI HARTONO_312010027_TUGAS MASKRIT 1.pdf'),
(25, 2, 41, '2021-10-05', NULL, 'MIFTAHU RIZKIYAH_312010014_TUGAS MASKRIT 1.pdf'),
(26, 2, 25, '2021-10-05', NULL, 'SANDI BINTARA_312010039_TUGAS MASKRIT 1.pdf'),
(27, 2, 38, '2021-10-05', NULL, 'MOHAMAD FARIZAL ARIFIN_312010231_TUGAS MASKRIT 1.pdf'),
(28, 2, 2, '2021-10-05', NULL, 'ABDUL RAHMAN_312010061_TUGAS MASKRIT 1.pdf'),
(30, 2, 23, '2021-10-05', NULL, 'AJI MUHLISIN_312010233_TUGAS MASKRIT 1.pdf'),
(31, 2, 36, '2021-10-05', NULL, 'MOCH. NAUVAL FARIS MUZAKI_312010122_TUGAS MASKRIT 1.pdf'),
(32, 2, 7, '2021-10-05', NULL, 'GUNAWAN_312010191_TUGAS MASKRIT 1.pdf'),
(33, 2, 19, '2021-10-05', NULL, 'AHMAD REIZA_312010037_TUGAS MASKRIT 1.pdf'),
(34, 2, 27, '2021-10-05', NULL, 'ADE PRASETIA_312010208_TUGAS MASKRIT 1.pdf'),
(35, 2, 47, '2021-10-05', NULL, 'DIKY RAMADHANI_312010074_TUGAS MASKRIT 1.pdf'),
(36, 2, 30, '2021-10-06', NULL, 'KURNIA DIFA WIJAYA_312010024_TUGAS MASKRIT 1.pdf'),
(37, 2, 39, '2021-10-06', NULL, 'WIRLIAN TEGAR PUNJOPO_312010234_TUGAS MASKRIT 1.pdf'),
(38, 2, 31, '2021-10-06', NULL, 'SITI NUR FAUZIAH_312010032_TUGAS MASKRIT 1.pdf'),
(39, 2, 22, '2021-10-06', NULL, 'MULIFATKHUL RACHIIM_312010180_TUGAS MASKRIT 1.pdf'),
(40, 2, 61, '2021-10-06', NULL, 'AGUNG ADLHIANTO_311910570_TUGAS MASKRIT 1.pdf'),
(41, 2, 1, '2021-10-06', NULL, 'ARIP HIDAYATTULOH_312010244_TUGAS MASKRIT 1.pdf'),
(42, 2, 11, '2021-10-06', NULL, 'MUHAMMAD FARHAN ALFARIZI_312010210_TUGAS MASKRIT 1.pdf'),
(43, 2, 14, '2021-10-06', NULL, 'LIA AMALIAH_312010023_TUGAS MASKRIT 1.pdf'),
(44, 2, 62, '2021-10-06', NULL, 'TRI REZA OKTAVIAN_311710177_TUGAS MASKRIT 1.pdf'),
(45, 2, 16, '2021-10-06', NULL, 'AKA ERLANDA_312010207_TUGAS MASKRIT 1.pdf'),
(46, 2, 37, '2021-10-06', NULL, 'BAGUS TRIARSA_312010202_TUGAS MASKRIT 1.pdf'),
(47, 2, 40, '2021-10-06', NULL, 'ANTONIUS SIMANJUNTAK_312010004_TUGAS MASKRIT 1.pdf'),
(48, 2, 40, '2021-10-06', NULL, 'ANTONIUS SIMANJUNTAK_312010004_TUGAS MASKRIT 1.pdf'),
(49, 2, 46, '2021-10-06', NULL, 'MUHAMMAD RENDE RAMADHANI_312010277_TUGAS MASKRIT 1.pdf'),
(50, 2, 32, '2021-10-06', NULL, 'AHMAD MUAFIQ_312010152_TUGAS MASKRIT 1.pdf'),
(51, 3, 4, '2021-11-15', NULL, 'FEBRO HERDYANTO_312010043_TUGAS PERKULIAHAN 1-7.pdf'),
(52, 3, 4, '2021-11-15', NULL, 'FEBRO HERDYANTO_312010043_TUGAS PERKULIAHAN 1-7.pdf'),
(55, 4, 45, '2021-11-20', NULL, 'ANTINI PERMATASARI_312010095_UTS MATEMATIKA DISKRIT.pdf'),
(56, 4, 33, '2021-11-21', NULL, 'BAGUS TRI HANDONO_312010170_UTS MATEMATIKA DISKRIT.pdf'),
(57, 4, 4, '2021-11-21', NULL, 'FEBRO HERDYANTO_312010043_UTS MATEMATIKA DISKRIT.pdf'),
(58, 4, 30, '2021-11-21', NULL, 'KURNIA DIFA WIJAYA_312010024_UTS MATEMATIKA DISKRIT.pdf'),
(59, 4, 19, '2021-11-21', NULL, 'AHMAD REIZA_312010037_UTS MATEMATIKA DISKRIT.pdf'),
(60, 4, 28, '2021-11-21', NULL, 'FAZA ARDAN KUSUMA_312010001_UTS MATEMATIKA DISKRIT.pdf'),
(61, 4, 16, '2021-11-21', NULL, 'AKA ERLANDA_312010207_UTS MATEMATIKA DISKRIT.pdf'),
(62, 4, 36, '2021-11-21', NULL, 'MOCH. NAUVAL FARIS MUZAKI_312010122_UTS MATEMATIKA DISKRIT.pdf'),
(63, 4, 48, '2021-11-21', NULL, 'DANI DARMAWAN_312010154_UTS MATEMATIKA DISKRIT.pdf'),
(64, 4, 42, '2021-11-21', NULL, 'ASRI LIYA ASTUTI_312010104_UTS MATEMATIKA DISKRIT.pdf'),
(65, 4, 12, '2021-11-21', NULL, 'BANGKIT AKBAR ANGGARA_312010148_UTS MATEMATIKA DISKRIT.pdf'),
(66, 4, 22, '2021-11-21', NULL, 'MULIFATKHUL RACHIIM_312010180_UTS MATEMATIKA DISKRIT.pdf'),
(67, 4, 34, '2021-11-21', NULL, 'ANDRIANSYAH_312010011_UTS MATEMATIKA DISKRIT.pdf'),
(68, 4, 7, '2021-11-21', NULL, 'GUNAWAN_312010191_UTS MATEMATIKA DISKRIT.pdf'),
(69, 4, 9, '2021-11-21', NULL, 'M. AQIL ALFARID_312010140_UTS MATEMATIKA DISKRIT.pdf'),
(70, 4, 65, '2021-11-21', NULL, 'BAROKAH RAHMATTIKA_311920813_UTS MATEMATIKA DISKRIT.pdf'),
(71, 4, 9, '2021-11-21', NULL, 'M. AQIL ALFARID_312010140_UTS MATEMATIKA DISKRIT.pdf'),
(72, 4, 25, '2021-11-21', NULL, 'SANDI BINTARA_312010039_UTS MATEMATIKA DISKRIT.pdf'),
(73, 4, 2, '2021-11-21', NULL, 'ABDUL RAHMAN_312010061_UTS MATEMATIKA DISKRIT.pdf'),
(74, 4, 32, '2021-11-21', NULL, 'AHMAD MUAFIQ_312010152_UTS MATEMATIKA DISKRIT.pdf'),
(75, 4, 40, '2021-11-22', NULL, 'ANTONIUS SIMANJUNTAK_312010004_UTS MATEMATIKA DISKRIT.pdf'),
(76, 4, 11, '2021-11-22', NULL, 'MUHAMMAD FARHAN ALFARIZI_312010210_UTS MATEMATIKA DISKRIT.pdf'),
(77, 4, 15, '2021-11-22', NULL, 'RUDI HARTONO_312010027_UTS MATEMATIKA DISKRIT.pdf'),
(78, 4, 41, '2021-11-22', NULL, 'MIFTAHU RIZKIYAH_312010014_UTS MATEMATIKA DISKRIT.pdf'),
(79, 4, 31, '2021-11-22', NULL, 'SITI NUR FAUZIAH_312010032_UTS MATEMATIKA DISKRIT.pdf'),
(80, 4, 46, '2021-11-22', NULL, 'MUHAMMAD RENDE RAMADHANI_312010277_UTS MATEMATIKA DISKRIT.pdf'),
(81, 4, 27, '2021-11-22', NULL, 'ADE PRASETIA_312010208_UTS MATEMATIKA DISKRIT.pdf'),
(82, 4, 38, '2021-11-22', NULL, 'MOHAMAD FARIZAL ARIFIN_312010231_UTS MATEMATIKA DISKRIT.pdf'),
(83, 4, 47, '2021-11-22', NULL, 'DIKY RAMADHANI_312010074_UTS MATEMATIKA DISKRIT.pdf'),
(84, 4, 14, '2021-11-22', NULL, 'LIA AMALIAH_312010023_UTS MATEMATIKA DISKRIT.pdf'),
(85, 4, 39, '2021-11-22', NULL, 'WIRLIAN TEGAR PUNJOPO_312010234_UTS MATEMATIKA DISKRIT.pdf'),
(86, 14, 1, '2021-11-27', '12:22:17', 'ARIP HIDAYATTULOH_312010244_TUGAS MATEMATIKA DISKRIT.pdf'),
(87, 14, 36, '2021-11-27', '12:41:12', 'MOCH. NAUVAL FARIS MUZAKI_312010122_TUGAS MATEMATIKA DISKRIT.pdf'),
(88, 14, 33, '2021-11-27', '12:42:32', 'BAGUS TRI HANDONO_312010170_TUGAS MATEMATIKA DISKRIT.pdf'),
(89, 14, 12, '2021-11-27', '17:25:18', 'BANGKIT AKBAR ANGGARA_312010148_TUGAS MATEMATIKA DISKRIT.pdf'),
(90, 14, 22, '2021-11-27', '19:44:54', 'MULIFATKHUL RACHIIM_312010180_TUGAS MATEMATIKA DISKRIT.pdf'),
(91, 14, 16, '2021-11-27', '20:06:24', 'AKA ERLANDA_312010207_TUGAS MATEMATIKA DISKRIT.pdf'),
(92, 14, 48, '2021-11-27', '20:19:55', 'DANI DARMAWAN_312010154_TUGAS MATEMATIKA DISKRIT.pdf'),
(93, 14, 2, '2021-11-27', '21:20:19', 'ABDUL RAHMAN_312010061_TUGAS MATEMATIKA DISKRIT.pdf'),
(94, 14, 41, '2021-11-27', '21:52:39', 'MIFTAHU RIZKIYAH_312010014_TUGAS MATEMATIKA DISKRIT.pdf'),
(95, 14, 30, '2021-11-27', '23:01:17', 'KURNIA DIFA WIJAYA_312010024_TUGAS MATEMATIKA DISKRIT.pdf'),
(96, 14, 14, '2021-11-27', '03:21:31', 'LIA AMALIAH_312010023_TUGAS MATEMATIKA DISKRIT.pdf'),
(97, 14, 23, '2021-11-28', '12:42:00', 'AJI MUHLISIN_312010233_TUGAS MATEMATIKA DISKRIT.pdf'),
(98, 14, 42, '2021-11-28', '13:07:42', 'ASRI LIYA ASTUTI_312010104_TUGAS MATEMATIKA DISKRIT.pdf'),
(99, 14, 27, '2021-11-28', '13:36:03', 'ADE PRASETIA_312010208_TUGAS MATEMATIKA DISKRIT.pdf'),
(100, 14, 61, '2021-11-28', '15:03:40', 'AGUNG ADLHIANTO_311910570_TUGAS MATEMATIKA DISKRIT.pdf'),
(101, 14, 47, '2021-11-28', '17:30:01', 'DIKY RAMADHANI_312010074_TUGAS MATEMATIKA DISKRIT.pdf'),
(102, 14, 45, '2021-11-28', '19:11:45', 'ANTINI PERMATASARI_312010095_TUGAS MATEMATIKA DISKRIT.pdf'),
(103, 14, 7, '2021-11-28', '19:47:21', 'GUNAWAN_312010191_TUGAS MATEMATIKA DISKRIT.pdf'),
(104, 14, 25, '2021-11-28', '22:01:01', 'SANDI BINTARA_312010039_TUGAS MATEMATIKA DISKRIT.pdf'),
(105, 14, 28, '2021-11-29', '12:31:33', 'FAZA ARDAN KUSUMA_312010001_TUGAS MATEMATIKA DISKRIT.pdf'),
(106, 14, 34, '2021-11-29', '19:11:27', 'ANDRIANSYAH_312010011_TUGAS MATEMATIKA DISKRIT.pdf'),
(107, 14, 4, '2021-11-30', '20:15:14', 'FEBRO HERDYANTO_312010043_TUGAS MATEMATIKA DISKRIT.pdf'),
(108, 14, 9, '2021-11-30', '20:16:06', 'M. AQIL ALFARID_312010140_TUGAS MATEMATIKA DISKRIT.pdf'),
(109, 14, 15, '2021-11-30', '23:32:02', 'RUDI HARTONO_312010027_TUGAS MATEMATIKA DISKRIT.pdf'),
(110, 14, 39, '2021-12-01', '14:27:13', 'WIRLIAN TEGAR PUNJOPO_312010234_TUGAS MATEMATIKA DISKRIT.pdf'),
(111, 14, 46, '2021-12-01', '21:22:16', 'MUHAMMAD RENDE RAMADHANI_312010277_TUGAS MATEMATIKA DISKRIT.pdf'),
(112, 14, 19, '2021-12-01', '22:25:02', 'AHMAD REIZA_312010037_TUGAS MATEMATIKA DISKRIT.pdf'),
(113, 14, 40, '2021-12-02', '08:31:54', 'ANTONIUS SIMANJUNTAK_312010004_TUGAS MATEMATIKA DISKRIT.pdf'),
(114, 14, 65, '2021-12-02', '10:18:51', 'BAROKAH RAHMATTIKA_311920813_TUGAS MATEMATIKA DISKRIT.pdf'),
(115, 14, 32, '2021-12-02', '10:55:31', 'AHMAD MUAFIQ_312010152_TUGAS MATEMATIKA DISKRIT.pdf'),
(116, 14, 31, '2021-12-02', '11:35:04', 'SITI NUR FAUZIAH_312010032_TUGAS MATEMATIKA DISKRIT.pdf'),
(117, 14, 11, '2021-12-02', '12:10:15', 'MUHAMMAD FARHAN ALFARIZI_312010210_TUGAS MATEMATIKA DISKRIT.pdf'),
(118, 14, 38, '2021-12-02', '18:20:52', 'MOHAMAD FARIZAL ARIFIN_312010231_TUGAS MATEMATIKA DISKRIT.pdf'),
(121, 20, 33, '2021-12-11', '19:26:43', 'BAGUS TRI HANDONO_312010170_TUGAS MATEMATIKA DISKRIT.pdf'),
(122, 20, 16, '2021-12-11', '22:27:45', 'AKA ERLANDA_312010207_TUGAS MATEMATIKA DISKRIT.pdf'),
(123, 20, 48, '2021-12-12', '12:25:03', 'DANI DARMAWAN_312010154_TUGAS MATEMATIKA DISKRIT.pdf'),
(124, 20, 12, '2021-12-13', '09:38:08', 'BANGKIT AKBAR ANGGARA_312010148_TUGAS MATEMATIKA DISKRIT.pdf'),
(125, 20, 34, '2021-12-13', '19:55:30', 'ANDRIANSYAH_312010011_TUGAS MATEMATIKA DISKRIT.pdf'),
(126, 20, 42, '2021-12-13', '21:25:12', 'ASRI LIYA ASTUTI_312010104_TUGAS MATEMATIKA DISKRIT.pdf'),
(127, 20, 28, '2021-12-13', '23:26:10', 'FAZA ARDAN KUSUMA_312010001_TUGAS MATEMATIKA DISKRIT.pdf'),
(128, 20, 22, '2021-12-14', '10:11:30', 'MULIFATKHUL RACHIIM_312010180_TUGAS MATEMATIKA DISKRIT.pdf'),
(129, 20, 23, '2021-12-14', '10:56:05', 'AJI MUHLISIN_312010233_TUGAS MATEMATIKA DISKRIT.pdf'),
(130, 20, 45, '2021-12-14', '14:00:47', 'ANTINI PERMATASARI_312010095_TUGAS MATEMATIKA DISKRIT.pdf'),
(131, 20, 27, '2021-12-14', '21:31:36', 'ADE PRASETIA_312010208_TUGAS MATEMATIKA DISKRIT.pdf'),
(132, 20, 2, '2021-12-14', '23:39:17', 'ABDUL RAHMAN_312010061_TUGAS MATEMATIKA DISKRIT.pdf'),
(133, 20, 15, '2021-12-14', '00:53:54', 'RUDI HARTONO_312010027_TUGAS MATEMATIKA DISKRIT.pdf'),
(134, 20, 39, '2021-12-15', '10:07:49', 'WIRLIAN TEGAR PUNJOPO_312010234_TUGAS MATEMATIKA DISKRIT.pdf'),
(135, 20, 41, '2021-12-15', '17:29:53', 'MIFTAHU RIZKIYAH_312010014_TUGAS MATEMATIKA DISKRIT.pdf'),
(136, 20, 7, '2021-12-15', '21:04:18', 'GUNAWAN_312010191_TUGAS MATEMATIKA DISKRIT.pdf'),
(137, 20, 46, '2021-12-15', '22:28:12', 'MUHAMMAD RENDE RAMADHANI_312010277_TUGAS MATEMATIKA DISKRIT.pdf'),
(138, 20, 4, '2021-12-15', '23:20:22', 'FEBRO HERDYANTO_312010043_TUGAS MATEMATIKA DISKRIT.pdf'),
(139, 20, 47, '2021-12-16', '09:05:12', 'DIKY RAMADHANI_312010074_TUGAS MATEMATIKA DISKRIT.pdf'),
(140, 20, 30, '2021-12-16', '09:21:48', 'KURNIA DIFA WIJAYA_312010024_TUGAS MATEMATIKA DISKRIT.pdf'),
(141, 20, 40, '2021-12-16', '09:31:46', 'ANTONIUS SIMANJUNTAK_312010004_TUGAS MATEMATIKA DISKRIT.pdf'),
(142, 20, 9, '2021-12-16', '10:09:15', 'M. AQIL ALFARID_312010140_TUGAS MATEMATIKA DISKRIT.pdf'),
(143, 20, 65, '2021-12-16', '12:07:48', 'BAROKAH RAHMATTIKA_311920813_TUGAS MATEMATIKA DISKRIT.pdf'),
(144, 20, 31, '2021-12-16', '12:17:22', 'SITI NUR FAUZIAH_312010032_TUGAS MATEMATIKA DISKRIT.pdf'),
(145, 20, 25, '2021-12-16', '12:20:58', 'SANDI BINTARA_312010039_TUGAS MATEMATIKA DISKRIT.pdf'),
(146, 20, 25, '2021-12-16', '12:21:10', 'SANDI BINTARA_312010039_TUGAS MATEMATIKA DISKRIT.pdf'),
(147, 20, 11, '2021-12-16', '12:33:03', 'MUHAMMAD FARHAN ALFARIZI_312010210_TUGAS MATEMATIKA DISKRIT.pdf'),
(148, 20, 32, '2021-12-16', '12:58:14', 'AHMAD MUAFIQ_312010152_TUGAS MATEMATIKA DISKRIT.pdf'),
(149, 20, 38, '2021-12-16', '13:16:40', 'MOHAMAD FARIZAL ARIFIN_312010231_TUGAS MATEMATIKA DISKRIT.pdf'),
(150, 21, 4, '2021-12-27', '19:00:15', 'FEBRO HERDYANTO_312010043_CONTOH TUGAS RPL - WHITE AND BLACK BOX TESTING.pdf'),
(151, 21, 4, '2022-01-03', '16:21:12', 'FEBRO HERDYANTO_312010043_CONTOH TUGAS RPL - WHITE AND BLACK BOX TESTING.docx'),
(152, 22, 2, '2022-01-03', '20:43:36', 'ABDUL RAHMAN_312010061_TUGAS SEBELUM UAS.docx'),
(153, 22, 45, '2022-01-03', '21:50:57', 'ANTINI PERMATASARI_312010095_TUGAS SEBELUM UAS.docx'),
(154, 22, 41, '2022-01-03', '21:51:46', 'MIFTAHU RIZKIYAH_312010014_TUGAS SEBELUM UAS.docx'),
(155, 22, 33, '2022-01-03', '21:52:47', 'BAGUS TRI HANDONO_312010170_TUGAS SEBELUM UAS.docx'),
(156, 22, 15, '2022-01-03', '22:49:08', 'RUDI HARTONO_312010027_TUGAS SEBELUM UAS.docx'),
(157, 22, 14, '2022-01-03', '23:50:44', 'LIA AMALIAH_312010023_TUGAS SEBELUM UAS.docx'),
(158, 22, 12, '2022-01-04', '09:04:03', 'BANGKIT AKBAR ANGGARA_312010148_TUGAS SEBELUM UAS.docx'),
(159, 22, 38, '2022-01-04', '10:00:58', 'MOHAMAD FARIZAL ARIFIN_312010231_TUGAS SEBELUM UAS.docx'),
(160, 22, 30, '2022-01-04', '20:03:02', 'KURNIA DIFA WIJAYA_312010024_TUGAS SEBELUM UAS.docx'),
(161, 22, 42, '2022-01-04', '21:28:17', 'ASRI LIYA ASTUTI_312010104_TUGAS SEBELUM UAS.docx'),
(162, 22, 48, '2022-01-05', '08:20:37', 'DANI DARMAWAN_312010154_TUGAS SEBELUM UAS.docx'),
(163, 22, 48, '2022-01-05', '08:21:17', 'DANI DARMAWAN_312010154_TUGAS SEBELUM UAS.docx'),
(164, 22, 27, '2022-01-05', '08:22:06', 'ADE PRASETIA_312010208_TUGAS SEBELUM UAS.docx'),
(165, 22, 27, '2022-01-05', '08:22:42', 'ADE PRASETIA_312010208_TUGAS SEBELUM UAS.docx'),
(166, 22, 22, '2022-01-05', '17:57:00', 'MULIFATKHUL RACHIIM_312010180_TUGAS SEBELUM UAS.docx'),
(167, 22, 65, '2022-01-05', '19:25:57', 'BAROKAH RAHMATTIKA_311920813_TUGAS SEBELUM UAS.docx'),
(168, 22, 34, '2022-01-05', '19:56:43', 'ANDRIANSYAH_312010011_TUGAS SEBELUM UAS.docx'),
(169, 22, 4, '2022-01-05', '20:32:50', 'FEBRO HERDYANTO_312010043_TUGAS SEBELUM UAS.docx'),
(170, 22, 25, '2022-01-05', '20:34:24', 'SANDI BINTARA_312010039_TUGAS SEBELUM UAS.docx'),
(171, 22, 1, '2022-01-05', '22:06:03', 'ARIP HIDAYATTULOH_312010244_TUGAS SEBELUM UAS.docx'),
(172, 22, 16, '2022-01-05', '00:42:15', 'AKA ERLANDA_312010207_TUGAS SEBELUM UAS.docx'),
(173, 22, 7, '2022-01-05', '02:28:04', 'GUNAWAN_312010191_TUGAS SEBELUM UAS.docx'),
(174, 22, 28, '2022-01-06', '08:28:08', 'FAZA ARDAN KUSUMA_312010001_TUGAS SEBELUM UAS.docx'),
(175, 22, 31, '2022-01-06', '09:36:13', 'SITI NUR FAUZIAH_312010032_TUGAS SEBELUM UAS.docx'),
(176, 22, 36, '2022-01-06', '09:58:15', 'MOCH. NAUVAL FARIS MUZAKI_312010122_TUGAS SEBELUM UAS.docx'),
(177, 22, 40, '2022-01-06', '09:59:58', 'ANTONIUS SIMANJUNTAK_312010004_TUGAS SEBELUM UAS.docx'),
(178, 22, 39, '2022-01-06', '11:10:23', 'WIRLIAN TEGAR PUNJOPO_312010234_TUGAS SEBELUM UAS.docx'),
(179, 22, 23, '2022-01-06', '11:32:58', 'AJI MUHLISIN_312010233_TUGAS SEBELUM UAS.docx'),
(180, 22, 47, '2022-01-06', '12:01:11', 'DIKY RAMADHANI_312010074_TUGAS SEBELUM UAS.docx'),
(181, 22, 32, '2022-01-06', '12:09:20', 'AHMAD MUAFIQ_312010152_TUGAS SEBELUM UAS.docx'),
(182, 22, 11, '2022-01-06', '12:43:17', 'MUHAMMAD FARHAN ALFARIZI_312010210_TUGAS SEBELUM UAS.docx'),
(183, 22, 11, '2022-01-06', '12:46:54', 'MUHAMMAD FARHAN ALFARIZI_312010210_TUGAS SEBELUM UAS.docx'),
(184, 22, 46, '2022-01-06', '14:50:48', 'MUHAMMAD RENDE RAMADHANI_312010277_TUGAS SEBELUM UAS.docx'),
(185, 23, 4, '2022-01-12', '14:19:47', 'FEBRO HERDYANTO_312010043_UAS PROBABILITAS.pdf'),
(186, 23, 41, '2022-01-12', '14:21:02', 'MIFTAHU RIZKIYAH_312010014_UAS PROBABILITAS.pdf'),
(187, 23, 28, '2022-01-12', '14:21:45', 'FAZA ARDAN KUSUMA_312010001_UAS PROBABILITAS.pdf'),
(188, 23, 14, '2022-01-12', '14:22:50', 'LIA AMALIAH_312010023_UAS PROBABILITAS.pdf'),
(189, 23, 34, '2022-01-12', '14:23:03', 'ANDRIANSYAH_312010011_UAS PROBABILITAS.pdf'),
(190, 23, 14, '2022-01-12', '14:23:35', 'LIA AMALIAH_312010023_UAS PROBABILITAS.pdf'),
(191, 23, 14, '2022-01-12', '14:23:54', 'LIA AMALIAH_312010023_UAS PROBABILITAS.pdf'),
(192, 23, 22, '2022-01-12', '14:28:50', 'MULIFATKHUL RACHIIM_312010180_UAS PROBABILITAS.pdf'),
(193, 23, 23, '2022-01-12', '14:40:06', 'AJI MUHLISIN_312010233_UAS PROBABILITAS.pdf'),
(194, 23, 45, '2022-01-12', '14:47:20', 'ANTINI PERMATASARI_312010095_UAS PROBABILITAS.pdf'),
(195, 23, 30, '2022-01-12', '14:53:47', 'KURNIA DIFA WIJAYA_312010024_UAS PROBABILITAS.pdf'),
(196, 23, 39, '2022-01-12', '14:54:36', 'WIRLIAN TEGAR PUNJOPO_312010234_UAS PROBABILITAS.pdf'),
(197, 23, 27, '2022-01-12', '15:27:39', 'ADE PRASETIA_312010208_UAS PROBABILITAS.pdf'),
(198, 23, 9, '2022-01-12', '15:39:09', 'M. AQIL ALFARID_312010140_UAS PROBABILITAS.pdf'),
(199, 23, 11, '2022-01-12', '15:44:17', 'MUHAMMAD FARHAN ALFARIZI_312010210_UAS PROBABILITAS.pdf'),
(200, 23, 66, '2022-01-12', '17:36:41', 'DANI SARIF PIRANTI_311810554_UAS PROBABILITAS.pdf'),
(201, 23, 15, '2022-01-12', '18:02:57', 'RUDI HARTONO_312010027_UAS PROBABILITAS.pdf'),
(202, 23, 33, '2022-01-12', '18:22:18', 'BAGUS TRI HANDONO_312010170_UAS PROBABILITAS.pdf'),
(203, 23, 42, '2022-01-12', '18:25:29', 'ASRI LIYA ASTUTI_312010104_UAS PROBABILITAS.pdf'),
(204, 23, 12, '2022-01-12', '18:28:24', 'BANGKIT AKBAR ANGGARA_312010148_UAS PROBABILITAS.pdf'),
(205, 23, 46, '2022-01-12', '18:36:40', 'MUHAMMAD RENDE RAMADHANI_312010277_UAS PROBABILITAS.pdf'),
(206, 23, 48, '2022-01-12', '18:56:36', 'DANI DARMAWAN_312010154_UAS PROBABILITAS.pdf'),
(207, 23, 36, '2022-01-12', '19:08:07', 'MOCH. NAUVAL FARIS MUZAKI_312010122_UAS PROBABILITAS.pdf'),
(208, 23, 40, '2022-01-12', '19:16:15', 'ANTONIUS SIMANJUNTAK_312010004_UAS PROBABILITAS.pdf'),
(209, 23, 7, '2022-01-12', '19:18:36', 'GUNAWAN_312010191_UAS PROBABILITAS.pdf'),
(210, 23, 12, '2022-01-12', '19:21:07', 'BANGKIT AKBAR ANGGARA_312010148_UAS PROBABILITAS.pdf'),
(211, 23, 47, '2022-01-12', '19:41:19', 'DIKY RAMADHANI_312010074_UAS PROBABILITAS.pdf'),
(212, 23, 25, '2022-01-12', '19:44:45', 'SANDI BINTARA_312010039_UAS PROBABILITAS.pdf'),
(213, 23, 67, '2022-01-12', '19:47:30', 'ILHAM AGUNG P_312010235_UAS PROBABILITAS.pdf'),
(214, 23, 32, '2022-01-12', '19:50:35', 'AHMAD MUAFIQ_312010152_UAS PROBABILITAS.pdf'),
(215, 23, 2, '2022-01-12', '19:54:05', 'ABDUL RAHMAN_312010061_UAS PROBABILITAS.pdf'),
(216, 23, 16, '2022-01-12', '19:56:47', 'AKA ERLANDA_312010207_UAS PROBABILITAS.pdf'),
(217, 23, 46, '2022-01-12', '20:16:07', 'MUHAMMAD RENDE RAMADHANI_312010277_UAS PROBABILITAS.pdf'),
(218, 24, 34, '2022-01-16', '08:00:49', 'ANDRIANSYAH_312010011_UAS MATEMATIKA DISKRIT.pdf'),
(219, 24, 33, '2022-01-16', '11:06:12', 'BAGUS TRI HANDONO_312010170_UAS MATEMATIKA DISKRIT.pdf'),
(220, 24, 42, '2022-01-16', '17:17:19', 'ASRI LIYA ASTUTI_312010104_UAS MATEMATIKA DISKRIT.pdf'),
(221, 24, 42, '2022-01-16', '17:35:21', 'ASRI LIYA ASTUTI_312010104_UAS MATEMATIKA DISKRIT.pdf'),
(222, 24, 9, '2022-01-16', '18:43:59', 'M. AQIL ALFARID_312010140_UAS MATEMATIKA DISKRIT.pdf'),
(223, 24, 12, '2022-01-16', '20:56:25', 'BANGKIT AKBAR ANGGARA_312010148_UAS MATEMATIKA DISKRIT.pdf'),
(224, 24, 16, '2022-01-16', '21:51:27', 'AKA ERLANDA_312010207_UAS MATEMATIKA DISKRIT.pdf'),
(225, 24, 7, '2022-01-16', '22:25:36', 'GUNAWAN_312010191_UAS MATEMATIKA DISKRIT.pdf'),
(226, 24, 32, '2022-01-16', '22:44:06', 'AHMAD MUAFIQ_312010152_UAS MATEMATIKA DISKRIT.pdf'),
(227, 24, 22, '2022-01-16', '22:46:59', 'MULIFATKHUL RACHIIM_312010180_UAS MATEMATIKA DISKRIT.pdf'),
(228, 24, 41, '2022-01-16', '23:02:58', 'MIFTAHU RIZKIYAH_312010014_UAS MATEMATIKA DISKRIT.pdf'),
(229, 24, 28, '2022-01-16', '23:13:51', 'FAZA ARDAN KUSUMA_312010001_UAS MATEMATIKA DISKRIT.pdf'),
(230, 24, 15, '2022-01-16', '23:31:31', 'RUDI HARTONO_312010027_UAS MATEMATIKA DISKRIT.pdf'),
(231, 24, 45, '2022-01-16', '23:45:38', 'ANTINI PERMATASARI_312010095_UAS MATEMATIKA DISKRIT.pdf'),
(232, 24, 45, '2022-01-16', '23:48:30', 'ANTINI PERMATASARI_312010095_UAS MATEMATIKA DISKRIT.pdf'),
(233, 24, 25, '2022-01-16', '23:56:39', 'SANDI BINTARA_312010039_UAS MATEMATIKA DISKRIT.pdf'),
(234, 24, 36, '2022-01-16', '00:15:34', 'MOCH. NAUVAL FARIS MUZAKI_312010122_UAS MATEMATIKA DISKRIT.pdf'),
(235, 24, 4, '2022-01-16', '00:17:09', 'FEBRO HERDYANTO_312010043_UAS MATEMATIKA DISKRIT.pdf'),
(236, 24, 36, '2022-01-16', '00:32:15', 'MOCH. NAUVAL FARIS MUZAKI_312010122_UAS MATEMATIKA DISKRIT.pdf'),
(237, 24, 47, '2022-01-16', '06:10:13', 'DIKY RAMADHANI_312010074_UAS MATEMATIKA DISKRIT.pdf'),
(238, 24, 48, '2022-01-17', '07:37:52', 'DANI DARMAWAN_312010154_UAS MATEMATIKA DISKRIT.pdf'),
(239, 24, 28, '2022-01-17', '07:59:58', 'FAZA ARDAN KUSUMA_312010001_UAS MATEMATIKA DISKRIT.pdf'),
(240, 24, 2, '2022-01-17', '08:02:54', 'ABDUL RAHMAN_312010061_UAS MATEMATIKA DISKRIT.pdf'),
(241, 24, 23, '2022-01-17', '09:31:57', 'AJI MUHLISIN_312010233_UAS MATEMATIKA DISKRIT.pdf'),
(242, 24, 38, '2022-01-17', '10:32:03', 'MOHAMAD FARIZAL ARIFIN_312010231_UAS MATEMATIKA DISKRIT.pdf'),
(243, 24, 11, '2022-01-17', '11:37:02', 'MUHAMMAD FARHAN ALFARIZI_312010210_UAS MATEMATIKA DISKRIT.pdf'),
(244, 24, 46, '2022-01-17', '11:38:00', 'MUHAMMAD RENDE RAMADHANI_312010277_UAS MATEMATIKA DISKRIT.pdf'),
(245, 24, 39, '2022-01-17', '11:42:04', 'WIRLIAN TEGAR PUNJOPO_312010234_UAS MATEMATIKA DISKRIT.pdf'),
(246, 24, 40, '2022-01-17', '11:43:53', 'ANTONIUS SIMANJUNTAK_312010004_UAS MATEMATIKA DISKRIT.pdf'),
(247, 24, 30, '2022-01-17', '11:51:44', 'KURNIA DIFA WIJAYA_312010024_UAS MATEMATIKA DISKRIT.pdf'),
(248, 24, 65, '2022-01-17', '12:30:03', 'BAROKAH RAHMATTIKA_311920813_UAS MATEMATIKA DISKRIT.pdf'),
(249, 24, 27, '2022-01-17', '13:01:09', 'ADE PRASETIA_312010208_UAS MATEMATIKA DISKRIT.pdf'),
(250, 24, 62, '2022-01-17', '13:29:57', 'TRI REZA OKTAVIAN_311710177_UAS MATEMATIKA DISKRIT.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pu`
--

CREATE TABLE `pu` (
  `id_pu` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `jml_pengajuan` varchar(20) NOT NULL,
  `tgl_balik` date NOT NULL,
  `alasan` text NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `norek` int(50) DEFAULT NULL,
  `atasnama` varchar(255) DEFAULT NULL,
  `acc_pengajuan` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'PENDING',
  `bukti_trf` varchar(200) DEFAULT NULL,
  `bukti_bayar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_jawaban`
--

CREATE TABLE `p_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_poll` int(11) NOT NULL,
  `id_opsi` int(11) NOT NULL,
  `detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_opsi`
--

CREATE TABLE `p_opsi` (
  `id_opsi` int(11) NOT NULL,
  `id_tanya` int(11) NOT NULL,
  `opsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_opsi`
--

INSERT INTO `p_opsi` (`id_opsi`, `id_tanya`, `opsi`) VALUES
(1, 1, 'BADMINTON'),
(2, 1, 'FUTSAL'),
(3, 1, 'RENANG'),
(4, 2, 'DELTAMAS SPORT CENTER'),
(5, 2, 'RAJAWALI FUTSAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_polling`
--

CREATE TABLE `p_polling` (
  `id_poll` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_polling`
--

INSERT INTO `p_polling` (`id_poll`, `judul`, `tgl_mulai`, `tgl_selesai`) VALUES
(3, 'OLAHRAGA BULAN INI', '2021-12-12', '2021-12-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_tanya`
--

CREATE TABLE `p_tanya` (
  `id_tanya` int(11) NOT NULL,
  `id_poll` int(11) NOT NULL,
  `no_tanya` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_tanya`
--

INSERT INTO `p_tanya` (`id_tanya`, `id_poll`, `no_tanya`, `pertanyaan`, `detail`) VALUES
(1, 3, 1, 'PILIH JENIS OLAHRAGA', 'OLAHRAGA FAVORIT ANDA'),
(2, 3, 2, 'LOKASI SPORT CENTER', 'PILIH YANG ANDA SUKA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL,
  `folder` varchar(255) NOT NULL,
  `max_files` varchar(20) DEFAULT NULL,
  `kata_max` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `nama_tugas`, `matkul`, `dosen`, `due_date`, `due_time`, `folder`, `max_files`, `kata_max`) VALUES
(2, 'TUGAS MASKRIT 1', 'MATEMATIKA DISKRIT', 'Ari Yuneldi, S.Pd, M.Si', '2021-10-06', '13:00:00', 'MASKRIT1', '200000', '200 KB'),
(3, 'TUGAS PERKULIAHAN 1-7', 'PROBABILITAS DAN STATISTIKA', 'Ir. U. Darmanto Soer, M.Kom.', '2021-11-16', '19:10:00', 'PROB1', '500000', '500 KB'),
(4, 'UTS MATEMATIKA DISKRIT', 'MATEMATIKA DISKRIT', 'Ari Yuneldi, S.Pd, M.Si', '2021-11-22', '10:35:00', 'UTS-MASKRIT', '500000', '500 KB'),
(14, 'TUGAS MATEMATIKA DISKRIT', 'MATEMATIKA DISKRIT', 'Ari Yuneldi, S.Pd, M.Si', '2021-12-02', '13:00:00', 'TUGAS-MD2', '300000', '300 KB'),
(20, 'TUGAS MATEMATIKA DISKRIT', 'MATEMATIKA DISKRIT', 'Ari Yuneldi, S.Pd, M.Si', '2021-12-16', '13:00:00', 'MASKRITP11', '300000', '300 KB'),
(21, 'CONTOH TUGAS RPL - WHITE AND BLACK BOX TESTING', 'REKAYASA PERANGKAT LUNAK', 'M. Makmun Effendi, S.Kom., M.Kom', '2022-01-02', '13:00:00', 'RPL-CONTOH', '900000', '900 KB'),
(22, 'TUGAS SEBELUM UAS', 'MATEMATIKA DISKRIT', 'Ari Yuneldi, S.Pd, M.Si', '2022-01-06', '13:00:00', 'TUGASSOAL', '200000', '200 KB'),
(23, 'UAS PROBABILITAS', 'PROBABILITAS DAN STATISTIKA', 'Ir. U. Darmanto Soer, M.Kom.', '2022-01-12', '19:30:00', 'UASPROB', '1000000', '1 MB'),
(24, 'UAS MATEMATIKA DISKRIT', 'MATEMATIKA DISKRIT', 'Ari Yuneldi, S.Pd, M.Si', '2022-01-17', '13:00:00', 'UAS_MASKRIT', '310000', '300 KB'),
(25, 'UAS SUSULAN', 'PROBABILITAS DAN STATISTIKA', 'Ir. U. Darmanto Soer, M.Kom.', '2022-02-02', '15:00:00', 'UAS-SUSULAN-PROBABILITAS', '900000', '900 KB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `xuser`
--

CREATE TABLE `xuser` (
  `id_user` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `xuser`
--

INSERT INTO `xuser` (`id_user`, `id_mhs`, `username`, `password`, `level`) VALUES
(1, 4, 'a', 'pxc70bc29ada2074fd25b8b7922b0a75a0', 'admin'),
(2, 4, '312010043', 'px85831c001cddbf68538eef3ac761e9ff', 'ketua'),
(3, 47, '312010074', 'px4fda5b102872c3b32d59bf6f80edf6ae', 'wakil'),
(6, 31, '312010032', 'pxf6fabccb12694b0aab6d6b25fcb545b4', 'sekretaris'),
(7, 41, '312010014', 'px85831c001cddbf68538eef3ac761e9ff', 'keuangan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `k_detail`
--
ALTER TABLE `k_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_kas` (`id_kas`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indeks untuk tabel `k_kas`
--
ALTER TABLE `k_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `k_tahun`
--
ALTER TABLE `k_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `k_upload`
--
ALTER TABLE `k_upload`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `id_detail` (`id_detail`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indeks untuk tabel `pengumpulan`
--
ALTER TABLE `pengumpulan`
  ADD PRIMARY KEY (`id_pengumpulan`),
  ADD KEY `id_tugas_2` (`id_tugas`),
  ADD KEY `id_mhs` (`id_mhs`) USING BTREE,
  ADD KEY `id_tugas` (`id_tugas`) USING BTREE;

--
-- Indeks untuk tabel `pu`
--
ALTER TABLE `pu`
  ADD PRIMARY KEY (`id_pu`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indeks untuk tabel `p_jawaban`
--
ALTER TABLE `p_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_mhs` (`id_mhs`),
  ADD KEY `id_opsi` (`id_opsi`) USING BTREE,
  ADD KEY `id_polling` (`id_poll`);

--
-- Indeks untuk tabel `p_opsi`
--
ALTER TABLE `p_opsi`
  ADD PRIMARY KEY (`id_opsi`),
  ADD KEY `id_tanya` (`id_tanya`) USING BTREE;

--
-- Indeks untuk tabel `p_polling`
--
ALTER TABLE `p_polling`
  ADD PRIMARY KEY (`id_poll`);

--
-- Indeks untuk tabel `p_tanya`
--
ALTER TABLE `p_tanya`
  ADD PRIMARY KEY (`id_tanya`),
  ADD KEY `id_poll` (`id_poll`) USING BTREE;

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indeks untuk tabel `xuser`
--
ALTER TABLE `xuser`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `k_detail`
--
ALTER TABLE `k_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT untuk tabel `k_kas`
--
ALTER TABLE `k_kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `k_tahun`
--
ALTER TABLE `k_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `k_upload`
--
ALTER TABLE `k_upload`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `pengumpulan`
--
ALTER TABLE `pengumpulan`
  MODIFY `id_pengumpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `k_detail`
--
ALTER TABLE `k_detail`
  ADD CONSTRAINT `k_detail_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `k_detail_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `k_tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `k_detail_ibfk_3` FOREIGN KEY (`id_kas`) REFERENCES `k_kas` (`id_kas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `k_upload`
--
ALTER TABLE `k_upload`
  ADD CONSTRAINT `k_upload_ibfk_1` FOREIGN KEY (`id_detail`) REFERENCES `k_detail` (`id_detail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengumpulan`
--
ALTER TABLE `pengumpulan`
  ADD CONSTRAINT `pengumpulan_ibfk_1` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengumpulan_ibfk_2` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pu`
--
ALTER TABLE `pu`
  ADD CONSTRAINT `pu_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `p_jawaban`
--
ALTER TABLE `p_jawaban`
  ADD CONSTRAINT `p_jawaban_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `p_jawaban_ibfk_2` FOREIGN KEY (`id_poll`) REFERENCES `p_polling` (`id_poll`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `p_jawaban_ibfk_3` FOREIGN KEY (`id_opsi`) REFERENCES `p_opsi` (`id_opsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `p_opsi`
--
ALTER TABLE `p_opsi`
  ADD CONSTRAINT `p_opsi_ibfk_1` FOREIGN KEY (`id_tanya`) REFERENCES `p_tanya` (`id_tanya`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `p_tanya`
--
ALTER TABLE `p_tanya`
  ADD CONSTRAINT `p_tanya_ibfk_1` FOREIGN KEY (`id_poll`) REFERENCES `p_polling` (`id_poll`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `xuser`
--
ALTER TABLE `xuser`
  ADD CONSTRAINT `xuser_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
