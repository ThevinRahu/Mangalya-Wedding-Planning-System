-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 06:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
-- Table structure for table `partnerdetails`
--

CREATE TABLE `partnerdetails` (
  `Name` char(50) NOT NULL,
  `Gender` char(20) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `Email` int(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `NIC` char(11) NOT NULL,
  `PartneringCategory` char(50) NOT NULL,
  `MoreDetails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partnerdetails`
--

INSERT INTO `partnerdetails` (`Name`, `Gender`, `ContactNumber`, `Email`, `Address`, `NIC`, `PartneringCategory`, `MoreDetails`) VALUES
('Anuji Ferna', 'male', 1234568907, 0, '  nowodo   Kandy', '123456', 'day', '  weefftg'),
('Anujitha Fernando', 'male', 2147483647, 0, '  No.33B,Bomaluve Road,   Kandy', '28310339', 'day', '  This is life '),
('Senara Mallika', 'female', 1235465634, 0, '  deafafad   rgsdrgsrdgrsedg', '563653663', 'half', '  efesafesf'),
('Senara Mallika', 'female', 1235465634, 0, '  deafafad   rgsdrgsrdgrsedg', '563653663', 'half', '  efesafesf'),
('DAhatjyr fsdfsdfsf', 'male', 2147483647, 0, '  efwfwf   3423424', '19992831', 'half', '  fgfedg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
