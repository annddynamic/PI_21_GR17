-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 01:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime-report-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cID` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `emergency` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cID`, `emri`, `emergency`) VALUES
(1, 'Abuse', 1),
(2, 'Suicide', 1),
(3, 'Murder', 1),
(4, 'Robery', 1),
(5, 'Arson', 1),
(6, 'Break In', 1),
(7, 'Corruption', 1),
(8, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pending_users`
--

CREATE TABLE `pending_users` (
  `uID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `data_lindjes` date NOT NULL,
  `rruga` varchar(255) NOT NULL,
  `qyteti` varchar(255) NOT NULL,
  `shteti` varchar(255) NOT NULL,
  `ZIP` int(11) NOT NULL,
  `nr_telefonit` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `inDuty` tinyint(1) NOT NULL,
  `role_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reID` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `dt_raportimit` date NOT NULL,
  `description` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `uID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reID`, `emri`, `mbiemri`, `dt_raportimit`, `description`, `foto`, `city`, `address`, `sID`, `categoryID`, `uID`) VALUES
(1, 'Arben', 'Dedaj', '2021-04-15', 'Na nuk flejm ktu se ka vompira', '', 'Prishtin', 'Mati1', 1, 8, 1),
(2, 'Andi', 'Dika', '2021-04-04', 'Sen skom pa sen skom ni ', '', 'Prishtin', 'Bregu i diellit', 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_ID` int(11) NOT NULL,
  `role_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_ID`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Police'),
(3, 'Citizen');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `sID` int(11) NOT NULL,
  `gjendja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`sID`, `gjendja`) VALUES
(1, 'Not taken'),
(2, 'Taken'),
(3, 'Finished');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8_unicode_ci NOT NULL,
  `data_lindjes` date NOT NULL,
  `rruga` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qyteti` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shteti` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZIP` int(11) DEFAULT NULL,
  `nr_telefonit` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inDuty` tinyint(4) DEFAULT NULL,
  `role_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `name`, `surname`, `gender`, `data_lindjes`, `rruga`, `qyteti`, `shteti`, `ZIP`, `nr_telefonit`, `email`, `password`, `inDuty`, `role_ID`) VALUES
(1, 'Arben', 'Dedaj', 'male', '2020-10-10', NULL, NULL, NULL, NULL, NULL, 'arbenndedaj@gmail.com', '$2y$10$gGPpp3G9BCHt9RzCpXoWfOz7t5//rrVcUtB35/HZpsAmT0yEAg2tu', NULL, 3),
(2, 'Arben', 'Dedaj', 'male', '2021-04-20', NULL, NULL, NULL, NULL, NULL, 'arbenndedaj@yahoo.com', '$2y$10$LFO/y3NqBR7uYn4l0E6UzeyGhYyofH8i65avxxx2Wf1xZbk70qLbO', NULL, 3),
(3, 'Andi', 'Dika', 'male', '2021-04-08', 'Dikun', NULL, NULL, NULL, NULL, 'andidika@gmail.com', 'asdasdasd', NULL, 2),
(4, 'Arben', 'Dedaj', 'male', '2021-04-15', NULL, NULL, NULL, NULL, NULL, 'arbenndedaj@gasdmail.com', '$2y$10$wL9ESLyaGLh1Ir7s4fTMvOpYKqlIW3GcYqW2wiKZT9jnKHy6GWdxe', NULL, 3),
(5, 'Blerta', 'Hasani', 'female', '2021-04-01', 'Dikun', 'Dikun', 'Kosov', 1000, '123123', 'asd@asd.com', '1234567890', NULL, 2),
(18, 'Arben', 'Dedaj', 'male', '2021-04-22', 'sad', 'asd', 'Kosovo', 30000, '44672155', 'arbenndedaasdasdj@gmail.com', '$2y$10$p.h79JbUrVRVyZdjcWd1p.uG/l8g5zH6DYjpOPmTBIiQd4FIWhFNa', 0, 2),
(19, 'Albiona', 'Vukaj', 'female', '2021-04-07', 'Ulqin city', 'Ulqin', 'Kosovo', 1000, '44123456', 'albionavukaj@gmail.com', '$2y$10$go3zN71mBPMIg8fWbDV3aeLTBD632DdHhccrrl86CxywBJKMdI8I2', 0, 2),
(20, 'Arben', 'Dedaj', 'male', '2021-04-21', 'sad', 'asd', 'Kosovo', 30000, '44672155', 'arbenndedaj@gamail.com', '$2y$10$mDmVWX11AMkSNNSNBBGC4O.fR5sI5yN.mlV77fTXdS6TO80xvX1Om', 0, 2),
(21, 'Arben', 'Dedaj', 'male', '2021-04-22', 'sad', 'asd', 'Kosovo', 30000, '44672155', 'arbenndedaj@yahooo.com', '$2y$10$6QfPZG0yfI1B/5sxjkSltOCzVbk0n6JlB/y9PavyP0.zM0WJoqBpy', 0, 2),
(22, 'Andi', 'Dika', 'male', '2021-04-15', 'asd', 'asd', 'asd', 123, '123123123', 'asdasd@asd.com', 'asdasd', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cID`),
  ADD KEY `emergency` (`emergency`);

--
-- Indexes for table `pending_users`
--
ALTER TABLE `pending_users`
  ADD PRIMARY KEY (`uID`),
  ADD KEY `role_ID` (`role_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reID`),
  ADD KEY `sID` (`sID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `uID` (`uID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`),
  ADD KEY `role_ID` (`role_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `sID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pending_users`
--
ALTER TABLE `pending_users`
  ADD CONSTRAINT `pending_users_ibfk_1` FOREIGN KEY (`role_ID`) REFERENCES `roles` (`role_ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `status` (`sID`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`cID`),
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`uID`) REFERENCES `users` (`uID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_ID`) REFERENCES `roles` (`role_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
