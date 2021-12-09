-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 03:14 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondopinion`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) UNSIGNED NOT NULL,
  `senderEmail` varchar(256) DEFAULT NULL,
  `receiverEmail` varchar(256) DEFAULT NULL,
  `message` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `senderEmail`, `receiverEmail`, `message`) VALUES
(2, 'katic.s.nikola@gmail.com', 'katic.ilija.katic@gmail.com', 'radiiiiii :D '),
(3, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'druga poruka \":D '),
(4, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'treca poruka :D :D :D :D'),
(5, 'katic.s.nikola@gmail.com', 'katic.ilija.katic@gmail.com', 'eeeeeeee'),
(6, 'katic.s.nikola@gmail.com', 'katic.s.nikola@gmail.com', 'eeeeeee'),
(7, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'proba'),
(8, 'katic.s.nikola@gmail.com', 'katic.ilija.katic@gmail.com', 'hahaha'),
(9, 'katic.s.nikola@gmail.com', 'katic.ilija.katic@gmail.com', 'dadadad'),
(10, 'yokibtc@gmail.com', 'katic.ilija.katic@gmail.com', 'eeeeeeeeeeeeeeeeeeee'),
(11, 'katic.ilija.katic@gmail.com', 'yokibtc@gmail.com', 'probasdasda'),
(12, ' yokibtc@gmail.com', 'katic.ilija.kati@gmail.com', 'aasdasdasd'),
(13, 'yokibtc@gmail.com', 'katic.s.nikola@gmail.com', 'eeeeeeeeeeeeeeeeeeee'),
(14, 'yokibtc@gmail.com', 'katic.ilija.katic@gmail.com', 'eeeeeeeeeeeeeeeeeeee'),
(15, 'katic.s.nikola@gmail.com', 'yokibtc@gmail.com', 'dasdasdasd'),
(16, 'katic.s.nikola@gmail.com', 'yokibtc@gmail.com', 'eeeeeeeeee'),
(17, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'asdasdasd'),
(18, 'katic.s.nikola@gmail.com', 'katic.ilija.katic@gmail.com', 'asdasdasda'),
(19, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'najnovija poruka'),
(20, 'katic.s.nikola@gmail.com', 'katic.ilija.katic@gmail.com', 'asdasdasd'),
(21, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'lukakakaa '),
(23, 'katic.s.nikola@gmail.com', 'katic.ilija.katic@gmail.com', 'Pecaaaa'),
(24, 'katic.ilija.katic@gmail.com', 'yokibtc@gmail.com', 'asdasdasdasdasdas'),
(25, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'nesto nesto nesto'),
(26, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'kdksdskdksdksdkskdskd'),
(27, 'katic.ilija.katic@gmail.com', 'katic.s.nikola@gmail.com', 'aaaaaaaaaaaaaaaaaaa'),
(30, 'yokibtc@gmail.com', 'ilijaxx1x@gmail.com', 'nesto nest sadasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
