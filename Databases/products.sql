-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 06:23 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `stocklevel` int(11) DEFAULT '100',
  `agelimit` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `manufacturer`, `description`, `price`, `stocklevel`, `agelimit`) VALUES
(1, 'Baked Beans', 'F.J. Fritz Co.', 'the leading baked beans', 0.79, 22, 0),
(2, 'Baked Beans', 'Smith Emporium', 'the cheaper baked beans', 0.59, 40, 0),
(3, 'Monty Pythons The Life of Brian', 'Monty Python', 'classic film', 9.99, 5, 15),
(4, 'Blackdown Ale', 'Blackdown Brewery', 'The leading ale of West Sussex', 1.99, 4, 18),
(5, 'Cornflakes', 'Cockadoodle Cereal Company', 'The worlds leading cornflakes, straight from Cornbelt, Illinois.', 2.29, 8, 0),
(6, 'Cornflakes', 'Smith Emporium', 'the cheaper cornflakes', 1.69, 8, 0),
(7, 'Toothpaste', 'Collive-Palmergate Ltd.', 'standard toothpaste', 1, 80, 0),
(8, 'Pizza', 'Montebello Pizza Co.', 'stuffed crust pizza loaded with flavour', 2.99, 18, 0),
(9, 'Asteroid Bar', 'Asteroid Confectionery Corp.', 'best in the solar system', 0.59, 9, 0),
(10, 'Titan Bar', 'Asteroid Confectionery Corp.', 'even better!', 0.69, 19, 0),
(11, 'Jupiter Juice', 'Asteroid Confectionery Corp.', 'Galactic!', 0.88, 9, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
