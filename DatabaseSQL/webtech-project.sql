-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 06:51 PM
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
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `course_name`, `Credit`, `Teacher_ID`) VALUES
(1236052, 'Telecom', 3, NULL),
(1236053, 'Coding', 3, NULL),
(1236054, 'Database', 3, 90000001),
(1236055, 'Webtech', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coursedate`
--

CREATE TABLE `coursedate` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) DEFAULT NULL,
  `sec` int(11) DEFAULT NULL,
  `date_date` date DEFAULT NULL,
  `daytime_ID` int(11) DEFAULT NULL,
  `active` enum('on','off','wait') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `current_start` time NOT NULL,
  `current_finish` time NOT NULL,
  `duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursedate`
--

INSERT INTO `coursedate` (`ID`, `course_ID`, `sec`, `date_date`, `daytime_ID`, `active`, `current_start`, `current_finish`, `duration`) VALUES
(180001, 1236055, 21, '2018-04-18', 1, 'on', '07:16:58', '06:53:43', '00:00:04'),
(180002, 1236054, 21, '2018-04-18', 2, 'on', '07:09:23', '00:00:00', '00:00:05'),
(180003, 1236052, 21, '2018-04-19', 1, 'off', '07:34:05', '07:34:09', '00:00:04'),
(180004, 1236053, 21, '2018-04-19', 2, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180005, 1236054, 22, '2018-04-18', 1, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180006, 1236052, 22, '2018-04-18', 2, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180007, 1236053, 22, '2018-04-18', 3, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180008, 1236055, 22, '2018-04-19', 1, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180009, 1236055, 21, '2018-04-25', 1, 'on', '07:10:51', '00:00:00', '00:00:00'),
(180010, 1236054, 21, '2018-04-25', 2, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180011, 1236052, 21, '2018-04-26', 1, 'off', '00:00:00', '00:00:00', '00:00:10'),
(180012, 1236053, 21, '2018-04-26', 2, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180013, 1236054, 22, '2018-04-25', 1, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180014, 1236052, 22, '2018-04-25', 2, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180015, 1236053, 22, '2018-04-25', 3, 'off', '00:00:00', '00:00:00', '00:00:00'),
(180016, 1236055, 22, '2018-04-26', 1, 'off', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `datedate`
--

CREATE TABLE `datedate` (
  `ID` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datedate`
--

INSERT INTO `datedate` (`ID`) VALUES
('2018-04-18'),
('2018-04-19'),
('2018-04-25'),
('2018-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `daytime`
--

CREATE TABLE `daytime` (
  `ID` int(11) NOT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daytime`
--

INSERT INTO `daytime` (`ID`, `start`, `finish`) VALUES
(1, '09:00:00', '12:00:00'),
(2, '13:00:00', '16:00:00'),
(3, '17:30:00', '20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Active` int(32) DEFAULT '0',
  `Status` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Username`, `Password`, `Active`, `Status`) VALUES
(59010164, 'kanunsanan', '59010164', 0, 'Student'),
(59010187, 'Jakkapat', '59010187', 0, 'Student'),
(59010203, 'Jirapat', '59010203', 0, 'Student'),
(59010205, 'Jirapat', '59010205', 0, 'Student'),
(59010249, 'Chalermwut', '59010249', 0, 'Student'),
(59010386, 'Naphat', '59010386', 0, 'Student'),
(59010697, 'Nontakon', '59010697', 0, 'Student'),
(59010719, 'Nanthapong', '59010719', 0, 'Student'),
(59010731, 'Namfon', '59010731', 0, 'Student'),
(59010736, 'Nithi', '59010736', 0, 'Student'),
(59010748, 'Niwat', '59010748', 0, 'Student'),
(59010792, 'Papon', '59010792', 0, 'Student'),
(59010940, 'Phattana', '59010940', 0, 'Student'),
(59011201, 'Waritsara', '59011201', 0, 'Student'),
(90000001, 'Teacher', 'teacher', 1, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `corusedate_ID` int(11) DEFAULT NULL,
  `num1` int(3) NOT NULL,
  `active` enum('wait','present','Late','miss') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'wait',
  `student_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sec`
--

CREATE TABLE `sec` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sec`
--

INSERT INTO `sec` (`ID`) VALUES
(21),
(22);

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE `studentcourse` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) DEFAULT NULL,
  `student_ID` int(11) DEFAULT NULL,
  `sec` int(11) DEFAULT NULL,
  `date_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentcourse`
--

INSERT INTO `studentcourse` (`ID`, `course_ID`, `student_ID`, `sec`, `date_date`) VALUES
(7, 1236052, 59010164, 21, '2018-04-19'),
(23, 1236052, 59010164, 21, '2018-04-26'),
(3, 1236052, 59010187, 21, '2018-04-19'),
(19, 1236052, 59010187, 21, '2018-04-26'),
(54, 1236052, 59010203, 21, '2018-04-19'),
(55, 1236052, 59010203, 21, '2018-04-26'),
(62, 1236052, 59010205, 21, '2018-04-19'),
(63, 1236052, 59010205, 21, '2018-04-26'),
(35, 1236052, 59010249, 21, '2018-04-19'),
(36, 1236052, 59010249, 21, '2018-04-26'),
(70, 1236052, 59010386, 21, '2018-04-19'),
(71, 1236052, 59010386, 21, '2018-04-26'),
(78, 1236052, 59010697, 21, '2018-04-19'),
(79, 1236052, 59010697, 21, '2018-04-26'),
(86, 1236052, 59010719, 22, '2018-04-19'),
(87, 1236052, 59010719, 22, '2018-04-26'),
(94, 1236052, 59010731, 22, '2018-04-19'),
(95, 1236052, 59010731, 22, '2018-04-26'),
(102, 1236052, 59010736, 22, '2018-04-19'),
(103, 1236052, 59010736, 22, '2018-04-26'),
(110, 1236052, 59010748, 22, '2018-04-19'),
(111, 1236052, 59010748, 22, '2018-04-26'),
(118, 1236052, 59010792, 22, '2018-04-19'),
(119, 1236052, 59010792, 22, '2018-04-26'),
(10, 1236052, 59010940, 22, '2018-04-18'),
(26, 1236052, 59010940, 22, '2018-04-25'),
(14, 1236052, 59011201, 22, '2018-04-18'),
(30, 1236052, 59011201, 22, '2018-04-25'),
(8, 1236053, 59010164, 21, '2018-04-19'),
(24, 1236053, 59010164, 21, '2018-04-26'),
(4, 1236053, 59010187, 21, '2018-04-19'),
(20, 1236053, 59010187, 21, '2018-04-26'),
(50, 1236053, 59010203, 21, '2018-04-19'),
(51, 1236053, 59010203, 21, '2018-04-26'),
(58, 1236053, 59010205, 21, '2018-04-19'),
(59, 1236053, 59010205, 21, '2018-04-26'),
(33, 1236053, 59010249, 21, '2018-04-19'),
(34, 1236053, 59010249, 21, '2018-04-26'),
(66, 1236053, 59010386, 21, '2018-04-19'),
(67, 1236053, 59010386, 21, '2018-04-26'),
(74, 1236053, 59010697, 21, '2018-04-19'),
(75, 1236053, 59010697, 21, '2018-04-26'),
(82, 1236053, 59010719, 22, '2018-04-19'),
(83, 1236053, 59010719, 22, '2018-04-26'),
(90, 1236053, 59010731, 22, '2018-04-19'),
(91, 1236053, 59010731, 22, '2018-04-26'),
(98, 1236053, 59010736, 22, '2018-04-19'),
(99, 1236053, 59010736, 22, '2018-04-26'),
(106, 1236053, 59010748, 22, '2018-04-19'),
(107, 1236053, 59010748, 22, '2018-04-26'),
(114, 1236053, 59010792, 22, '2018-04-19'),
(115, 1236053, 59010792, 22, '2018-04-26'),
(11, 1236053, 59010940, 22, '2018-04-18'),
(27, 1236053, 59010940, 22, '2018-04-25'),
(15, 1236053, 59011201, 22, '2018-04-18'),
(31, 1236053, 59011201, 22, '2018-04-25'),
(6, 1236054, 59010164, 21, '2018-04-18'),
(22, 1236054, 59010164, 21, '2018-04-25'),
(2, 1236054, 59010187, 21, '2018-04-18'),
(18, 1236054, 59010187, 21, '2018-04-25'),
(52, 1236054, 59010203, 21, '2018-04-18'),
(53, 1236054, 59010203, 21, '2018-04-25'),
(60, 1236054, 59010205, 21, '2018-04-18'),
(61, 1236054, 59010205, 21, '2018-04-25'),
(37, 1236054, 59010249, 21, '2018-04-18'),
(38, 1236054, 59010249, 21, '2018-04-25'),
(68, 1236054, 59010386, 21, '2018-04-18'),
(69, 1236054, 59010386, 21, '2018-04-25'),
(76, 1236054, 59010697, 21, '2018-04-18'),
(77, 1236054, 59010697, 21, '2018-04-25'),
(84, 1236054, 59010719, 22, '2018-04-18'),
(85, 1236054, 59010719, 22, '2018-04-25'),
(92, 1236054, 59010731, 22, '2018-04-18'),
(93, 1236054, 59010731, 22, '2018-04-25'),
(100, 1236054, 59010736, 22, '2018-04-18'),
(101, 1236054, 59010736, 22, '2018-04-25'),
(108, 1236054, 59010748, 22, '2018-04-18'),
(109, 1236054, 59010748, 22, '2018-04-25'),
(116, 1236054, 59010792, 22, '2018-04-18'),
(117, 1236054, 59010792, 22, '2018-04-25'),
(9, 1236054, 59010940, 22, '2018-04-18'),
(25, 1236054, 59010940, 22, '2018-04-25'),
(13, 1236054, 59011201, 22, '2018-04-18'),
(29, 1236054, 59011201, 22, '2018-04-25'),
(5, 1236055, 59010164, 21, '2018-04-18'),
(21, 1236055, 59010164, 21, '2018-04-25'),
(1, 1236055, 59010187, 21, '2018-04-18'),
(17, 1236055, 59010187, 21, '2018-04-25'),
(56, 1236055, 59010203, 21, '2018-04-18'),
(57, 1236055, 59010203, 21, '2018-04-25'),
(64, 1236055, 59010205, 21, '2018-04-18'),
(65, 1236055, 59010205, 21, '2018-04-25'),
(39, 1236055, 59010249, 21, '2018-04-18'),
(40, 1236055, 59010249, 21, '2018-04-25'),
(72, 1236055, 59010386, 21, '2018-04-18'),
(73, 1236055, 59010386, 21, '2018-04-25'),
(80, 1236055, 59010697, 21, '2018-04-18'),
(81, 1236055, 59010697, 21, '2018-04-25'),
(88, 1236055, 59010719, 22, '2018-04-18'),
(89, 1236055, 59010719, 22, '2018-04-25'),
(96, 1236055, 59010731, 22, '2018-04-18'),
(97, 1236055, 59010731, 22, '2018-04-25'),
(104, 1236055, 59010736, 22, '2018-04-18'),
(105, 1236055, 59010736, 22, '2018-04-25'),
(112, 1236055, 59010748, 22, '2018-04-18'),
(113, 1236055, 59010748, 22, '2018-04-25'),
(120, 1236055, 59010792, 22, '2018-04-18'),
(121, 1236055, 59010792, 22, '2018-04-25'),
(12, 1236055, 59010940, 22, '2018-04-19'),
(28, 1236055, 59010940, 22, '2018-04-26'),
(16, 1236055, 59011201, 22, '2018-04-19'),
(32, 1236055, 59011201, 22, '2018-04-26');

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
  `Birthdate` date DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentt`
--

INSERT INTO `studentt` (`ID`, `Fname`, `Lname`, `Faculty`, `Major`, `Birthdate`, `Gender`, `Phone`, `Email`) VALUES
(59010164, 'Kanutsanun ', 'Nithipanich', 'Engineering', 'Information Engineering', '1997-08-28', 'Male', '094-291570', '59010164@kmitl.ac.th'),
(59010187, 'Jakkapat ', 'Booroj', 'Engineering', 'Information Engineering', '1997-01-19', 'Male', '087-702164', '59010187@kmitl.ac.th'),
(59010203, 'Jirapat', 'Sirasri', 'Engineering', 'Information Engineering', '1998-02-15', 'Male', '0999999999', '59010203@kmitl.ac.th'),
(59010205, 'Jirapat', 'Pitaksinakorn', 'Engineering', 'Information Engineering', '1997-07-04', 'Male', '0970767580', '59010205@kmitl.ac.th'),
(59010249, 'Chalermwut', 'Lermwutwarakitti', 'Engineering', 'Information Engineering', '1997-07-13', 'Male', '0814140760', '59010249@kmitl.ac.th'),
(59010386, 'Naphat', 'Pechsrijun', 'Engineering', 'Information Engineering', '1997-10-22', 'Male', '0972345678', '59010386@kmitl.ac.th'),
(59010697, 'Nontakon', 'Cheroencheewakul', 'Engineering', 'Information Engineering', '1997-02-23', 'Male', '0817929125', '59010697@kmitl.ac.th'),
(59010719, 'Nanthapong', 'Silsrikul', 'Engineering', 'Information Engineering', '1998-01-01', 'Male', '0812345678', '59010719@kmitl.ac.th'),
(59010731, 'Namfon', 'Kaminlao', 'Engineering', 'Information Engineering', '1997-09-23', 'Female', '0912345678', '59010731@kmitl.ac.th'),
(59010736, 'Nithi', 'Seamamuang', 'Engineering', 'Information Engineering', '1998-05-05', 'Male', '0987654321', '59010736@kmitl.ac.th'),
(59010748, 'Niwat', 'Jujaroen', 'Engineering', 'Information Engineering', '1997-07-20', 'Male', '0800000000', '59010748@kmitl.ac.th'),
(59010792, 'Papon', 'Prommoon', 'Engineering', 'Information Engineering', '1997-06-30', 'Male', '0888888888', '59010729@kmitl.ac.th'),
(59010940, 'Phattana', 'Wongyuttanapong', 'Engineering', 'Information Engineering', '1998-05-29', 'Male', '092-552419', '59010940@kmitl.ac.th'),
(59011201, 'Waritsara', 'Siriaksorn', 'Engineering', 'Information Engineering', '1997-12-24', 'Female', '081-812324', '59011201@kmitl.ac.th');

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
  `Birthdate` date DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD KEY `course_ID` (`course_ID`,`sec`,`date_date`,`daytime_ID`),
  ADD KEY `sec` (`sec`),
  ADD KEY `daytime_ID` (`daytime_ID`),
  ADD KEY `date_date` (`date_date`);

--
-- Indexes for table `datedate`
--
ALTER TABLE `datedate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `daytime`
--
ALTER TABLE `daytime`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `User_ID_2` (`ID`),
  ADD KEY `User_ID` (`ID`),
  ADD KEY `User_ID_3` (`ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `corusedate_ID` (`corusedate_ID`,`student_ID`),
  ADD KEY `student_ID` (`student_ID`);

--
-- Indexes for table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`,`student_ID`,`sec`,`date_date`),
  ADD KEY `student_ID` (`student_ID`),
  ADD KEY `sec` (`sec`),
  ADD KEY `date_date` (`date_date`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=718;

--
-- AUTO_INCREMENT for table `studentcourse`
--
ALTER TABLE `studentcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

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
  ADD CONSTRAINT `coursedate_ibfk_1` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_3` FOREIGN KEY (`daytime_ID`) REFERENCES `daytime` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_4` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_5` FOREIGN KEY (`date_date`) REFERENCES `datedate` (`ID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`corusedate_ID`) REFERENCES `coursedate` (`ID`);

--
-- Constraints for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD CONSTRAINT `studentcourse_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `studentcourse_ibfk_2` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`),
  ADD CONSTRAINT `studentcourse_ibfk_3` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`),
  ADD CONSTRAINT `studentcourse_ibfk_4` FOREIGN KEY (`date_date`) REFERENCES `datedate` (`ID`);

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
