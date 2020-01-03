-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2020 at 06:31 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

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
  `requestorEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorDepartment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorReason` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `startDate` varchar(50) DEFAULT NULL,
  `endDate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackLocation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fdfRackLocation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `room` varchar(50) DEFAULT NULL,
  `exchange` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatus` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatusAcknowledged` varchar(50) DEFAULT NULL,
  `requestStatusAssigned` varchar(50) DEFAULT NULL,
  `requestStatusInProgress` varchar(50) DEFAULT NULL,
  `requestStatusCompleted` varchar(50) DEFAULT NULL,
  `requestStatusClosed` varchar(50) DEFAULT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adminFileUpload` varchar(255) DEFAULT NULL,
  `requestorFileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cableTrayRequests`
--

INSERT INTO `cableTrayRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `startDate`, `endDate`, `rackLocation`, `fdfRackLocation`, `room`, `exchange`, `requestStatus`, `requestStatusAcknowledged`, `requestStatusAssigned`, `requestStatusInProgress`, `requestStatusCompleted`, `requestStatusClosed`, `requestTimestamp`, `remarks`, `adminFileUpload`, `requestorFileUpload`) VALUES
('CTR20200102001', 'X', 'X', 'X', 'X', '02/01/2020', '02/01/2020', 'AB12', 'A1B12', 'BD033 Level 3 PCM 1', 'BD', 'Submitted', NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:39:55', NULL, NULL, NULL);

--
-- Triggers `cableTrayRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_cableTrayRequests_insert` BEFORE INSERT ON `cableTrayRequests` FOR EACH ROW BEGIN
  INSERT INTO cableTrayRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('CTR',  CONCAT( 
      YEAR(CURDATE()), 
      DATE_FORMAT(CURDATE(), '%m'), 
      DATE_FORMAT(CURDATE() ,'%d')), 
      LPAD(LAST_INSERT_ID(), 3, '0'));
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
(1);

-- --------------------------------------------------------

--
-- Table structure for table `fdfRequests`
--

CREATE TABLE `fdfRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorDepartment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorReason` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `numberOfPorts` int(11) DEFAULT NULL,
  `numberOfCableTies` int(11) DEFAULT NULL,
  `startDate` varchar(50) DEFAULT NULL,
  `endDate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `room` varchar(50) DEFAULT NULL,
  `exchange` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatus` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `requestStatusAcknowledged` varchar(50) DEFAULT NULL,
  `requestStatusAssigned` varchar(50) DEFAULT NULL,
  `requestStatusInProgress` varchar(50) DEFAULT NULL,
  `requestStatusCompleted` varchar(50) DEFAULT NULL,
  `requestStatusClosed` varchar(50) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `adminFileUpload` varchar(255) DEFAULT NULL,
  `requestorFileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fdfRequests`
--

INSERT INTO `fdfRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `numberOfPorts`, `numberOfCableTies`, `startDate`, `endDate`, `room`, `exchange`, `requestStatus`, `requestTimestamp`, `requestStatusAcknowledged`, `requestStatusAssigned`, `requestStatusInProgress`, `requestStatusCompleted`, `requestStatusClosed`, `remarks`, `adminFileUpload`, `requestorFileUpload`) VALUES
('FDF20200102001', 'X', 'X', 'X', 'X', 1, 100, '12/04/2019', '12/04/2019', 'AM3A Level 3 PCM 2', 'AM', 'Submitted', '2020-01-02 03:33:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Triggers `fdfRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_fdfRequests_insert` BEFORE INSERT ON `fdfRequests` FOR EACH ROW BEGIN
  INSERT INTO fdfRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('FDF',  CONCAT( 
      YEAR(CURDATE()), 
      DATE_FORMAT(CURDATE(), '%m'), 
      DATE_FORMAT(CURDATE() ,'%d')), 
      LPAD(LAST_INSERT_ID(), 3, '0'));
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
(1);

-- --------------------------------------------------------

--
-- Table structure for table `generalRequests`
--

CREATE TABLE `generalRequests` (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorDepartment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorReason` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `query` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `requestStatus` varchar(50) DEFAULT NULL,
  `requestStatusAcknowledged` varchar(50) DEFAULT NULL,
  `requestStatusAssigned` varchar(50) DEFAULT NULL,
  `requestStatusInProgress` varchar(50) DEFAULT NULL,
  `requestStatusCompleted` varchar(50) DEFAULT NULL,
  `requestStatusClosed` varchar(50) DEFAULT NULL,
  `adminFileUpload` varchar(255) DEFAULT NULL,
  `requestorFileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `generalRequests`
--

INSERT INTO `generalRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `query`, `remarks`, `requestTimestamp`, `requestStatus`, `requestStatusAcknowledged`, `requestStatusAssigned`, `requestStatusInProgress`, `requestStatusCompleted`, `requestStatusClosed`, `adminFileUpload`, `requestorFileUpload`) VALUES
('GNR20200102001', 'X', 'X', 'X', 'X', 'DAW', NULL, '2020-01-02 03:40:10', 'Submitted', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Triggers `generalRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_generalRequests_insert` BEFORE INSERT ON `generalRequests` FOR EACH ROW BEGIN
  INSERT INTO generalRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('GNR',  CONCAT( 
      YEAR(CURDATE()), 
      DATE_FORMAT(CURDATE(), '%m'), 
      DATE_FORMAT(CURDATE() ,'%d')), 
      LPAD(LAST_INSERT_ID(), 3, '0'));
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
(1);

-- --------------------------------------------------------

--
-- Table structure for table `mmrRequests`
--

CREATE TABLE `mmrRequests` (
  `requestId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(50) DEFAULT NULL,
  `requestorEmail` varchar(50) DEFAULT NULL,
  `requestorDepartment` varchar(50) DEFAULT NULL,
  `requestorReason` varchar(50) DEFAULT NULL,
  `request` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatus` varchar(50) DEFAULT NULL,
  `requestTimestamp` timestamp NOT NULL,
  `requestStatusAcknowledged` varchar(50) DEFAULT NULL,
  `requestStatusAssigned` varchar(50) DEFAULT NULL,
  `requestStatusInProgress` varchar(50) DEFAULT NULL,
  `requestStatusCompleted` varchar(50) DEFAULT NULL,
  `requestStatusClosed` varchar(50) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `adminFileUpload` varchar(255) DEFAULT NULL,
  `requestorFileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mmrRequests`
--

INSERT INTO `mmrRequests` (`requestId`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `request`, `requestStatus`, `requestTimestamp`, `requestStatusAcknowledged`, `requestStatusAssigned`, `requestStatusInProgress`, `requestStatusCompleted`, `requestStatusClosed`, `remarks`, `adminFileUpload`, `requestorFileUpload`) VALUES
('MMR20200102001', 'x', 'x', 'x', 'x', 'dadad', 'Submitted', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Triggers `mmrRequests`
--
DELIMITER $$
CREATE TRIGGER `mmr_trigger` BEFORE INSERT ON `mmrRequests` FOR EACH ROW BEGIN
  INSERT INTO mmrRequests_suffix VALUES (NULL);
  SET NEW.requestId = CONCAT('MMR',  CONCAT( 
      YEAR(CURDATE()), 
      DATE_FORMAT(CURDATE(), '%m'), 
      DATE_FORMAT(CURDATE() ,'%d')), 
      LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mmrRequests_suffix`
--

CREATE TABLE `mmrRequests_suffix` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mmrRequests_suffix`
--

INSERT INTO `mmrRequests_suffix` (`id`) VALUES
(1);

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
  `startDate` varchar(255) DEFAULT NULL,
  `endDate` varchar(255) DEFAULT NULL,
  `exchange` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `rackLocation1` varchar(20) DEFAULT NULL,
  `breakerSize1` varchar(20) DEFAULT NULL,
  `breakerQuantity1` varchar(20) DEFAULT NULL,
  `breakerName1FeedA1` varchar(20) DEFAULT NULL,
  `breakerName1FeedA2` varchar(20) DEFAULT NULL,
  `breakerName1FeedB1` varchar(20) DEFAULT NULL,
  `breakerName1FeedB2` varchar(20) DEFAULT NULL,
  `subPdu1FeedA1` varchar(20) DEFAULT NULL,
  `subPdu1FeedA2` varchar(20) DEFAULT NULL,
  `subPdu1FeedB1` varchar(20) DEFAULT NULL,
  `subPdu1FeedB2` varchar(20) DEFAULT NULL,
  `powerConsumption1` varchar(10) DEFAULT NULL,
  `rackLocation2` varchar(20) DEFAULT NULL,
  `breakerSize2` varchar(20) DEFAULT NULL,
  `breakerName2FeedA1` varchar(20) DEFAULT NULL,
  `breakerName2FeedA2` varchar(20) DEFAULT NULL,
  `breakerName2FeedB1` varchar(20) DEFAULT NULL,
  `breakerName2FeedB2` varchar(20) DEFAULT NULL,
  `subPdu2FeedA1` varchar(20) DEFAULT NULL,
  `subPdu2FeedA2` varchar(20) DEFAULT NULL,
  `subPdu2FeedB1` varchar(20) DEFAULT NULL,
  `subPdu2FeedB2` varchar(20) DEFAULT NULL,
  `breakerQuantity2` varchar(20) DEFAULT NULL,
  `powerConsumption2` varchar(10) DEFAULT NULL,
  `rackLocation3` varchar(20) DEFAULT NULL,
  `breakerSize3` varchar(20) DEFAULT NULL,
  `breakerName3FeedA1` varchar(20) DEFAULT NULL,
  `breakerName3FeedA2` varchar(20) DEFAULT NULL,
  `breakerName3FeedB1` varchar(20) DEFAULT NULL,
  `breakerName3FeedB2` varchar(20) DEFAULT NULL,
  `subPdu3FeedA1` varchar(20) DEFAULT NULL,
  `subPdu3FeedA2` varchar(20) DEFAULT NULL,
  `subPdu3FeedB1` varchar(20) DEFAULT NULL,
  `subPdu3FeedB2` varchar(20) DEFAULT NULL,
  `breakerQuantity3` varchar(20) DEFAULT NULL,
  `powerConsumption3` varchar(10) DEFAULT NULL,
  `rackLocation4` varchar(20) DEFAULT NULL,
  `breakerSize4` varchar(20) DEFAULT NULL,
  `breakerName4FeedA1` varchar(20) DEFAULT NULL,
  `breakerName4FeedA2` varchar(20) DEFAULT NULL,
  `breakerName4FeedB1` varchar(20) DEFAULT NULL,
  `breakerName4FeedB2` varchar(20) DEFAULT NULL,
  `subPdu4FeedA1` varchar(20) DEFAULT NULL,
  `subPdu4FeedA2` varchar(20) DEFAULT NULL,
  `subPdu4FeedB1` varchar(20) DEFAULT NULL,
  `subPdu4FeedB2` varchar(20) DEFAULT NULL,
  `breakerQuantity4` varchar(20) DEFAULT NULL,
  `powerConsumption4` varchar(10) DEFAULT NULL,
  `rackLocation5` varchar(20) DEFAULT NULL,
  `breakerSize5` varchar(20) DEFAULT NULL,
  `breakerName5FeedA1` varchar(20) DEFAULT NULL,
  `breakerName5FeedA2` varchar(20) DEFAULT NULL,
  `breakerName5FeedB1` varchar(20) DEFAULT NULL,
  `breakerName5FeedB2` varchar(20) DEFAULT NULL,
  `subPdu5FeedA1` varchar(20) DEFAULT NULL,
  `subPdu5FeedA2` varchar(20) DEFAULT NULL,
  `subPdu5FeedB1` varchar(20) DEFAULT NULL,
  `subPdu5FeedB2` varchar(20) DEFAULT NULL,
  `breakerQuantity5` varchar(20) DEFAULT NULL,
  `powerConsumption5` varchar(10) DEFAULT NULL,
  `powerType` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatusAcknowledged` varchar(50) DEFAULT NULL,
  `requestStatusAssigned` varchar(50) DEFAULT NULL,
  `requestStatusInProgress` varchar(50) DEFAULT NULL,
  `requestStatusCompleted` varchar(50) DEFAULT NULL,
  `requestStatusClosed` varchar(50) DEFAULT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` varchar(255) DEFAULT NULL,
  `adminFileUpload` varchar(255) DEFAULT NULL,
  `requestorFileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `powerRequests`
--

INSERT INTO `powerRequests` (`id`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `startDate`, `endDate`, `exchange`, `room`, `rackLocation1`, `breakerSize1`, `breakerQuantity1`, `breakerName1FeedA1`, `breakerName1FeedA2`, `breakerName1FeedB1`, `breakerName1FeedB2`, `subPdu1FeedA1`, `subPdu1FeedA2`, `subPdu1FeedB1`, `subPdu1FeedB2`, `powerConsumption1`, `rackLocation2`, `breakerSize2`, `breakerName2FeedA1`, `breakerName2FeedA2`, `breakerName2FeedB1`, `breakerName2FeedB2`, `subPdu2FeedA1`, `subPdu2FeedA2`, `subPdu2FeedB1`, `subPdu2FeedB2`, `breakerQuantity2`, `powerConsumption2`, `rackLocation3`, `breakerSize3`, `breakerName3FeedA1`, `breakerName3FeedA2`, `breakerName3FeedB1`, `breakerName3FeedB2`, `subPdu3FeedA1`, `subPdu3FeedA2`, `subPdu3FeedB1`, `subPdu3FeedB2`, `breakerQuantity3`, `powerConsumption3`, `rackLocation4`, `breakerSize4`, `breakerName4FeedA1`, `breakerName4FeedA2`, `breakerName4FeedB1`, `breakerName4FeedB2`, `subPdu4FeedA1`, `subPdu4FeedA2`, `subPdu4FeedB1`, `subPdu4FeedB2`, `breakerQuantity4`, `powerConsumption4`, `rackLocation5`, `breakerSize5`, `breakerName5FeedA1`, `breakerName5FeedA2`, `breakerName5FeedB1`, `breakerName5FeedB2`, `subPdu5FeedA1`, `subPdu5FeedA2`, `subPdu5FeedB1`, `subPdu5FeedB2`, `breakerQuantity5`, `powerConsumption5`, `powerType`, `requestStatus`, `requestStatusAcknowledged`, `requestStatusAssigned`, `requestStatusInProgress`, `requestStatusCompleted`, `requestStatusClosed`, `requestTimestamp`, `remarks`, `adminFileUpload`, `requestorFileUpload`) VALUES
('PWR20200102001', 'X', 'XX', 'X', 'X', '12/04/2019', '12/04/2019', 'BP', 'BPN Level 2 PCM 1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'DC', 'Submitted', NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:33:15', NULL, NULL, NULL);

--
-- Triggers `powerRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_powerRequests_insert` BEFORE INSERT ON `powerRequests` FOR EACH ROW BEGIN
  INSERT INTO powerRequests_suffix VALUES (NULL);
  SET NEW.id = CONCAT('PWR',  CONCAT( 
      YEAR(CURDATE()), 
      DATE_FORMAT(CURDATE(), '%m'), 
      DATE_FORMAT(CURDATE() ,'%d')), 
      LPAD(LAST_INSERT_ID(), 3, '0'));
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
(1);

-- --------------------------------------------------------

--
-- Table structure for table `spaceRequests`
--

CREATE TABLE `spaceRequests` (
  `requestId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorDepartment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorReason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `powerType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackType` varchar(20) DEFAULT NULL,
  `startDate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `endDate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `exchange` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeLength1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeHeight1` varchar(20) DEFAULT NULL,
  `rackSizeWeight1` varchar(20) DEFAULT NULL,
  `breakerSize1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `powerConsumption1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackLocation1` varchar(10) DEFAULT NULL,
  `subPdu1FeedA1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subPdu1FeedA2` varchar(20) DEFAULT NULL,
  `subPdu1FeedB1` varchar(20) DEFAULT NULL,
  `subPdu1FeedB2` varchar(20) DEFAULT NULL,
  `breakerName1FeedA1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerName1FeedA2` varchar(20) DEFAULT NULL,
  `breakerName1FeedB1` varchar(20) DEFAULT NULL,
  `breakerName1FeedB2` varchar(20) DEFAULT NULL,
  `rackSizeLength2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeHeight2` varchar(20) DEFAULT NULL,
  `rackSizeWeight2` varchar(20) DEFAULT NULL,
  `breakerSize2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `powerConsumption2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackLocation2` varchar(10) DEFAULT NULL,
  `subPdu2FeedA1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subPdu2FeedA2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subPdu2FeedB1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subPdu2FeedB2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerName2FeedA1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerName2FeedA2` varchar(20) DEFAULT NULL,
  `breakerName2FeedB1` varchar(20) DEFAULT NULL,
  `breakerName2FeedB2` varchar(20) DEFAULT NULL,
  `rackSizeLength3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeHeight3` varchar(20) DEFAULT NULL,
  `rackSizeWeight3` varchar(20) DEFAULT NULL,
  `breakerSize3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `powerConsumption3` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackLocation3` varchar(10) DEFAULT NULL,
  `subPdu3FeedA1` varchar(20) DEFAULT NULL,
  `subPdu3FeedA2` varchar(20) DEFAULT NULL,
  `subPdu3FeedB1` varchar(20) DEFAULT NULL,
  `subPdu3FeedB2` varchar(20) DEFAULT NULL,
  `breakerName3FeedA1` varchar(20) DEFAULT NULL,
  `breakerName3FeedA2` varchar(20) DEFAULT NULL,
  `breakerName3FeedB1` varchar(20) DEFAULT NULL,
  `breakerName3FeedB2` varchar(20) DEFAULT NULL,
  `rackSizeLength4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeHeight4` varchar(20) DEFAULT NULL,
  `rackSizeWeight4` varchar(20) DEFAULT NULL,
  `breakerSize4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `powerConsumption4` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackLocation4` varchar(10) DEFAULT NULL,
  `subPdu4FeedA1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subPdu4FeedA2` varchar(20) DEFAULT NULL,
  `subPdu4FeedB1` varchar(20) DEFAULT NULL,
  `subPdu4FeedB2` varchar(20) DEFAULT NULL,
  `breakerName4FeedA1` varchar(20) DEFAULT NULL,
  `breakerName4FeedA2` varchar(20) DEFAULT NULL,
  `breakerName4FeedB1` varchar(20) DEFAULT NULL,
  `breakerName4FeedB2` varchar(20) DEFAULT NULL,
  `rackSizeLength5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeBreadth5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackSizeHeight5` varchar(20) DEFAULT NULL,
  `rackSizeWeight5` varchar(20) DEFAULT NULL,
  `breakerSize5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerQuantity5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `powerConsumption5` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rackLocation5` varchar(10) DEFAULT NULL,
  `subPdu5FeedA1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subPdu5FeedA2` varchar(20) DEFAULT NULL,
  `subPdu5FeedB1` varchar(20) DEFAULT NULL,
  `subPdu5FeedB2` varchar(20) DEFAULT NULL,
  `breakerName5FeedA1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerName5FeedA2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerName5FeedB1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `breakerName5FeedB2` varchar(20) DEFAULT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `requestStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatusAcknowledged` varchar(50) DEFAULT NULL,
  `requestStatusAssigned` varchar(50) DEFAULT NULL,
  `requestStatusInProgress` varchar(50) DEFAULT NULL,
  `requestStatusCompleted` varchar(50) DEFAULT NULL,
  `requestStatusClosed` varchar(50) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `ct` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adminFileUpload` varchar(255) DEFAULT NULL,
  `requestorFileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spaceRequests`
--

INSERT INTO `spaceRequests` (`requestId`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `powerType`, `rackType`, `startDate`, `endDate`, `room`, `exchange`, `rackSizeLength1`, `rackSizeBreadth1`, `rackSizeHeight1`, `rackSizeWeight1`, `breakerSize1`, `breakerQuantity1`, `powerConsumption1`, `rackLocation1`, `subPdu1FeedA1`, `subPdu1FeedA2`, `subPdu1FeedB1`, `subPdu1FeedB2`, `breakerName1FeedA1`, `breakerName1FeedA2`, `breakerName1FeedB1`, `breakerName1FeedB2`, `rackSizeLength2`, `rackSizeBreadth2`, `rackSizeHeight2`, `rackSizeWeight2`, `breakerSize2`, `breakerQuantity2`, `powerConsumption2`, `rackLocation2`, `subPdu2FeedA1`, `subPdu2FeedA2`, `subPdu2FeedB1`, `subPdu2FeedB2`, `breakerName2FeedA1`, `breakerName2FeedA2`, `breakerName2FeedB1`, `breakerName2FeedB2`, `rackSizeLength3`, `rackSizeBreadth3`, `rackSizeHeight3`, `rackSizeWeight3`, `breakerSize3`, `breakerQuantity3`, `powerConsumption3`, `rackLocation3`, `subPdu3FeedA1`, `subPdu3FeedA2`, `subPdu3FeedB1`, `subPdu3FeedB2`, `breakerName3FeedA1`, `breakerName3FeedA2`, `breakerName3FeedB1`, `breakerName3FeedB2`, `rackSizeLength4`, `rackSizeBreadth4`, `rackSizeHeight4`, `rackSizeWeight4`, `breakerSize4`, `breakerQuantity4`, `powerConsumption4`, `rackLocation4`, `subPdu4FeedA1`, `subPdu4FeedA2`, `subPdu4FeedB1`, `subPdu4FeedB2`, `breakerName4FeedA1`, `breakerName4FeedA2`, `breakerName4FeedB1`, `breakerName4FeedB2`, `rackSizeLength5`, `rackSizeBreadth5`, `rackSizeHeight5`, `rackSizeWeight5`, `breakerSize5`, `breakerQuantity5`, `powerConsumption5`, `rackLocation5`, `subPdu5FeedA1`, `subPdu5FeedA2`, `subPdu5FeedB1`, `subPdu5FeedB2`, `breakerName5FeedA1`, `breakerName5FeedA2`, `breakerName5FeedB1`, `breakerName5FeedB2`, `requestTimestamp`, `requestStatus`, `requestStatusAcknowledged`, `requestStatusAssigned`, `requestStatusInProgress`, `requestStatusCompleted`, `requestStatusClosed`, `remarks`, `ct`, `adminFileUpload`, `requestorFileUpload`) VALUES
('SPA20200102001', 'X', 'X', 'X', 'X', 'DC', 'Singtel Racks', '12/04/2019', '12/04/2019', 'BPN Level 2 PCM 1', 'BP', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:32:33', 'Submitted', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-02 11:32:33', NULL, NULL),
('SPA20200102002', 'X', 'X', 'X', 'X', 'DC', 'Singtel Racks', '12/04/2019', '12/04/2019', 'BPN Level 2 PCM 1', 'BP', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:32:44', 'Submitted', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-02 11:32:44', NULL, NULL),
('SPA20200102003', 'X', 'X', 'X', 'X', 'DC', 'Singtel Racks', '12/04/2019', '12/04/2019', 'BPN Level 2 PCM 1', 'BP', '1', '1', '1', '1', '1', '1', '1', '', 'x', '', 'x', '', 'x', '', 'x', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-02 03:32:45', 'Assigned', '2020-01-02 11:54:43', '2020-01-02 11:54:56', NULL, NULL, NULL, NULL, '2020-01-02 11:32:45', '../mpp_storage/SPA20200102003/4.png', '');

--
-- Triggers `spaceRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_spaceRequests_insert` BEFORE INSERT ON `spaceRequests` FOR EACH ROW BEGIN
  INSERT INTO spaceRequests_suffix VALUES (NULL);
  SET NEW.requestId = CONCAT('SPA',  CONCAT( 
      YEAR(CURDATE()), 
      DATE_FORMAT(CURDATE(), '%m'), 
      DATE_FORMAT(CURDATE() ,'%d')), 
      LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `spaceRequests_suffix`
--

CREATE TABLE `spaceRequests_suffix` (
  `requestId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spaceRequests_suffix`
--

INSERT INTO `spaceRequests_suffix` (`requestId`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `ssuRequests`
--

CREATE TABLE `ssuRequests` (
  `requestId` varchar(50) NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorDepartment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestorReason` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `startDate` varchar(50) DEFAULT NULL,
  `endDate` varchar(50) DEFAULT NULL,
  `numberOfPorts` int(11) DEFAULT NULL,
  `transmissionType` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `interfacingType` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `room` varchar(50) DEFAULT NULL,
  `exchange` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatus` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `requestStatusAcknowledged` varchar(50) DEFAULT NULL,
  `requestStatusAssigned` varchar(50) DEFAULT NULL,
  `requestStatusInProgress` varchar(50) DEFAULT NULL,
  `requestStatusCompleted` varchar(50) DEFAULT NULL,
  `requestStatusClosed` varchar(50) DEFAULT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` varchar(255) DEFAULT NULL,
  `adminFileUpload` varchar(255) DEFAULT NULL,
  `requestorFileUpload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ssuRequests`
--

INSERT INTO `ssuRequests` (`requestId`, `requestorName`, `requestorEmail`, `requestorDepartment`, `requestorReason`, `startDate`, `endDate`, `numberOfPorts`, `transmissionType`, `interfacingType`, `room`, `exchange`, `requestStatus`, `requestStatusAcknowledged`, `requestStatusAssigned`, `requestStatusInProgress`, `requestStatusCompleted`, `requestStatusClosed`, `requestTimestamp`, `remarks`, `adminFileUpload`, `requestorFileUpload`) VALUES
('SSU20200102001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:34:47', NULL, NULL, NULL),
('SSU20200102002', 'X', 'X', 'X', 'X', '12/04/2019', '12/04/2019', 12, '2mb', '75Ω', '', 'BD', 'Submitted', NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:38:47', NULL, NULL, NULL),
('SSU20200102003', 'X', 'X', 'X', 'X', '12/04/2019', '12/04/2019', 12, '2mb', '75Ω', '', 'BD', 'Submitted', NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:39:12', NULL, NULL, NULL),
('SSU20200102004', 'X', 'X', 'X', 'X', '12/04/2019', '12/04/2019', 12, '2mb', '75Ω', '', 'BD', 'Submitted', NULL, NULL, NULL, NULL, NULL, '2020-01-02 03:39:21', NULL, NULL, NULL),
('SSU20200103005', 'Chester Yee', 'chester.yee@singtel.com', 'FNE', 'X', '', '', 1, '2mb', '75Ω', 'CG Level 1 PCM 1', 'CG', 'Assigned', '2020-01-03 10:30:23', '2020-01-03 14:22:20', NULL, NULL, NULL, '2020-01-03 02:13:16', NULL, NULL, NULL);

--
-- Triggers `ssuRequests`
--
DELIMITER $$
CREATE TRIGGER `ssuTg` BEFORE INSERT ON `ssuRequests` FOR EACH ROW BEGIN
  INSERT INTO ssuRequests_suffix VALUES (NULL);
  SET NEW.requestId = CONCAT('SSU',  CONCAT( 
      YEAR(CURDATE()), 
      DATE_FORMAT(CURDATE(), '%m'), 
      DATE_FORMAT(CURDATE(),'%d')), 
      LPAD(LAST_INSERT_ID(), 3, '0'));
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
(5);

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
-- Indexes for table `mmrRequests`
--
ALTER TABLE `mmrRequests`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `mmrRequests_suffix`
--
ALTER TABLE `mmrRequests_suffix`
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
-- Indexes for table `spaceRequests`
--
ALTER TABLE `spaceRequests`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `spaceRequests_suffix`
--
ALTER TABLE `spaceRequests_suffix`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `ssuRequests`
--
ALTER TABLE `ssuRequests`
  ADD PRIMARY KEY (`requestId`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fdfRequests_suffix`
--
ALTER TABLE `fdfRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `generalRequests_suffix`
--
ALTER TABLE `generalRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mmrRequests_suffix`
--
ALTER TABLE `mmrRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `powerRequests_suffix`
--
ALTER TABLE `powerRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spaceRequests_suffix`
--
ALTER TABLE `spaceRequests_suffix`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ssuRequests_suffix`
--
ALTER TABLE `ssuRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
