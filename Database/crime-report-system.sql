-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 07:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
  `inDuty` tinyint(4) DEFAULT NULL,
  `role_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_ID`);

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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_ID`) REFERENCES `roles` (`role_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
