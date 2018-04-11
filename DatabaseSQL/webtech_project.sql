-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 08:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `course_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Credit` smallint(6) DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `course`:
--   `Teacher_ID`
--       `teachert` -> `ID`
--

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `course_name`, `Credit`, `Teacher_ID`) VALUES
(1236052, 'Telecom', 3, NULL),
(1236053, 'Coding', 3, NULL),
(1236054, 'Database', 3, NULL),
(1236055, 'Webtech', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coursedate`
--

CREATE TABLE `coursedate` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) DEFAULT NULL,
  `Sec` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL,
  `Course_Time` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `coursedate`:
--   `course_ID`
--       `course` -> `ID`
--

--
-- Dumping data for table `coursedate`
--

INSERT INTO `coursedate` (`ID`, `course_ID`, `Sec`, `date`, `start`, `finish`, `Course_Time`) VALUES
(180001, 1236055, 21, '2018-04-18 00:00:00', '09:30:00', '12:00:00', '00:00:02'),
(180002, 1236054, 21, '2018-04-18 00:00:00', '13:00:00', '16:00:00', NULL),
(180003, 1236052, 21, '2018-04-19 00:00:00', '09:00:00', '12:00:00', NULL),
(180004, 1236053, 21, '2018-04-19 00:00:00', '13:00:00', '16:00:00', NULL),
(180005, 1236055, 21, '2018-04-25 00:00:00', '09:30:00', '12:00:00', NULL),
(180006, 1236054, 21, '2018-04-25 00:00:00', '13:00:00', '16:00:00', NULL),
(180007, 1236052, 21, '2018-04-26 00:00:00', '09:00:00', '12:00:00', NULL),
(180008, 1236053, 21, '2018-04-26 00:00:00', '13:00:00', '16:00:00', NULL),
(180009, 1236054, 22, '2018-04-18 00:00:00', '09:00:00', '12:00:00', NULL),
(180010, 1236052, 22, '2018-04-18 00:00:00', '13:00:00', '16:00:00', NULL),
(180011, 1236053, 22, '2018-04-18 00:00:00', '17:30:00', '20:30:00', NULL),
(180012, 1236055, 22, '2018-04-19 00:00:00', '09:30:00', '12:00:00', NULL),
(180013, 1236054, 22, '2018-04-25 00:00:00', '09:00:00', '12:00:00', NULL),
(180014, 1236052, 22, '2018-04-25 00:00:00', '13:00:00', '16:00:00', NULL),
(180015, 1236053, 22, '2018-04-25 00:00:00', '17:30:00', '20:30:00', NULL),
(180016, 1236055, 22, '2018-04-26 00:00:00', '09:30:00', '12:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Active` int(32) DEFAULT NULL,
  `Status` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `member`:
--

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Username`, `Password`, `Active`, `Status`) VALUES
(59010164, 'kanunsanan', '59010164', 0, 'Student'),
(59010187, 'Jakkapat', '59010187', 1, 'Student'),
(59010940, 'Phattana', '59010940', 0, 'Student'),
(59011201, 'Waritsara', '59011201', 0, 'Student'),
(90000001, 'Teacher', 'teacher', 0, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE `studentcourse` (
  `ID` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `course_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `studentcourse`:
--   `Student_ID`
--       `studentt` -> `ID`
--   `course_ID`
--       `course` -> `ID`
--

--
-- Dumping data for table `studentcourse`
--

INSERT INTO `studentcourse` (`ID`, `Student_ID`, `course_ID`) VALUES
(7, 59010164, 1236052),
(8, 59010164, 1236053),
(6, 59010164, 1236054),
(5, 59010164, 1236055),
(3, 59010187, 1236052),
(4, 59010187, 1236053),
(2, 59010187, 1236054),
(1, 59010187, 1236055),
(11, 59010940, 1236052),
(12, 59010940, 1236053),
(10, 59010940, 1236054),
(9, 59010940, 1236055),
(15, 59011201, 1236052),
(16, 59011201, 1236053),
(14, 59011201, 1236054),
(13, 59011201, 1236055);

-- --------------------------------------------------------

--
-- Table structure for table `studentt`
--

CREATE TABLE `studentt` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Major` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthdate` datetime DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `studentt`:
--   `ID`
--       `member` -> `ID`
--

--
-- Dumping data for table `studentt`
--

INSERT INTO `studentt` (`ID`, `Fname`, `Lname`, `Faculty`, `Major`, `Birthdate`, `Gender`, `Phone`, `Email`) VALUES
(59010164, 'Kanutsanun ', 'Nithipanich', 'Engineeing', 'Information Engineeing', '1997-08-28 00:00:00', 'Male', '094-291570', '59010164@kmitl.ac.th'),
(59010187, 'Jakkapat ', 'Booroj', 'Engineeing', 'Information Engineeing', '1997-01-19 00:00:00', 'Male', '087-702164', '59010187@kmitl.ac.th'),
(59010940, 'Phattana', 'Wongyuttanapong', 'Engineeing', 'Information Engineeing', '1998-05-29 00:00:00', 'Male', '092-552419', '59010940@kmitl.ac.th'),
(59011201, 'Waritsara', 'Siriaksorn', 'Engineeing', 'Information Engineeing', '1997-12-24 00:00:00', 'Female', '081-812324', '59011201@kmitl.ac.th');

-- --------------------------------------------------------

--
-- Table structure for table `teachert`
--

CREATE TABLE `teachert` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Major` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthdate` datetime DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `teachert`:
--   `ID`
--       `member` -> `ID`
--

--
-- Dumping data for table `teachert`
--

INSERT INTO `teachert` (`ID`, `Fname`, `Lname`, `Faculty`, `Major`, `Birthdate`, `Gender`, `Phone`, `Email`) VALUES
(90000001, 'sutheera', ' puntheeranurak', 'Engineeing', 'information Engineeing', NULL, 'Female', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `coursedate`
--
ALTER TABLE `coursedate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `User_ID_2` (`ID`),
  ADD KEY `User_ID` (`ID`),
  ADD KEY `User_ID_3` (`ID`);

--
-- Indexes for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Student_ID` (`Student_ID`,`course_ID`),
  ADD KEY `course_ID` (`course_ID`);

--
-- Indexes for table `studentt`
--
ALTER TABLE `studentt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachert`
--
ALTER TABLE `teachert`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teachert` (`ID`);

--
-- Constraints for table `coursedate`
--
ALTER TABLE `coursedate`
  ADD CONSTRAINT `coursedate_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`);

--
-- Constraints for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD CONSTRAINT `studentcourse_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `studentcourse_ibfk_2` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`);

--
-- Constraints for table `studentt`
--
ALTER TABLE `studentt`
  ADD CONSTRAINT `studentt_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Constraints for table `teachert`
--
ALTER TABLE `teachert`
  ADD CONSTRAINT `teachert_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
