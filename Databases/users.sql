-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 06:24 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign029`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isadmin` int(11) DEFAULT '0',
  `dayofbirth` int(11) DEFAULT NULL,
  `monthofbirth` int(11) DEFAULT NULL,
  `yearofbirth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `isadmin`, `dayofbirth`, `monthofbirth`, `yearofbirth`) VALUES
(1, 'admin', 'admin123', 1, 1, 1, 1970),
(2, 'derek', 'derek123', 0, 31, 12, 1939),
(3, 'nige', 'nige123', 0, 16, 8, 1958),
(4, 'jo', 'jo123', 0, 1, 2, 1964),
(5, 'tim', 'tim123', 0, 4, 7, 1968),
(6, 'kate', 'kate123', 0, 8, 4, 1970),
(7, 'lisa', 'lisa123', 0, 1, 5, 1976),
(8, 'charles', 'charles123', 0, 29, 7, 1981),
(9, 'jess', 'jess123', 0, 13, 7, 1987),
(10, 'liam', 'liam123', 0, 1, 7, 2000),
(11, 'zoe', 'zoe123', 0, 1, 7, 2003),
(12, 'ben', 'ben123', 0, 1, 1, 2010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
