-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:48 PM
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
-- Database: `jakapatb_59010187`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursedatet`
--

CREATE TABLE `coursedatet` (
  `CourseDate_ID` int(11) NOT NULL,
  `CourseDate` datetime DEFAULT NULL,
  `Courses_ID` int(11) DEFAULT NULL,
  `CourseStart` datetime DEFAULT NULL,
  `CourseFinish` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursedatet`
--

INSERT INTO `coursedatet` (`CourseDate_ID`, `CourseDate`, `Courses_ID`, `CourseStart`, `CourseFinish`) VALUES
(1, '2018-04-18 00:00:00', 1, '1899-12-30 09:30:00', '1899-12-30 12:00:00'),
(2, '2018-04-18 00:00:00', 2, '1899-12-30 13:00:00', '1899-12-30 16:00:00'),
(5, '2018-04-19 00:00:00', 1, '1899-12-30 09:30:00', '1899-12-30 12:00:00'),
(6, '2018-04-19 00:00:00', 2, '1899-12-30 13:00:00', '1899-12-30 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courset`
--

CREATE TABLE `courset` (
  `Courses_ID` int(11) NOT NULL,
  `CourseName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courset`
--

INSERT INTO `courset` (`Courses_ID`, `CourseName`, `Teacher_ID`) VALUES
(1, 'Database', 1),
(2, 'Webtech', 2),
(3, 'Telecom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  `Status` enum('ADMIN','USER') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Username`, `Password`, `Active`, `Status`) VALUES
(1, 'admin', 'admin', 0, 'ADMIN'),
(2, 'user', 'user', 0, 'USER'),
(3, '59010164', '0942915705', 0, 'USER'),
(4, 'teacher', 'teacher', 0, 'ADMIN'),
(5, 'teacher2', 'teacher2', 0, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourset`
--

CREATE TABLE `studentcourset` (
  `StudentCourse_ID` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `Courses_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentcourset`
--

INSERT INTO `studentcourset` (`StudentCourse_ID`, `Student_ID`, `Courses_ID`) VALUES
(1, 1, 1),
(4, 1, 2),
(5, 1, 3),
(2, 2, 2),
(6, 2, 2),
(7, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentdatet`
--

CREATE TABLE `studentdatet` (
  `StudentDate_ID` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `CourseDate_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentdatet`
--

INSERT INTO `studentdatet` (`StudentDate_ID`, `Student_ID`, `CourseDate_ID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 5),
(4, 1, 6),
(5, 2, 1),
(7, 2, 2),
(8, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `studentt`
--

CREATE TABLE `studentt` (
  `Student_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateofBirth` datetime DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Course` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentt`
--

INSERT INTO `studentt` (`Student_ID`, `User_ID`, `FirstName`, `LastName`, `DateofBirth`, `Email`, `Gender`, `Mobile`, `Course`) VALUES
(1, 2, 'Jakapat', 'Boonroj', '1997-01-19 00:00:00', '59010187@kmitl.ac.th', 'Male', '0877021640', NULL),
(2, 3, 'Kanutsanun', 'Nithipanich', '1997-08-29 00:00:00', '59010164@kmitl.ac.th', 'Male', '0942915705', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachert`
--

CREATE TABLE `teachert` (
  `Teacher_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `First Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Last Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateofBirth` datetime DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachert`
--

INSERT INTO `teachert` (`Teacher_ID`, `User_ID`, `First Name`, `Last Name`, `DateofBirth`, `Email`, `Gender`, `Mobile`) VALUES
(1, 1, 'kaew', 'kaew', '1997-01-19 00:00:00', 'test@test.com', 'Male', '099999999'),
(2, 4, 'Jakapat', 'Boonroj', '1997-01-19 00:00:00', 'max.jakkapat@gmail.com', 'male', '0877021640');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursedatet`
--
ALTER TABLE `coursedatet`
  ADD PRIMARY KEY (`CourseDate_ID`),
  ADD KEY `Courses_ID` (`Courses_ID`);

--
-- Indexes for table `courset`
--
ALTER TABLE `courset`
  ADD PRIMARY KEY (`Courses_ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentcourset`
--
ALTER TABLE `studentcourset`
  ADD PRIMARY KEY (`StudentCourse_ID`),
  ADD KEY `Student_ID` (`Student_ID`,`Courses_ID`),
  ADD KEY `Courses_ID` (`Courses_ID`);

--
-- Indexes for table `studentdatet`
--
ALTER TABLE `studentdatet`
  ADD PRIMARY KEY (`StudentDate_ID`),
  ADD UNIQUE KEY `Student_ID` (`Student_ID`,`CourseDate_ID`),
  ADD KEY `Student_ID_2` (`Student_ID`,`CourseDate_ID`),
  ADD KEY `CourseDate_ID` (`CourseDate_ID`);

--
-- Indexes for table `studentt`
--
ALTER TABLE `studentt`
  ADD PRIMARY KEY (`Student_ID`),
  ADD UNIQUE KEY `User_ID_2` (`User_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `teachert`
--
ALTER TABLE `teachert`
  ADD PRIMARY KEY (`Teacher_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursedatet`
--
ALTER TABLE `coursedatet`
  ADD CONSTRAINT `coursedatet_ibfk_1` FOREIGN KEY (`Courses_ID`) REFERENCES `courset` (`Courses_ID`);

--
-- Constraints for table `courset`
--
ALTER TABLE `courset`
  ADD CONSTRAINT `courset_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teachert` (`Teacher_ID`);

--
-- Constraints for table `studentcourset`
--
ALTER TABLE `studentcourset`
  ADD CONSTRAINT `studentcourset_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `studentt` (`Student_ID`),
  ADD CONSTRAINT `studentcourset_ibfk_2` FOREIGN KEY (`Courses_ID`) REFERENCES `courset` (`Courses_ID`);

--
-- Constraints for table `studentdatet`
--
ALTER TABLE `studentdatet`
  ADD CONSTRAINT `studentdatet_ibfk_1` FOREIGN KEY (`CourseDate_ID`) REFERENCES `coursedatet` (`CourseDate_ID`);

--
-- Constraints for table `studentt`
--
ALTER TABLE `studentt`
  ADD CONSTRAINT `studentt_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `member` (`ID`),
  ADD CONSTRAINT `studentt_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `studentdatet` (`Student_ID`);

--
-- Constraints for table `teachert`
--
ALTER TABLE `teachert`
  ADD CONSTRAINT `teachert_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `member` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
