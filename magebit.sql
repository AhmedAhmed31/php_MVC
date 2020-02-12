-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 03:26 PM
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
(24, 'Ahmed Gamal Mahmoud', 'ahmed.ahmed.a@ieee.com', '$2y$10$uxW/ewGD9vlBrlayRAzkbOr5hwVDKWGfNmjnhbuuHUXJNIiC5jxIG'),
(25, 'sssasdasdas', 'sss@ccc.org', '$2y$10$p5GcSMKy3sFY1yN0yIuJ8uhN0yb1EgtT1A4ZmMpWoyvx4GFmZYWum'),
(26, 'iiiiiiiiiiiii', 'iiiiii@iiiiiii.iii', '$2y$10$lR4Cb0qO73MrSNMzWfI.su8CgM4sF6TJsljefqOxjON26FMl3DvQ6'),
(27, 'ahmed', 'ahmed@ahmed.ahmed', '$2y$10$mddsPPwTwe1VWjOjMd5jFuEXKRar2HHGV8.Zm82C.ZaTcx6HbZ.HO');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `bio` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `bio`, `user_id`, `age`) VALUES
(28, 'dfgdfhdfhfghdfghf', 24, 33),
(29, 'asdfghjkjhgfds', 25, 222),
(30, 'Electronics Engineer ', 27, 25);

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
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
