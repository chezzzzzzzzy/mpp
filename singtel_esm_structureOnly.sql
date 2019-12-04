-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2019 at 02:49 AM
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
  `completionDate` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `completionDate` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `query` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` varchar(255) DEFAULT NULL,
  `completionDate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `spaceRackRequests`
--

CREATE TABLE `spaceRackRequests` (
  `requestId` int(11) NOT NULL,
  `rackId` int(11) NOT NULL,
  `rackSizeLength` int(11) NOT NULL,
  `rackSizeBreadth` int(11) NOT NULL,
  `breakerSize` int(11) NOT NULL,
  `breakerQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Triggers `spaceRequests`
--
DELIMITER $$
CREATE TRIGGER `tg_spaceRequests_insert` BEFORE INSERT ON `spaceRequests` FOR EACH ROW BEGIN
  INSERT INTO spaceRequests_suffix VALUES (NULL);
  SET NEW.requestId = CONCAT('SP',  CONCAT( YEAR(CURDATE()), MONTH(CURDATE()), DATE_FORMAT(CURDATE() ,'%d')), LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `spaceRequestsNew`
--

CREATE TABLE `spaceRequestsNew` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spaceRequests_suffix`
--

CREATE TABLE `spaceRequests_suffix` (
  `requestId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `ssuRequests`
--

CREATE TABLE `ssuRequests` (
  `requestId` varchar(50) NOT NULL DEFAULT '0',
  `requestorName` varchar(30) DEFAULT NULL,
  `requestorEmail` varchar(255) NOT NULL,
  `requestorDepartment` varchar(255) NOT NULL,
  `requestorReason` varchar(255) NOT NULL,
  `numberOfPorts` int(11) NOT NULL,
  `transmissionType` varchar(255) NOT NULL,
  `interfacingType` varchar(255) NOT NULL,
  `completionDate` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `requestTimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  ADD KEY `FK_SpaceRack` (`requestId`);

--
-- Indexes for table `spaceRequests`
--
ALTER TABLE `spaceRequests`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `spaceRequestsNew`
--
ALTER TABLE `spaceRequestsNew`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `spaceRequests_suffix`
--
ALTER TABLE `spaceRequests_suffix`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fdfRequests_suffix`
--
ALTER TABLE `fdfRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalRequests_suffix`
--
ALTER TABLE `generalRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `powerRequests_suffix`
--
ALTER TABLE `powerRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spaceRequestsNew`
--
ALTER TABLE `spaceRequestsNew`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spaceRequests_suffix`
--
ALTER TABLE `spaceRequests_suffix`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ssuRequests_suffix`
--
ALTER TABLE `ssuRequests_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spaceRackRequests`
--
ALTER TABLE `spaceRackRequests`
  ADD CONSTRAINT `FK_SpaceRack` FOREIGN KEY (`requestId`) REFERENCES `spacerequests_suffix` (`requestId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
