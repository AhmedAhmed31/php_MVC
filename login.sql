-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 06:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebit`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(64) NOT NULL,
  `hash_password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `name`, `email`, `hash_password`) VALUES
(13, 'Ahmed Gamal ', 'ahmed@ahmed.com', '$2y$10$rPy2q9vaf/Rjr69Tdm9HyOmqt5eocKFLxcf2XB8/sn.Kj3IEXi9/u'),
(14, 'Admin', 'admin@admin.con', '$2y$10$0U6oopoVQcN2vJ3Nlevcvu1kn1Ry.byeknf1KmUNvr9leQJ1kyI7q'),
(15, 'Ahmed Gamal', 'Ahmed.ahmed@ahmed.ahmed', '$2y$10$jaL5DEE1TuR0547H.riYhOoO1DQzh..Ytr0NQfQ5IiDjKOiWjEUfu'),
(16, 'WEWEWwerwer', 'WEWEW@asdasd.cij', '$2y$10$pkwaDY8v99gdI5SOku6q6eh3Qs92sGIOEtkwSm6FIEUyDbmsCJILa'),
(17, 'asdasda', 'asdasdas@sdfsdfs.dsd', '$2y$10$8RUbi3SRveBB.VxZKneY5.yqasmeAtv6hG5J7XqBcvwvvqKr5DpWS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
