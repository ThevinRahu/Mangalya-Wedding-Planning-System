-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:02 PM
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
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `Names` text NOT NULL,
  `Content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`Names`, `Content`) VALUES
('Amith & Ameesha', 'Thank you so much for being there for us through the wedding planning process. Both of you are so friendly, professional, hard working & helpful. Thank you for making sure every moment of our five day wedding went so smoothly. It was so reassuring knowing you were there to make sure everything went as we had wished. No one could have done a better job! We were so lucky to have met you. We also appreciate your open-mindedness; you made every effort to learn about our culture & were very interested in our wedding customs.'),
('Ranga & Maneesha', 'We are so grateful for your expert orchestration of our wedding day. We had the privilege of working with someone who translated our vision with such style, grace and professionalism. Thank you so much for all your help, we are really very happy with how it turned out! Everything was beautiful and organized–I didn’t worry about a thing! You not only ensured that everything went well by personally looking into even the minute details, but also that we, as a family, enjoy the wedding the most, which I believe is a very important aspect. Every body has appreciated the theme & decorations. We would be more than happy to recommend your services to anyone wanting to plan a wedding.'),
('Praveen & Nadini', '.Hands down the most amazing event coordinator you will ever work with! From emails to phone calls to the day of our wedding she handled everything with such professionalism and grace. I had so many fears about the big day and after the first conversation I had with her I was put at ease! I planned until the month before our wedding then she took over and I knew without a doubt we were in good hands. Could not imagine our big day without her, because of her everything ran so smoothly and all details of the wedding were exactly what I envisioned. Highly recommend her to anyone!'),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
