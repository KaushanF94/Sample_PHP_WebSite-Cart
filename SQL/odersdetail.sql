-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2016 at 01:00 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `odersdetail`
--

CREATE TABLE IF NOT EXISTS `odersdetail` (
  `od_id` int(100) NOT NULL,
  `Product_ID` int(20) NOT NULL,
  `Orders_ID` int(30) NOT NULL,
  `Price` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odersdetail`
--

INSERT INTO `odersdetail` (`od_id`, `Product_ID`, `Orders_ID`, `Price`, `Quantity`) VALUES
(4, 1, 2, 4000, 2),
(5, 1, 9, 4000, 2),
(6, 1, 10, 4000, 2),
(7, 1, 11, 4000, 2),
(8, 5, 12, 4000, 1),
(9, 10, 12, 3000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `odersdetail`
--
ALTER TABLE `odersdetail`
  ADD PRIMARY KEY (`od_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `odersdetail`
--
ALTER TABLE `odersdetail`
  MODIFY `od_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
