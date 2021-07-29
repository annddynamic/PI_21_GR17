-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 11:27 PM
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `mesazhi` longtext NOT NULL,
  `dt_feedback` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fID`, `name`, `subject`, `mesazhi`, `dt_feedback`) VALUES
(1, 'Arianit', 'Kompliment', 'deshiroj qe tju falinderoj per punen qe beni ju, vetem vazdhoni keshtu, jeni me te miret', '2021-05-21'),
(2, 'lorem', 'lorem', 'loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem', '2021-05-21'),
(3, 'lorem', 'lorem', 'loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nID` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `published` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nID`, `foto`, `title`, `published`, `description`) VALUES
(1, '../Assets/DB-IMGS/w0xVP03CQ/mm.jpg', 'Murder Mom', '2021-05-21', 'A mom was out and about when she was surprised to find out police had visited her home. The reason why was because she had a Halloween decoration wrapped up and three people reported it as a dead body!'),
(2, '../Assets/DB-IMGS/hkfoqxDF9/fff.jpg', 'Suspect shot by Porterville officer after attempted break-in', '2021-05-21', 'The Telegraph One of the Queen&#39;s two new puppies, given to her while the Duke of Edinburgh was in hospital, has reportedly died. Fergus, a young corgi puppy, was one of the pair given to the Queen after Prince Philip fell ill in February. She was appa'),
(3, '../Assets/DB-IMGS/7aKaQjH0i/policia.jpg', 'Woman Robbed New Rochelle Bank: Police', '2021-05-21', 'The robbery occurred at the Chase Bank on North Avenue just before 10 a.m. Thursday. (Jeff Edwards)NEW ROCHELLE, NY — Cops responding to a bank robbery in progress call discovered the suspect still on the scene when they arrived. The robbery at the Chase '),
(4, '../Assets/DB-IMGS/JhDg5jBgV/flaka2.jpg', 'Cal Fire arrested 44 arson suspects during first 4 months of 2021', '2021-05-21', 'Cal Fire said that they have arrested 44 people suspected of arson in the first four months of 2021. In a tweet Thursday, Cal Fire said that the number of arson arrests averages out to one arrest every three days. According to a graphic, the arrests are a');

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

--
-- Dumping data for table `pending_users`
--

INSERT INTO `pending_users` (`uID`, `name`, `surname`, `gender`, `data_lindjes`, `rruga`, `qyteti`, `shteti`, `ZIP`, `nr_telefonit`, `email`, `password`, `inDuty`, `role_ID`) VALUES
(2, 'Faton', 'Gashi', 'male', '2001-02-09', 'rruga e Ferizajit', 'Ferizaj', 'Kosovo', 70000, 44222333, 'fatongashi@gmail.com', '$2y$10$vdo9Y/eKBj/l4w8eGW6F8.yo9cauwkFsUACKLTd9x9yuAucxW/8yi', 0, 2),
(4, 'Edona', 'Latifi', 'female', '1998-12-12', 'Faik Konica', 'Prishtin', 'Kosovo', 10000, 44555666, 'edonalatifi@gmail.com', '$2y$10$FI7xtxr3KqIRSOYJfRg3ZOCFzRJux5EnkT4/jfQaKKd9unTEFqzoK', 0, 2);

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
  `foto` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `Emergency` tinyint(1) NOT NULL,
  `uID` int(11) DEFAULT NULL,
  `citizenID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reID`, `emri`, `mbiemri`, `dt_raportimit`, `description`, `foto`, `city`, `address`, `sID`, `categoryID`, `Emergency`, `uID`, `citizenID`) VALUES
(1, 'Vigan', 'Berisha', '2021-05-21', 'Pershendetje, une sapo pash nje vjedhje qe ndodhi ketu afer meje ne qendren tregtare, ju lutem eja sa me shpejt se mundeni', '../Assets/DB-IMGS/iqogDJbup/vjedhje.jpg', 'Prishtine', 'Bregu i Diellit', 2, 4, 1, 11, NULL),
(2, 'Blend', 'Musliu', '2021-05-21', 'Sapo pash qe ka ndodhur nje thyrje ne banken NLB tek rruga B ju lutem shiqoni kete rast', '../Assets/DB-IMGS/pf6MjHJg8/banka.jpg', 'Prishtine', 'Rruga B', 3, 6, 1, 11, NULL),
(3, 'Valdete', 'Islami', '2021-05-21', 'Sapo pash qe nje person i vuri plake nje koneineri afer baneses time ne dardani.', '../Assets/DB-IMGS/NePVe2PxJ/flak.png', 'Prishtine', 'Dardani', 1, 5, 1, NULL, NULL),
(4, 'lorem', 'lorem', '2021-05-21', 'loremloremloremloremloremloremloremloremloremloremloremlorem', '../Assets/DB-IMGS/g5GXDIuey/testt.png', 'lorem', 'lorem', 1, 8, 1, NULL, NULL),
(5, 'lorem', 'lorem', '2021-05-21', 'loremloremloremloremloremloremlorem', '../Assets/DB-IMGS/65x3kf2Ci/testt.png', 'lorem', 'lorem', 1, 7, 1, NULL, NULL),
(6, 'lorem', 'lorem', '2021-05-21', 'loremloremloremloremloremlorem', '../Assets/DB-IMGS/fApC0cvlb/testt.png', 'lorem', 'lorem', 1, 1, 1, NULL, NULL);

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
(1, 'Andi', 'Dika', 'male', '2001-08-11', 'Bregu i diellit', 'Prishtine', 'Kosov', 10000, '044810106', 'admin@gmail.com', '$2y$10$DZGKR1ld35BG2bnD4ULVieYMmdjOG7N0U2yvFE2vmVu1xj/7l8aAG', 1, 1),
(2, 'Arben', 'Dedaj', 'male', '2001-06-15', 'Adem Deda', 'Peje', 'Kosov', 30000, '044672155', 'arben.dedaj1@student.uni-pr.edu', '$2y$10$n3UiKr7uvGukU.uNARd0uecO75gm9Y2KYSc3af1bIxn6f.4Rus82m', 1, 1),
(3, 'Adnit', 'Gashi', 'male', '2001-08-21', 'Matiqan', 'Prishtine', 'Kosov', 10000, '044340907', 'adnit.gashi@student.uni-pr.edu', '$2y$10$cM9kyu1fQYEzQByVuFop5u82llFSTKgXunn9FLicFf9fZHnnM4Acm', 1, 1),
(4, 'Albiona', 'Vukaj', 'female', '2000-10-24', 'Ulqin City', 'Ulqin', 'Mali i zi', 30000, '044510970', 'albiona.vukaj@student.uni-pr.edu', '$2y$10$spMCfkIkSAIEQVpv4JtEFeIL50r3I8iilygM1SI9BLUUc6qPR5qXy', 1, 1),
(5, 'Edon', 'Berisha', 'male', '1999-01-13', 'rruga e gjilanit', 'Gjilan', 'Kosovo', 60000, '44111222', 'edonberisha@gmail.com', '$2y$10$y/NZfMHrFptxlkmVuk4nmOUEy7AkMHvD2Bt5g1sB47aFMvV3WHsNm', 0, 2),
(6, 'Festina', 'Nikqi', 'female', '2002-02-12', 'Rruga e pejes', 'Peja', 'Kosovo', 30000, '49333444', 'festinanikqi@gmail.com', '$2y$10$a4t/t3WwLG5gjnG/KTLE8ONA.nrWmV2.bLQAE/TBDzaeKJC8drC3y', 0, 2),
(7, 'Nentor', 'Kelmendi', 'male', '2003-04-04', NULL, NULL, NULL, NULL, NULL, 'nentorkelmendi@gmail.com', '$2y$10$PQhyqbQ2/LzeO4lFwh8K3uzj8zvL4upMn4q0cAimGpl//xb3mUkyG', NULL, 3),
(8, 'Flaka', 'Kuqi', 'female', '2000-03-12', NULL, NULL, NULL, NULL, NULL, 'flakakuqi@gmail.com', '$2y$10$dIzsHBEdI.G4xSxK0HFbEOm0PRj/fqgwK7gQqHFi1aLum//VOS1Am', NULL, 3),
(9, 'Erona', 'Krasniqi', 'female', '1998-02-06', NULL, NULL, NULL, NULL, NULL, 'eronakrasniqi@gmail.com', '$2y$10$X74Ee/4.jB9m7o/OViOogO83wK.4yC97y94.bTfjvgelvCWFTm5O6', NULL, 3),
(10, 'Altin', 'Lajqi', 'male', '2002-12-07', NULL, NULL, NULL, NULL, NULL, 'altinlajqi@gmail.com', '$2y$10$9VLhvUPbqJWKiuGqBDKGNOGVfa7yQeFialhpig6NHYdgF0LArAHoq', NULL, 3),
(11, 'Betim', 'Mustafa', 'male', '2001-11-11', 'Rruga e pejes', 'Peja', 'Kosovo', 30000, '44111223', 'betim.mustafa@gmail.com', '$2y$10$O4Q.kG0u2aFY1FukrS9m3ejAo6fJdPzsMRKOw4aSHmxQeFlMyn5eq', 0, 2);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nID`);

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
  ADD KEY `uID` (`uID`),
  ADD KEY `report_ibfk_1` (`citizenID`);

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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`citizenID`) REFERENCES `users` (`uID`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_ID`) REFERENCES `roles` (`role_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
