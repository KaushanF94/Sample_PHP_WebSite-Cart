-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 06:13 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

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
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `Product_ID` int(10) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Image_Link` varchar(100) NOT NULL,
  `Quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`Product_ID`, `Product_Name`, `Price`, `Image_Link`, `Quantity`) VALUES
(1, 'Dark Souls', 4000, 'src="Image/darksoles3.jpg"', 2),
(2, 'Counter Strike & Global Offensicve', 2000, 'src="Image/counter strike global offensive.jpg"', 4),
(3, 'Call Of Duty : Black Ops 2', 4000, 'src="Image/blackops3.jpg"', 3),
(4, 'Tom Clancy''s The Division', 4000, 'src="Image/tom clancys the division.jpg"', 5),
(5, 'Grand Theft Auto V', 4000, 'src ="Image/gta5.jpg"', 7),
(6, 'Call Of Duty: World At War', 3500, 'src = "Image/Call of Duty World at War.jpg"', 2),
(7, 'Dead Pool', 2500, 'src = "Image/deadpool1.jpg"', 5),
(8, 'Survival Evolved', 2500, 'src = "Image/Survival Evolved.jpg"', 7),
(9, 'Final Fantasy IX', 2500, 'src = "Image/Final Fantasy IX.png"', 6),
(10, 'Portal Knights', 3000, 'src = "Image/Portal Knights.png"', 8),
(11, 'Logitech Flight System.', 5000, 'src="Image/Logitech Flight System..jpg"', 2),
(12, 'Razer Hydra', 10000, 'src="Image/Razer Hydra.jpg"', 1),
(13, 'Logitech G27 Racing Wheel', 11000, 'src="Image/Logitech G27 Racing Wheel.jpg"', 4),
(14, 'Razer Nostromo', 11000, 'src="Image/Razer Nostromo.jpg"', 1),
(15, 'Cyborg M.M.O.7', 21000, 'src="Image/Cyborg M.M.O.7.jpg"', 2),
(16, 'Logitech G930 Gaming Headset', 10500, 'src="Image/Logitech G930 Gaming Headset.jpg"', 3),
(17, 'Razer Tiamat Gaming Headset', 20500, 'src="Image/Razer Tiamat Gaming Headset.jpg"', 4),
(18, 'Cisco-Linksys WRT330N Wireless Gaming Router', 15000, 'src="Image/Cisco-Linksys WRT330N Wireless Gaming Router.jpg"', 7),
(19, 'Xbox 360', 40000, 'src="Image/Xbox 360.jpg"', 1),
(20, 'Xbox One', 30000, 'src="Image/Xbox One.jpg"', 2),
(21, 'Playstation 4 ', 50000, 'src="Image/ps4.jpg" ', 3),
(22, 'Playstation 3', 35000, 'src="Image/ps3.jpg"', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`Product_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
