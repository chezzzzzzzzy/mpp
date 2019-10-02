-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2019 at 06:15 AM
-- Server version: 8.0.17
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `singtel_esm`
--

-- --------------------------------------------------------

--
-- Table structure for table `spaces`
--

CREATE TABLE `spaces` (
  `id` int(6) UNSIGNED NOT NULL,
  `rack_size_length` int(11) DEFAULT NULL,
  `rack_size_breadth` int(11) DEFAULT NULL,
  `breaker_size` int(11) DEFAULT NULL,
  `breaker_quantity` int(11) DEFAULT NULL,
  `pdb_feeds` int(11) DEFAULT NULL,
  `location` text,
  `room` text,
  `time_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spaces`
--

INSERT INTO `spaces` (`id`, `rack_size_length`, `rack_size_breadth`, `breaker_size`, `breaker_quantity`, `pdb_feeds`, `location`, `room`, `status`) VALUES
(1, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(2, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(3, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(4, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(5, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(6, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(7, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(8, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(9, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(10, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(11, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '3', 'Submitted'),
(12, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(13, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(14, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(15, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(16, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(17, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(18, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(19, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(20, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(21, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(22, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(23, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(24, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(25, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(26, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(27, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(28, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(29, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(30, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(31, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(32, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(33, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(34, 1920, 1080, 34, 9, 7, 'Orchard Exchange (OC)', '2', 'Submitted'),
(35, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(36, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(37, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(38, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(39, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(40, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(41, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(42, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(43, 42, 231, 9, 193, 912, 'Tampines Exchange (TP)', '3', 'Submitted'),
(44, 1080, 1080, 1080, 1080, 1080, 'Tuas Exchange (TS)', '1', 'Submitted'),
(45, 1080, 1080, 1080, 1080, 1080, 'Tuas Exchange (TS)', '1', 'Submitted'),
(46, 12, 12, 123, 131, 31, 'Changi Exchange (CG)', '2', 'Submitted'),
(47, 1, 1, 1, 1, 1, 'Queenstown Exchange (QT)', '3', 'Submitted'),
(48, 1, 1, 1, 1, 1, 'Bedok Exchange (BD)', '2', 'Submitted'),
(49, 1, 1, 1, 1, 1, 'Bedok Exchange (BD)', '2', 'Submitted'),
(50, 1, 1, 1, 1, 1, 'Anywhere', '0', 'Submitted'),
(51, 1, 1, 1, 1, 1, 'Anywhere', '0', 'Submitted'),
(52, 1, 1, 1, 1, 1, 'Anywhere', 'Anywhere', 'Submitted'),
(53, 1, 1, 1, 1, 1, 'Katong Exchange (KT)', '2', 'Submitted'),
(54, 9876, 986, 79, 989, 998, 'Pasir Ris Exchange (PR)', '3', 'Submitted'),
(55, 1, 1, 212, 3, 1313, 'Changi Exchange (CG)', '1', 'Submitted'),
(56, 1, 2, 2, 2, 2, 'Bedok Exchange (BD)', '3', 'Submitted'),
(57, 1, 1111, 1, 1, 1, 'Anywhere', 'Anywhere', 'Submitted'),
(58, 1, 1, 1, 11, 1, 'Anywhere', 'Anywhere', 'Submitted'),
(59, 1, 1, 1, 11, 1, 'Bukit Panjang Exchange (BP)', '2', 'Submitted'),
(60, 1, 1, 1, 1, 1, 'North Exchange (NT)', '3', 'In Progress'),
(61, 1000, 300, 4000, 100, 500, 'Tampines Exchange (TP)', '2', 'In Progress'),
(62, 1, 1, 2, 2, 2, 'Queenstown Exchange (QT)', '2', 'Submitted'),
(63, 1, 1, 1, 1, 1, 'Geylang Exchange (GL)', '2', 'Submitted'),
(64, 100, 100, 100, 100, 100, 'Changi Exchange (CG)', '2', 'Submitted'),
(65, 100, 100, 100, 100, 100, 'Changi Exchange (CG)', '2', 'Submitted'),
(66, 1, 1, 1, 1, 1, 'Hougang Exchange (HG)', '3', 'Assigned'),
(67, 700, 700, 50, 4, 2, 'Changi Exchange (CG)', '2', 'Submitted'),
(68, 100, 240, 24, 1, 60, 'Hougang Exchange (HG)', '2', 'Submitted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
