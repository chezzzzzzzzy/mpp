-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2019 at 04:03 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

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
-- Table structure for table `cableTrayRequests`
--

CREATE TABLE `cableTrayRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) NOT NULL,
  `requestorDepartment` varchar(255) NOT NULL,
  `requestorReason` varchar(255) NOT NULL,
  `rackLocation` varchar(255) NOT NULL,
  `fdfRackLocation` varchar(255) NOT NULL,
  `endDate` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cableTrayRequests`
--

INSERT INTO `cableTrayRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `rackLocation`, `fdfRackLocation`, `endDate`, `room`, `exchange`, `requestStatus`, `requestTimestamp`) VALUES
('CT20191011001', 'x', 'x', 'x', 'x', 'AA45', 'AB12', '10/25/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-11 01:58:22'),
('CT20191011002', 'x', 'x', 'x', 'x', 'AA45', 'AB12', '10/25/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-11 01:59:55'),
('CT20191011003', 'x', 'x', 'x', 'x', 'AA45', 'AB12', '10/25/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-11 01:59:55'),
('CT20191011004', 'x', 'x', 'x', 'x', 'AA45', 'AB12', '10/25/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-11 01:59:56'),
('CT20191011005', 'x', 'x', 'x', 'x', 'AA45', 'AB12', '10/25/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-11 01:59:56'),
('CT20191011006', 'x', 'x', 'x', 'x', 'AA45', 'AB12', '10/25/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-11 01:59:57'),
('CT20191011007', 'x', 'x', 'x', 'x', 'AA45', 'AB12', '10/25/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-11 01:59:57'),
('CT20191012008', 'Chester', 'Yee', 'chester.yee@singtel.com', 'Beta testing phase', 'AZ16', 'AZ20', '10/18/2019', 1, 'Telok Blangah Exchange (TB)', 'Submitted', '2019-10-12 14:24:41'),
('CT20191012009', '', '', '', '', 'dad', 'dadaw', '10/16/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-12 14:30:20'),
('CT20191012010', '', '', '', '', 'dad', 'dadaw', '10/16/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-12 14:30:28'),
('CT20191012011', '', '', '', '', 'dad', 'dadaw', '10/16/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-12 14:30:41'),
('CT20191012012', '', '', '', '', 'dad', 'dadaw', '10/16/2019', 1, 'Geylang Exchange (GL)', 'Submitted', '2019-10-12 14:31:34'),
('CT20191012013', '', '', '', '', 'x', 'x', '10/23/2019', 1, 'Changi Exchange (CG)', 'Submitted', '2019-10-12 14:38:54'),
('CT20191013014', '', '', '', '', '1', '1', '10/29/2019', 1, 'Hougang Exchange (HG)', 'Submitted', '2019-10-13 01:55:00'),
('CT20191013015', '', '', '', '', 'AA45', 'jmhnmj', '10/20/2019', 1, 'Changi Exchange (CG)', 'Submitted', '2019-10-13 02:02:10'),
('CT20191015016', 'XD', 'XD', 'XD', 'XD', 'AZ01', 'AB12', '10/24/2019', 1, 'Jurong East Exchange (JE)', 'Submitted', '2019-10-15 14:36:19'),
('CT20191016017', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:03:15'),
('CT20191016018', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:05:00'),
('CT20191016019', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:05:01'),
('CT20191016020', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:06:54'),
('CT20191016021', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:07:06'),
('CT20191016022', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:08:35'),
('CT20191016023', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:08:35'),
('CT20191016024', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:08:38'),
('CT20191016025', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:08:38'),
('CT20191016026', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:12:38'),
('CT20191016027', 'CY', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AA45', 'AB12', '10/31/2019', 2, 'Tuas Exchange (TS)', 'Submitted', '2019-10-16 13:12:39'),
('CT20191016028', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:12:56'),
('CT20191016029', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:15:09'),
('CT20191016030', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:15:17'),
('CT20191016031', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:16:44'),
('CT20191016032', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:17:05'),
('CT20191016033', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:18:18'),
('CT20191016034', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:18:21'),
('CT20191016035', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:20:57'),
('CT20191016036', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:21:02'),
('CT20191016037', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:21:05'),
('CT20191016038', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:21:11'),
('CT20191016039', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:21:17'),
('CT20191016040', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:21:32'),
('CT20191016041', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:22:08'),
('CT20191016042', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:22:36'),
('CT20191016043', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:22:38'),
('CT20191016044', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:23:01'),
('CT20191016045', 'x', 'x', 'x', 'x', 'fhgj', 'jmhnmj', '10/23/2019', 1, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:23:03'),
('CT20191018046', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'AA45', 'AB12', '10/25/2019', 2, 'Bedok Exchange (BD)', 'Submitted', '2019-10-18 03:45:22'),
('CT20191018047', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'AA45', 'AB12', '10/25/2019', 2, 'Bedok Exchange (BD)', 'Submitted', '2019-10-18 03:47:44'),
('CT20191018048', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'AA45', 'AB12', '10/25/2019', 2, 'Bedok Exchange (BD)', 'Submitted', '2019-10-18 03:48:07'),
('CT20191018049', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'AA45', 'AB12', '10/25/2019', 2, 'Bedok Exchange (BD)', 'Submitted', '2019-10-18 03:48:18');

--
-- Triggers `cableTrayRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_cableTrayRequests_insert` BEFORE INSERT ON `cableTrayRequests` FOR EACH ROW BEGIN
  INSERT INTO cableTrayRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('CT',  CONCAT( YEAR(CURDATE()), MONTH(CURDATE()), DAY(CURDATE()) ), LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cableTrayRequests_suffix`
