-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 06:23 AM
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
-- Table structure for table `regestration`
--

CREATE TABLE `regestration` (
  `UserName` varchar(15) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regestration`
--

INSERT INTO `regestration` (`UserName`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Country`) VALUES
('ashan123', 'Ashan', 'Dinusha', 'ashandinusha@gmail.com', 'ashan123', 'Male', 'Sri Lanka'),
('Boo123', 'Boo', 'Dragneel', 'buwendra.s@gmail.com', '123', 'Male', 'Sri Lanka'),
('devin123', 'Devin', 'Alvis', 'devin@gmail.com', 'devin123', 'Male', 'Sri Lanka'),
('kaushan123', 'Kaushan', 'Fernando', 'kaushanfernando@gmail.com', '123', 'Male', 'Sri Lanka'),
('Sternboo', 'Boo', 'Stern', 'sternboo@gmail.com', '1234', 'Male', 'Sri Lanka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regestration`
--
ALTER TABLE `regestration`
  ADD PRIMARY KEY (`UserName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
