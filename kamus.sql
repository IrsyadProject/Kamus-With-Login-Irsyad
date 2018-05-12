-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 06:04 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamus`
--

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE `translate` (
  `id` int(11) NOT NULL,
  `indonesia` varchar(225) CHARACTER SET latin1 NOT NULL,
  `inggris` varchar(225) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `translate`
--

INSERT INTO `translate` (`id`, `indonesia`, `inggris`) VALUES
(0, '', ''),
(1, 'makan', 'eat'),
(2, 'minum', 'drink'),
(3, 'belanja', 'shopping'),
(4, 'senang', 'happy'),
(5, 'marah', 'angry'),
(6, 'semangat', 'spirit'),
(7, 'pekerjaan', 'work'),
(8, 'meja', 'table'),
(9, 'pelajar', 'students'),
(10, 'guru', 'teacher'),
(11, 'baik', 'good'),
(12, 'buruk', 'bad'),
(13, 'benar', 'true'),
(14, 'salah', 'false'),
(15, 'ganteng', 'handsome'),
(16, 'cantik', 'beautiful');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `translate`
--
ALTER TABLE `translate`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