--

CREATE TABLE `cableTrayRequests_suffix` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cableTrayRequests_suffix`
--

INSERT INTO `cableTrayRequests_suffix` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49);

-- --------------------------------------------------------

--
-- Table structure for table `fdfRequests`
--

CREATE TABLE `fdfRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) NOT NULL,
  `requestorDepartment` varchar(255) NOT NULL,
  `requestorReason` varchar(255) NOT NULL,
  `numberOfPorts` int(11) NOT NULL,
  `numberOfCableTies` int(11) NOT NULL,
  `endDate` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fdfRequests`
--

INSERT INTO `fdfRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `numberOfPorts`, `numberOfCableTies`, `endDate`, `room`, `exchange`, `requestStatus`, `requestTimestamp`) VALUES
('FDF20191011001', 'x', 'x', 'x', 'x', 2, 2, '10/11/2019', 2, 'Hougang Exchange (HG)', 'Submitted', '2019-10-11 02:07:50'),
('FDF20191012002', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing phase', 2, 2, '08/19/2020', 2, 'Tampines Exchange (TP)', 'Submitted', '2019-10-12 04:52:38'),
('FDF20191013003', '', '', '', '', 1, 2, '10/22/2019', 2, 'Telok Blangah Exchange (TB)', 'Submitted', '2019-10-13 01:57:18'),
('FDF20191013004', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing phase', 2, 2, '12/11/2019', 2, 'Changi Exchange (CG)', 'Submitted', '2019-10-13 02:03:49'),
('FDF20191014005', '', '', '', '', 1, 2, '', 2, 'No Preference', 'Submitted', '2019-10-14 03:58:34'),
('FDF20191014006', '', '', '', '', 1, 2, '', 2, 'No Preference', 'Submitted', '2019-10-14 04:01:38'),
('FDF20191014007', '', '', '', '', 1, 1, '', 2, 'No Preference', 'Submitted', '2019-10-14 04:01:58'),
('FDF20191014008', '', '', '', '', 1, 1, '', 2, 'No Preference', 'Submitted', '2019-10-14 04:02:07'),
('FDF20191014009', '', '', '', '', 1, 1, '', 2, 'No Preference', 'Submitted', '2019-10-14 04:02:38'),
('FDF20191014010', '', '', '', '', 1, 1, '10/14/2019', 2, 'No Preference', 'Submitted', '2019-10-14 04:03:35'),
('FDF20191014011', '', '', '', '', 1, 1, '10/14/2019', 2, 'No Preference', 'Submitted', '2019-10-14 04:03:56'),
('FDF20191014012', '', '', '', '', 1, 1, '10/16/2019', 2, 'No Preference', 'Submitted', '2019-10-14 04:05:17'),
('FDF20191014013', '', '', '', '', 1, 1, '10/16/2019', 2, 'No Preference', 'Submitted', '2019-10-14 04:06:33'),
('FDF20191014014', '', '', '', '', 1, 1, '10/23/2019', 2, 'No Preference', 'Submitted', '2019-10-14 04:06:43'),
('FDF20191014015', '', '', '', '', 1, 1, '10/16/2019', 2, 'No Preference', 'Submitted', '2019-10-14 04:07:03'),
('FDF20191016016', 'x', 'x', 'x', 'x', 23, 1, '10/31/2019', 2, 'Jurong East Exchange (JE)', 'Submitted', '2019-10-16 13:24:03'),
('FDF20191016017', 'x', 'x', 'x', 'x', 23, 1, '10/31/2019', 2, 'Jurong East Exchange (JE)', 'Submitted', '2019-10-16 13:24:16'),
('FDF20191016018', 'x', 'x', 'x', 'x', 23, 1, '10/31/2019', 2, 'Jurong East Exchange (JE)', 'Submitted', '2019-10-16 13:24:17'),
('FDF20191016019', 'x', 'x', 'x', 'x', 2, 2, '10/24/2019', 2, 'Ayer Rajah Exchange (AR)', 'Submitted', '2019-10-16 13:25:48');

--
-- Triggers `fdfRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_fdfRequests_insert` BEFORE INSERT ON `fdfRequests` FOR EACH ROW BEGIN
  INSERT INTO fdfRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('FDF',  CONCAT( YEAR(CURDATE()), MONTH(CURDATE()), DAY(CURDATE()) ), LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `fdfRequests_suffix`
--

CREATE TABLE `fdfRequests_suffix` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fdfRequests_suffix`
--

INSERT INTO `fdfRequests_suffix` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19);

-- --------------------------------------------------------

--
-- Table structure for table `generalRequests`
--

CREATE TABLE `generalRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) NOT NULL,
  `requestorDepartment` varchar(255) NOT NULL,
  `requestorReason` varchar(255) NOT NULL,
  `query` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `generalRequests`
--

INSERT INTO `generalRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `query`) VALUES
('GN20191014001', '', '', '', '', 'beta testing phase'),
('GN20191014002', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing phase', 'Beta testing phase'),
('GN20191015003', '', '', '', '', 'xx'),
('GN20191016004', 'x', 'x', 'x', 'x', 'x'),
('GN20191017005', 'x', 'x', 'x', 'x', 'dadada'),
('GN20191017006', 'x', 'x', 'xx', 'x', 'x');

--
-- Triggers `generalRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_generalRequests_insert` BEFORE INSERT ON `generalRequests` FOR EACH ROW BEGIN
  INSERT INTO generalRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('GN',  CONCAT( YEAR(CURDATE()), MONTH(CURDATE()), DAY(CURDATE()) ), LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `generalRequests_suffix`
--

CREATE TABLE `generalRequests_suffix` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `generalRequests_suffix`
--

INSERT INTO `generalRequests_suffix` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `powerRequests`
--

CREATE TABLE `powerRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) NOT NULL,
  `requestorDepartment` varchar(255) NOT NULL,
  `requestorReason` varchar(255) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `rackLocation1` varchar(20) DEFAULT NULL,
  `breakerSize1` varchar(20) DEFAULT NULL,
  `breakerQuantity1` varchar(20) DEFAULT NULL,
  `rackLocation2` varchar(20) DEFAULT NULL,
  `breakerSize2` varchar(20) DEFAULT NULL,
  `breakerQuantity2` varchar(20) DEFAULT NULL,
  `rackLocation3` varchar(20) DEFAULT NULL,
  `breakerSize3` varchar(20) DEFAULT NULL,
  `breakerQuantity3` varchar(20) DEFAULT NULL,
  `rackLocation4` varchar(20) DEFAULT NULL,
  `breakerSize4` varchar(20) DEFAULT NULL,
  `breakerQuantity4` varchar(20) DEFAULT NULL,
  `rackLocation5` varchar(20) DEFAULT NULL,
  `breakerSize5` varchar(20) DEFAULT NULL,
  `breakerQuantity5` varchar(20) DEFAULT NULL,
  `powerType` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `powerRequests`
--

INSERT INTO `powerRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `exchange`, `room`, `rackLocation1`, `breakerSize1`, `breakerQuantity1`, `rackLocation2`, `breakerSize2`, `breakerQuantity2`, `rackLocation3`, `breakerSize3`, `breakerQuantity3`, `rackLocation4`, `breakerSize4`, `breakerQuantity4`, `rackLocation5`, `breakerSize5`, `breakerQuantity5`, `powerType`, `requestStatus`, `requestTimestamp`) VALUES
('PW20191014017', 'Ismail', 'ismail@iptransportengg.com', 'IP Transport Engineering', 'Beta testing', 'Bedok Exchange (BD)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Submitted', '2019-10-14 01:49:35'),
('PW20191014018', 'Ismail', 'ismail@iptransportengg.com', 'IP Transport Engineering', 'Beta testing', 'Bedok Exchange (BD)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Submitted', '2019-10-14 01:49:41'),
('PW20191014019', 'Leong Huat', 'leonghuat@iptransportengg.com', 'IP Transport Engineering', 'Beta testing', 'Changi Exchange (CG)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Submitted', '2019-10-14 06:14:43'),
('PW20191014020', 'Leong Huat', 'leonghuat@iptransportengg.com', 'IP Transport Engineering', 'Beta testing', 'Changi Exchange (CG)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Submitted', '2019-10-14 06:16:04'),
('PW20191014022', 'Arie', 'arie@singtel.com', 'ATE', 'Beta testing', 'Changi Exchange (CG)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Submitted', '2019-10-14 06:17:53'),
('PW20191014023', 'Arie', 'arie@singtel.com', 'ATE', 'Beta testing', 'Changi Exchange (CG)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Submitted', '2019-10-14 06:17:53'),
('PW20191014024', 'Soo Fang', 'soofang@singtel.com', 'ATE', 'Beta testing', 'Jurong West Exchange (JW)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Submitted', '2019-10-14 06:27:07'),
('PW20191014025', 'Soo Fang', 'soofang@singtel.com', 'ATE', 'Beta testing', 'Jurong West Exchange (JW)', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'DC', 'Submitted', '2019-10-14 06:55:43'),
('PW20191017028', 'x', 'xx', 'x', 'x', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-17 03:26:45'),
('PW20191017029', 'x', 'xx', 'x', 'x', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-17 03:26:49'),
('PW20191017030', 'x', 'xx', 'x', 'x', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-17 03:35:38'),
('PW20191017031', 'x', 'x', 'x', 'x', '', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-17 03:36:27'),
('PW20191017032', 'x', 'x', 'x', 'x', '', '', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'DC', 'Submitted', '2019-10-17 03:41:17'),
('PW20191017033', '', '', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-17 07:47:45'),
('PW20191017034', '', '', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-17 07:58:28'),
('PW20191018035', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-18 03:13:43'),
('PW20191018036', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-18 03:13:46'),
('PW20191019037', 'x', 'x', 'x', 'x', 'JW', 'JW3A Level 3 PCM 2', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-19 08:56:50'),
('PW20191019038', 'x', 'x', 'x', 'x', 'JW', 'JW3A Level 3 PCM 2', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'DC', 'Submitted', '2019-10-19 08:56:52');

--
-- Triggers `powerRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_powerRequests_insert` BEFORE INSERT ON `powerRequests` FOR EACH ROW BEGIN
  INSERT INTO powerRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('PW',  CONCAT( YEAR(CURDATE()), MONTH(CURDATE()), DAY(CURDATE()) ), LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `powerRequests_suffix`
--

CREATE TABLE `powerRequests_suffix` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `powerRequests_suffix`
--

INSERT INTO `powerRequests_suffix` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38);

-- --------------------------------------------------------

--
-- Table structure for table `spaceRackRequests`
--

CREATE TABLE `spaceRackRequests` (
  `rackId` int(11) NOT NULL,
  `rackSizeLength` varchar(20) DEFAULT NULL,
  `rackSizeBreadth` varchar(20) DEFAULT NULL,
  `breakerSize` varchar(20) DEFAULT NULL,
  `breakerQuantity` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spaceRequests`
--

CREATE TABLE `spaceRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorDepartment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorReason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `powerType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `startDate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `endDate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `exchange` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeLength_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerSize_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity_1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeLength_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerSize_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity_2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeLength_3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth_3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerSize_3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity_3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeLength_4` varchar(255) DEFAULT NULL,
  `rackSizeBreadth_4` varchar(255) DEFAULT NULL,
  `breakerSize_4` varchar(255) DEFAULT NULL,
  `breakerQuantity_4` varchar(255) DEFAULT NULL,
  `rackSizeLength_5` varchar(255) DEFAULT NULL,
  `rackSizeBreadth_5` varchar(255) DEFAULT NULL,
  `breakerSize_5` varchar(255) DEFAULT NULL,
  `breakerQuantity_5` varchar(255) DEFAULT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `requestStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spaceRequests`
--

INSERT INTO `spaceRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `powerType`, `startDate`, `endDate`, `room`, `exchange`, `rackSizeLength_1`, `rackSizeBreadth_1`, `breakerSize_1`, `breakerQuantity_1`, `rackSizeLength_2`, `rackSizeBreadth_2`, `breakerSize_2`, `breakerQuantity_2`, `rackSizeLength_3`, `rackSizeBreadth_3`, `breakerSize_3`, `breakerQuantity_3`, `rackSizeLength_4`, `rackSizeBreadth_4`, `breakerSize_4`, `breakerQuantity_4`, `rackSizeLength_5`, `rackSizeBreadth_5`, `breakerSize_5`, `breakerQuantity_5`, `requestTimestamp`, `requestStatus`) VALUES
('SP20191015018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '1', '1', '1', '1', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '1', '1', '11', '1', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '111', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '7', '7', '7', '7', '7', '7', '7', '7', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2', '2', '2', '2', '2', '2', '2', '100', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2', '2', '2', '2', '2', '2', '2', '100', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015026', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '100', '100', '100', '100', '100', '100', '100', '100', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '100', '100', '100', '100', '100', '100', '100', '100', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '300', '300', '60A', '2', '400', '400', '40A', '2', '300', '300', '60A', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SP20191015030', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '2', '2', '2', '2', '3', '3', '', '3', '4', '4', '4', '4', '', '', '', '', '2019-10-15 06:10:06', NULL),
('SP20191015031', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', '9', '9', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:18:57', NULL),
('SP20191015032', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing phase', 'AC', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-15 06:34:08', 'Submitted'),
('SP20191015033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:35:10', NULL),
('SP20191015034', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '2', '2', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:36:02', NULL),
('SP20191015035', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:36:21', NULL),
('SP20191015036', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'beta', 'AC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:39:13', 'Submitted'),
('SP20191015037', '', '', '', '', '', '', '', NULL, '', '7', '2', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:45:38', 'Submitted'),
('SP20191015038', '', '', '', '', '', '', '', NULL, '', '7', '2', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:46:16', 'Submitted'),
('SP20191015039', '', '', '', '', '', '', '', NULL, '', '7', '2', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 06:47:27', 'Submitted'),
('SP20191015040', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:03:08', 'Submitted'),
('SP20191015041', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:03:27', 'Submitted'),
('SP20191015042', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:04:20', 'Submitted'),
('SP20191015043', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:04:41', 'Submitted'),
('SP20191015044', '', '', '', '', '', '', '', NULL, '', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '2019-10-15 09:05:23', 'Submitted'),
('SP20191015045', 'x', 'x', 'x', 'x', 'DC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:06:05', 'Submitted'),
('SP20191015046', '', '', '', '', '', '', '', NULL, '', '9', '79', '9', '99', '7', '9878', '89', '09', '9897', '9779', '9', '8797', '', '', '', '', '', '', '', '', '2019-10-15 09:07:05', 'Submitted'),
('SP20191015047', '', '', '', '', '', '', '', NULL, '', '9', '79', '9', '99', '7', '9878', '89', '09', '9897', '9779', '9', '8797', '', '', '', '', '', '', '', '', '2019-10-15 09:07:55', 'Submitted'),
('SP20191015048', '', '', '', '', '', '', '', NULL, '', '9', '79', '9', '99', '7', '9878', '89', '09', '9897', '9779', '9', '8797', '', '', '', '', '', '', '', '', '2019-10-15 09:08:20', 'Submitted'),
('SP20191015049', 'x', 'x', 'x', 'x', 'DC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:14:06', 'Submitted'),
('SP20191015050', 'z', 'z', 'z', 'z', 'DC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:15:13', 'Submitted'),
('SP20191015051', 'z', 'z', 'z', 'z', 'DC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:16:27', 'Submitted'),
('SP20191015052', 'x', 'x', 'x', 'x', 'DC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:17:07', 'Submitted'),
('SP20191015053', 'x', 'x', 'x', 'x', 'DC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:18:41', 'Submitted'),
('SP20191015054', 'x', 'x', 'x', 'x', 'DC', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:21:05', 'Submitted'),
('SP20191015055', 'gh', 'bhj', 'h', 'jb', 'DC', '10/23/2019', '10/12/2019', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:22:46', 'Submitted'),
('SP20191015056', 'gh', 'bhj', 'h', 'jb', 'DC', '10/23/2019', '10/12/2019', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:27:53', 'Submitted'),
('SP20191015057', 'gh', 'bhj', 'h', 'jb', 'DC', '10/23/2019', '10/12/2019', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:28:40', 'Submitted'),
('SP20191015058', 'y', 'y', 'y', 'y', 'DC', '11/01/2019', '10/24/2019', '3', 'East Exchange (ES)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 09:29:20', 'Submitted'),
('SP20191015059', 'dwa', 'dad', 'NB', 'NMB', 'DC', '10/25/2019', '10/23/2019', '2', 'Bukit Panjang Exchange (BP)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 14:25:07', 'Submitted'),
('SP20191015060', 'X', 'X', 'X', 'X', 'DC', '10/23/2019', '10/24/2019', '3', 'Hougang Exchange (HG)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 14:33:46', 'Submitted'),
('SP20191015061', 'dwa', 'w', 'w', 'w', 'DC', '10/25/2019', '10/09/2019', '2', 'East Exchange (ES)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 14:55:34', 'Submitted'),
('SP20191015062', 'dwa', 'w', 'w', 'w', 'DC', '10/25/2019', '10/09/2019', '2', 'East Exchange (ES)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 14:57:42', 'Submitted'),
('SP20191015063', 'x', 'x', 'x', 'x', 'DC', '10/25/2019', '10/25/2019', '1', 'Changi Exchange (CG)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-15 14:58:31', 'Submitted'),
('SP20191017064', 'x', 'x', 'x', 'x', 'DC', '10/25/2019', '10/25/2019', '2', 'Changi Exchange (CG)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:00:36', 'Submitted'),
('SP20191017065', 'x', 'x', 'x', 'x', 'DC', '10/31/2019', '10/17/2019', '1', 'Jurong West Exchange (JW)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:13:26', 'Submitted'),
('SP20191017066', 'e', 'e', 'e', 'e', 'DC', '10/21/2019', '10/25/2019', '2', 'North Exchange (NT)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:16:16', 'Submitted'),
('SP20191017067', 'x', 'x', 'x', 'x', 'DC', '10/07/2019', '10/23/2019', '3', 'Bedok Exchange (BD)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:24:14', 'Submitted'),
('SP20191017068', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:25:14', NULL),
('SP20191017069', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:25:15', NULL),
('SP20191017070', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:25:16', NULL),
('SP20191017071', 'kh', 'h', 'kkj', 'bkb', 'DC', '10/23/2019', '10/23/2019', '1', 'No Preference', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:25:33', 'Submitted'),
('SP20191017072', ',jn', 'kn', 'n', 'nk', 'DC', '10/23/2019', '10/23/2019', '2', 'Bedok Exchange (BD)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:32:42', 'Submitted'),
('SP20191017073', 'z', 'z', 'x', 'x', 'DC', '10/16/2019', '11/04/2019', '1', 'Ang Mo Kio Exchange (AM)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:33:31', 'Submitted'),
('SP20191017074', 'x', 'x', 'x', 'x', 'DC', '10/21/2019', '10/24/2019', '1', 'Ayer Rajah Exchange (AR)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:42:53', 'Submitted'),
('SP20191017075', 'x', 'x', 'x', 'x', 'DC', '10/21/2019', '10/24/2019', '1', 'Ayer Rajah Exchange (AR)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:45:07', 'Submitted'),
('SP20191017076', 'x', 'x', 'x', 'x', 'DC', '10/21/2019', '10/24/2019', '1', 'Ayer Rajah Exchange (AR)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:45:43', 'Submitted'),
('SP20191017077', 'x', 'x', 'x', 'x', 'DC', '10/16/2019', '10/10/2019', '2', 'Bukit Panjang Exchange (BP)', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 01:47:26', 'Submitted'),
('SP20191017078', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'DC', '10/21/2019', '10/24/2019', '1', 'Changi Exchange (CG)', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '2019-10-17 01:48:30', 'Submitted'),
('SP20191017079', 'x', 'x', 'x', 'x', 'DC', '10/12/2019', '10/25/2019', '2', 'Bedok Exchange (BD)', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '2019-10-17 01:51:35', 'Submitted'),
('SP20191017080', 'x', 'x', 'x', 'x', 'DC', '10/12/2019', '10/25/2019', '2', 'Bedok Exchange (BD)', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2019-10-17 01:52:08', 'Submitted'),
('SP20191017081', 'x', 'x', 'x', 'x', 'DC', '10/12/2019', '10/25/2019', '1', 'Bedok Exchange (BD)', '100', '100', '100', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 02:00:43', 'Submitted'),
('SP20191017082', 'x', 'x', 'x', 'x', 'DC', '10/12/2019', '10/25/2019', '1', 'Bedok Exchange (BD)', '100', '100', '100', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 02:02:28', 'Submitted'),
('SP20191017083', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta test', 'DC', '10/23/2019', '10/27/2019', '2', 'Ayer Rajah Exchange (AR)', '100', '100', '1', '1', '200', '200', '1', '1', '300', '300', '1', '1', '400', '400', '1', '1', '500', '500', '1', '1', '2019-10-17 03:26:02', 'Submitted'),
('SP20191017084', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing', 'DC', '10/13/2019', '10/26/2019', '1', 'Katong Exchange (KT)', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2019-10-17 06:52:09', 'Submitted'),
('SP20191017085', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing phase', 'DC', '10/28/2019', '01/16/2020', '2', 'Changi Exchange (CG)', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 08:57:52', 'Submitted'),
('SP20191017086', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing phase', 'DC', '10/28/2019', '01/16/2020', '2', 'Changi Exchange (CG)', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-17 08:58:58', 'Installed'),
('SP20191018087', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'beta testing ', 'DC', '10/19/2019', '10/31/2019', '1', 'Orchard Exchange (OC)', '1', '1', '1', '1', '2', '22', '2', '2', '3', '3', '3', '3', '4', '4', '4', '4', '5', '5', '5', '5', '2019-10-18 01:11:05', 'Submitted'),
('SP20191019088', 'Z', 'Z', 'Z', 'Z', 'DC', '10/15/2019', '10/23/2019', '2', 'BD', '1', '1', '11', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-18 16:14:05', 'Submitted'),
('SP20191019089', 'Z', 'Z', 'Z', 'Z', 'DC', '10/15/2019', '10/23/2019', '2', 'BD', '1', '1', '11', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-18 16:15:32', 'Submitted'),
('SP20191019090', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'DC', '10/08/2019', '10/31/2019', 'BPN_2', 'BP', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-18 16:17:13', 'Submitted'),
('SP20191019091', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'DC', '10/22/2019', '10/17/2019', 'JW03 Level 3 PCM 1', 'JW', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-18 16:18:09', 'Submitted'),
('SP20191019092', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta', 'DC', '10/01/2019', '10/31/2019', 'ES2A_2', 'ES', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2019-10-19 08:07:16', 'Submitted'),
('SP20191019093', 'x', 'x', 'x', 'x', 'DC', '10/25/2019', '10/25/2019', 'AR05C Level 5 PCM 2', 'AR', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-19 08:30:22', 'Submitted');

--
-- Triggers `spaceRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_spaceRequests_insert` BEFORE INSERT ON `spaceRequests` FOR EACH ROW BEGIN
  INSERT INTO spaceRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('SP',  CONCAT( YEAR(CURDATE()), MONTH(CURDATE()), DAY(CURDATE()) ), LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `spaceRequests_suffix`
--

CREATE TABLE `spaceRequests_suffix` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spaceRequests_suffix`
--

INSERT INTO `spaceRequests_suffix` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77),
(78),
(79),
(80),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88),
(89),
(90),
(91),
(92),
(93);

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
(60, 1, 1, 1, 1, 1, 'North Exchange (NT)', '3', 'Installation in Progress'),
(61, 1000, 300, 4000, 100, 500, 'Tampines Exchange (TP)', '2', 'Installation in Progress'),
(62, 1, 1, 2, 2, 2, 'Queenstown Exchange (QT)', '2', 'Submitted'),
(63, 1, 1, 1, 1, 1, 'Geylang Exchange (GL)', '2', 'Submitted'),
(64, 100, 100, 100, 100, 100, 'Changi Exchange (CG)', '2', 'Submitted'),
(65, 100, 100, 100, 100, 100, 'Changi Exchange (CG)', '2', 'Submitted'),
(66, 1, 1, 1, 1, 1, 'Hougang Exchange (HG)', '3', 'Assigned'),
(67, 700, 700, 50, 4, 2, 'Changi Exchange (CG)', '2', 'Submitted'),
(68, 100, 240, 24, 1, 60, 'Hougang Exchange (HG)', '2', 'Submitted'),
(69, 1, 1, 1, 1, 1, 'Bedok Exchange (BD)', '2', 'Installed'),
(70, 1, 1, 1, 1, 1, 'Hougang Exchange (HG)', '2', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `ssuRequests`
--

CREATE TABLE `ssuRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) NOT NULL,
  `requestorDepartment` varchar(255) NOT NULL,
  `requestorReason` varchar(255) NOT NULL,
  `numberOfPorts` int(11) NOT NULL,
  `transmissionType` varchar(255) NOT NULL,
  `interfacingType` varchar(255) NOT NULL,
  `endDate` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ssuRequests`
--

INSERT INTO `ssuRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `numberOfPorts`, `transmissionType`, `interfacingType`, `endDate`, `room`, `exchange`, `requestStatus`, `requestTimestamp`) VALUES
('SSU20191015032', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'Beta testing phase', 2, '2mb', '75Ω', '01/16/2020', 1, 'Paya Lebar Exchange (PL)', 'Submitted', '2019-10-15 05:15:17'),
('SSU20191016033', 'x', 'x', 'x', 'x', 1, '2mb', '120Ω', '10/21/2019', 1, 'East Exchange (ES)', 'Submitted', '2019-10-16 13:25:23'),
('SSU20191016034', 'x', 'x', 'x', 'x', 1, '2mb', '120Ω', '10/21/2019', 1, 'East Exchange (ES)', 'Submitted', '2019-10-16 13:25:25'),
('SSU20191017035', 'X', 'X', 'X', 'X', 20, '2mb', '75Ω', '11/03/2020', 1, 'Bedok Exchange (BD)', 'Submitted', '2019-10-17 00:44:52'),
('SSU20191017036', 'X', 'X', 'X', 'X', 20, '2mb', '75Ω', '11/03/2020', 1, 'Bedok Exchange (BD)', 'Submitted', '2019-10-17 00:50:28'),
('SSU20191017037', 'X', 'X', 'X', 'X', 20, '2mb', '75Ω', '11/03/2020', 1, 'Bedok Exchange (BD)', 'Submitted', '2019-10-17 00:50:52'),
('SSU20191017038', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'X', 23, '2mb', '75Ω', '10/17/2019', 1, 'Paya Lebar Exchange (PL)', 'Submitted', '2019-10-17 00:51:53'),
('SSU20191017039', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'X', 23, '2mb', '75Ω', '10/17/2019', 1, 'Paya Lebar Exchange (PL)', 'Submitted', '2019-10-17 00:55:47'),
('SSU20191017040', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'X', 23, '2mb', '75Ω', '10/17/2019', 1, 'Paya Lebar Exchange (PL)', 'Submitted', '2019-10-17 00:55:54'),
('SSU20191017041', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'X', 23, '2mb', '75Ω', '10/17/2019', 1, 'Paya Lebar Exchange (PL)', 'Submitted', '2019-10-17 00:57:35'),
('SSU20191017042', 'Chester', 'chester.yee@singtel.com', 'FNSE', 'X', 23, '2mb', '75Ω', '10/17/2019', 1, 'Paya Lebar Exchange (PL)', 'Submitted', '2019-10-17 00:58:52');

--
-- Triggers `ssuRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_ssuRequests_insert` BEFORE INSERT ON `ssuRequests` FOR EACH ROW BEGIN
  INSERT INTO ssuRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('SSU',  CONCAT( YEAR(CURDATE()), MONTH(CURDATE()), DAY(CURDATE()) ), LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ssuRequests_suffix`
--

CREATE TABLE `ssuRequests_suffix` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ssuRequests_suffix`
--

INSERT INTO `ssuRequests_suffix` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(10),
(11),
(15),
(16),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, '1@1.com', '1234'),
(2, 'admin@singtel.com', 'singtelAdmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cableTrayRequests`
--
ALTER TABLE `cableTrayRequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cableTrayRequests_suffix`
--
ALTER TABLE `cableTrayRequests_suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fdfRequests`
--
ALTER TABLE `fdfRequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fdfRequests_suffix`
--
ALTER TABLE `fdfRequests_suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalRequests`
--
ALTER TABLE `generalRequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalRequests_suffix`
--
ALTER TABLE `generalRequests_suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerRequests`
--
ALTER TABLE `powerRequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerRequests_suffix`
--
ALTER TABLE `powerRequests_suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaceRackRequests`
--
ALTER TABLE `spaceRackRequests`
  ADD PRIMARY KEY (`rackId`);

--
-- Indexes for table `spaceRequests`
--
ALTER TABLE `spaceRequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaceRequests_suffix`
--
ALTER TABLE `spaceRequests_suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssuRequests`
--
ALTER TABLE `ssuRequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssuRequests_suffix`
--
ALTER TABLE `ssuRequests_suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cableTrayRequests_suffix`
--
ALTER TABLE `cableTrayRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `fdfRequests_suffix`
--
ALTER TABLE `fdfRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `generalRequests_suffix`
--
ALTER TABLE `generalRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `powerRequests_suffix`
--
ALTER TABLE `powerRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `spaceRackRequests`
--
ALTER TABLE `spaceRackRequests`
  MODIFY `rackId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spaceRequests_suffix`
--
ALTER TABLE `spaceRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `ssuRequests_suffix`
--
ALTER TABLE `ssuRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
