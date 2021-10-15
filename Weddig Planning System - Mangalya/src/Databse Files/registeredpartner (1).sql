-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangalya`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeredpartner`
--

CREATE TABLE `registeredpartner` (
  `Name` char(30) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `Email` char(30) NOT NULL,
  `Address` char(50) NOT NULL,
  `Cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeredpartner`
--

INSERT INTO `registeredpartner` (`Name`, `ContactNumber`, `Email`, `Address`, `Cost`) VALUES
('Charithri Rodrigo', 775628231, 'charithri@gmail.com', '239/10, Park Lane, Rajagiriya.', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeredpartner`
--
ALTER TABLE `registeredpartner`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
