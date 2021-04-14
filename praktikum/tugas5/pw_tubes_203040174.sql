-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 11:04 PM
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
(1, '1.png', 'SELENA', 'Tere Liye', '2020', '368 halaman	', '9786020639512'),
(2, '2.png', 'Misteri Terakhir #1	', 'S. Mara Gd', '6 Apr 2020', '448 Halaman', '9786020637112'),
(3, '3.png', 'Nebula', 'Tere Liye', '2020', '376 halaman', '9786020639536'),
(4, '4.png', 'After the Funeral	', 'Agatha Christie', '27 Desember 2017	', '336 halaman', '9789792234343'),
(5, '5.png', 'Ganjil Genap', 'Almira Bastari', 'Februari 2020', '344 halaman', '-'),
(6, '6.png', 'Tokyo & Perayaan', 'Ruth Pricilia Angelinae	', '2020', '208 halaman', '9786020640853'),
(7, '7.png', 'Segi Tiga', 'Sapardi Djoko Damono	', 'Maret 2020	', '328 halaman	', '9786020639246'),
(8, '8.png', 'Ibuk', 'Iwan Setyawan', '2017', '289 halaman	', '9786020329987'),
(9, '9.png', 'Laut Bercerita', 'Leila S. Chudori', 'Desember 2017', '379 halaman', '-'),
(10, '10.png', 'Defending Jacob	', 'William Landay	', 'Desember 2017', '484 halaman	', '	9786020451558');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
