-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 09:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
-- Table structure for table `packageusers`
--

CREATE TABLE `packageusers` (
  `Name` char(30) NOT NULL,
  `NIC` char(10) NOT NULL,
  `Email` char(30) NOT NULL,
  `Package` char(30) NOT NULL,
  `ExpectedCrowd` char(11) NOT NULL,
  `WeddingDate` char(20) NOT NULL,
  `Status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packageusers`
--

INSERT INTO `packageusers` (`Name`, `NIC`, `Email`, `Package`, `ExpectedCrowd`, `WeddingDate`, `Status`) VALUES
('Lahin  Attygalle', '925352433V', 'atty@gmail.com', 'Full', '300+', '10-4-2021', 'Pending'),
('Steve Wijerathna', '991222012V', 'steven@gmail.com', 'Full', '600+', '29-4-2021', 'Pending'),
('Thevin Rahubedda', '991222014V', 'thevinvr@gmail.com', 'Full', '400+', '26-12-2025', 'Completed'),
('Abhishitha De Silva', '992525624v', 'abhiya@gmail.com', 'WeddingDay', '200+', '1-1-2020', 'Pending'),
('Sewmini Gunawardhana', '992535621v', 'sewminirgunawardana@gmail.com', 'Full', '400+', '26-12-2025', 'Completed'),
('Asanka Ekanayaka', '99271728v', 'asankaek96@gmail.com', 'WeddingDay', '200+', '1-1-2020', 'Completed'),
('Buddhima Jayasingha', '992736254V', 'buddhijd3@gmail.com', 'Half', '450+', '10-10-2023', 'Pending'),
('Pasindu Sooriyabandara', '993726452V', 'soori@gmail.com', 'Full', '500+', '19-10-2022', 'Completed'),
('Navinda Jayawardhana', '99627285V', 'naviyaj@gmail.com', 'Half', '600+', '22-12-2022', 'Pending'),
('Anujitha Fernando', '99650372V', 'kamfer@gmail.com', 'Full', '500+', '5-4-2022', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packageusers`
--
ALTER TABLE `packageusers`
  ADD PRIMARY KEY (`NIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
