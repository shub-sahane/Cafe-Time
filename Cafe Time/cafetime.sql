-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2024 at 01:47 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafetime`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('cafetime', 'Cafe@123');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails1`
--

DROP TABLE IF EXISTS `orderdetails1`;
CREATE TABLE IF NOT EXISTS `orderdetails1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `addr` varchar(255) NOT NULL,
  `mobileno` int NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderdetails1`
--

INSERT INTO `orderdetails1` (`id`, `email`, `menu`, `quantity`, `addr`, `mobileno`, `msg`) VALUES
(1, 'om33@gmail.com', 'Coffee (Rs.50)', 2, 'Sangamner', 123456789, 'thanks'),
(2, 'om33@gmail.com', 'French Fries (Rs.325)', 2, 'Sangamner', 123456789, 'thanks'),
(3, 'om33@gmail.com', 'French Fries (Rs.325)', 5, 'Sangamner', 123456789, 'thanks'),
(4, 'abc33@gmail.com', 'Coffee (Rs.50)', 5, 'Sangamner', 123456789, 'thanks'),
(5, 'abc33@gmail.com', 'Pasta (Rs.325)', 2, 'Sangamner', 123456789, 'hiii'),
(6, 'abc33@gmail.com', 'Pasta (Rs.325)', 2, 'Sangamner', 123456789, 'order is wating'),
(7, 'abc33@gmail.com', 'Sandwich (Rs.175)', 5, 'Sangamner', 123456789, 'thanks'),
(8, 'adi12@gmail.com', 'Sandwich (Rs.175)', 2, 'Sangamner', 123456789, 'thanks'),
(9, 'rushi12@gmail.com', 'Burgger (Rs.375)', 5, 'Sangamner', 1234567890, 'order is wating'),
(10, 'yash@gmail.com', 'Pasta (Rs.325)', 1, 'Sangamner', 123456789, 'thanks'),
(11, '', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

DROP TABLE IF EXISTS `userinfodata`;
CREATE TABLE IF NOT EXISTS `userinfodata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(1, 'Tejas', 'tejas17@gmail.com', '01234567890', 'cafe'),
(2, 'abcc', 'adi12@gmail.com', '', 'thanks'),
(3, 'abc', 'irshanmomin6286@gmail.com', '', 'thanks'),
(4, 'abc', 'irshanmomin6286@gmail.com', '07304794184', 'thanks'),
(5, 'aditya', 'om33@gmail.com', '123456789', 'thanks');

-- --------------------------------------------------------

--
-- Table structure for table `usersignupdata`
--

DROP TABLE IF EXISTS `usersignupdata`;
CREATE TABLE IF NOT EXISTS `usersignupdata` (
  `id [int]` int NOT NULL AUTO_INCREMENT,
  `users` varchar(255) NOT NULL,
  `emails` varchar(255) NOT NULL,
  `psws` varchar(255) NOT NULL,
  PRIMARY KEY (`id [int]`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usersignupdata`
--

INSERT INTO `usersignupdata` (`id [int]`, `users`, `emails`, `psws`) VALUES
(1, 'Tejas', 'Tejas12@gmail.com', 'Tejas@123'),
(2, 'Tejas', 'Tejas12@gmail.com', 'Tejas@123'),
(3, 'Tejas', 'Tejas12@gmail.com', 'Tejas@123'),
(4, 'Tejas', 'Tejas12@gmail.com', 'Tejas@123'),
(5, 'Tejas', 'Tejas12@gmail.com', 'bca123'),
(6, 'aditya', 'adi12@gmail.com', '12345678'),
(7, 'yash', 'yash@gmail.com', '111'),
(8, 'abc', 'adi12@gmail.com', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
