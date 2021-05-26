-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 01:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040174`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Terbit` varchar(50) NOT NULL,
  `Dimensi` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `Gambar`, `Judul`, `Pengarang`, `Terbit`, `Dimensi`, `ISBN`) VALUES
(1, '1.jpg', 'Boruto', 'Hayao Miyazaki', '3 April 2003', '798 halaman	', '08213041111043'),
(2, '2.jpg', 'Gintama', 'Makoto Shinkai', '6 April 2003', '567Halaman', '978602063711232'),
(4, '4.jpg', 'Naruto', 'Isao Takahata', '27 Desember 2017	', '900 halaman', '978979223434334'),
(5, '5.jpg', 'One  Piece', 'Mamoru Hosoda', '6 Februari 2006', '1500 halaman', '897865498768911'),
(6, '6.jpg', 'Faiiry Tail', 'Hiromasa', '7 April 2009', '208 halaman', '978602064085310'),
(7, '7.jpg', 'Black Clover', 'Yonebayashi', '3 Maret 2008', '328 halaman	', '978602063924689'),
(8, '8.jpg', 'Dragon Ball Z', 'Kabuto', '7 Mei 2017', '289 halaman	', '978602032998767'),
(9, '9.jpg', 'Bleach', 'Kawaki', '9 Desember 2017', '379 halaman', '897654567899054'),
(10, '10.jpg', 'Hunter X Hunter	', 'William Landay	', '12 Desember 2017', '600 halaman	', '9786020451234'),
(11, '11.jpg', 'Samurai X', 'Iwabe', '7 Juni 2004', '900 halaman', '9786020639678');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'linggih', '$2y$10$vL/UwzOP4vNE0q0amWBl.OlcC7Yn8LJ8OMQ31pya0h4'),
(4, 'kusuma', '$2y$10$.4FFRbR62BJpgKhSRsTNKu.eLj4lEdbaBW5HOlVpJ2I'),
(5, 'galih', '$2y$10$hCP4hoKBvaBs5bV8mga0NepV12sXLL9g3GEs9PihPILik5IGhgN.C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
