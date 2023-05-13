-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2020 at 01:55 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kona`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

DROP TABLE IF EXISTS `coffee`;
CREATE TABLE IF NOT EXISTS `coffee` (
  `coffeeid` int(2) NOT NULL AUTO_INCREMENT,
  `coffeename` varchar(20) NOT NULL,
  `coffeeprice` int(10) NOT NULL,
  `coffeeroast` varchar(20) NOT NULL,
  PRIMARY KEY (`coffeeid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`coffeeid`, `coffeename`, `coffeeprice`, `coffeeroast`) VALUES
(1, 'Hawaiian Kona', 10, 'Medium'),
(2, 'Columbian', 15, 'Dark'),
(3, 'Blue Mountain', 12, 'Medium'),
(4, 'Tanzanian Peaberry', 11, 'Light'),
(5, 'Ethiopian', 8, 'Light'),
(6, 'Peruvian', 11, 'Medium'),
(7, 'Nescafe', 10, 'Light');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Nikhil', '$2y$10$geEmJgVa0JHfTfPAB7WrpOeFl9D8VwzgzuSyoE7SoE4hOe4seNXaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
