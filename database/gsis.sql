-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 07:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id_number` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id_number`, `password`, `faculty_name`, `position`, `contact_number`) VALUES
('15100375', '12345', 'Kent Michael Talisaysay', 'Intern', '09664118929');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_number` varchar(50) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `grade_level` int(2) NOT NULL,
  `section` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(150) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_number`, `student_name`, `grade_level`, `section`, `birthdate`, `address`, `religion`, `nationality`) VALUES
('15100374', 'Levie Zebilla', 1, 'Parrot', '2018-12-11', 'Mandaue, City', 'Roman Catholic', 'Filipino');

-- --------------------------------------------------------

--
-- Table structure for table `student_contact_info`
--

CREATE TABLE `student_contact_info` (
  `student_id_number` varchar(255) NOT NULL,
  `telephone_number` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_contact_info`
--

INSERT INTO `student_contact_info` (`student_id_number`, `telephone_number`, `mobile_number`) VALUES
('15100374', '09664118929', '(032) 520-2073');

-- --------------------------------------------------------

--
-- Table structure for table `student_emergency`
--

CREATE TABLE `student_emergency` (
  `student_id_number` varchar(50) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_emergency`
--

INSERT INTO `student_emergency` (`student_id_number`, `guardian_name`, `address`, `contact_number`) VALUES
('15100374', 'Michael M. Talisaysay', 'Liloan, Cebu', '09228221696');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `student_contact_info`
--
ALTER TABLE `student_contact_info`
  ADD PRIMARY KEY (`student_id_number`);

--
-- Indexes for table `student_emergency`
--
ALTER TABLE `student_emergency`
  ADD PRIMARY KEY (`student_id_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_contact_info`
--
ALTER TABLE `student_contact_info`
  ADD CONSTRAINT `student_contact_info_ibfk_1` FOREIGN KEY (`student_id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_emergency`
--
ALTER TABLE `student_emergency`
  ADD CONSTRAINT `student_emergency_ibfk_1` FOREIGN KEY (`student_id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
