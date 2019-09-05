-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 12:42 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable_staff_subject`
--

CREATE TABLE `timetable_staff_subject` (
  `tid` varchar(50) NOT NULL,
  `staff_name` varchar(50) DEFAULT NULL,
  `subject_name` varchar(50) DEFAULT NULL,
  `day` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable_staff_subject`
--

INSERT INTO `timetable_staff_subject` (`tid`, `staff_name`, `subject_name`, `day`, `start_time`, `end_time`) VALUES
('h7', '', '', 1, 8, 9),
('h7', '', '', 1, 9, 10),
('h7', '', '', 1, 10, 11),
('h7', '', '', 1, 11, 12),
('h7', '', '', 1, 12, 13),
('h7', '', '', 1, 13, 14),
('h7', '', '', 1, 14, 15),
('h7', '', '', 1, 15, 16),
('h7', 'q', '', 1, 16, 17),
('h7', '', '', 2, 8, 9),
('h7', '', '', 2, 9, 10),
('h7', '', '', 2, 10, 11),
('h7', '', '', 2, 11, 12),
('h7', '', '', 2, 12, 13),
('h7', '', '', 2, 13, 14),
('h7', '', '', 2, 14, 15),
('h7', '', '', 2, 15, 16),
('h7', '', '', 2, 16, 17),
('h7', '', '', 3, 8, 9),
('h7', '', '', 3, 9, 10),
('h7', '', '', 3, 10, 11),
('h7', '', '', 3, 11, 12),
('h7', '', '', 3, 12, 13),
('h7', '', '', 3, 13, 14),
('h7', '', '', 3, 14, 15),
('h7', '', '', 3, 15, 16),
('h7', '', '', 3, 16, 17),
('h7', '', '', 4, 8, 9),
('h7', '', '', 4, 9, 10),
('h7', '', '', 4, 10, 11),
('h7', '', '', 4, 11, 12),
('h7', '', '', 4, 12, 13),
('h7', '', '', 4, 13, 14),
('h7', '', '', 4, 14, 15),
('h7', '', '', 4, 15, 16),
('h7', '', '', 4, 16, 17),
('h7', '', '', 5, 8, 9),
('h7', '', '', 5, 9, 10),
('h7', '', '', 5, 10, 11),
('h7', '', '', 5, 11, 12),
('h7', '', '', 5, 12, 13),
('h7', '', '', 5, 13, 14),
('h7', '', '', 5, 14, 15),
('h7', '', '', 5, 15, 16),
('h7', '', '', 5, 16, 17),
('h7', '', '', 6, 8, 9),
('h7', '', '', 6, 9, 10),
('h7', '', '', 6, 10, 11),
('h7', '', '', 6, 11, 12),
('h7', '', '', 6, 12, 13),
('h7', '', '', 6, 13, 14),
('h7', '', '', 6, 14, 15),
('h7', '', '', 6, 15, 16),
('h7', '', '', 6, 16, 17),
('h7', '', '', 7, 8, 9),
('h7', '', '', 7, 9, 10),
('h7', '', '', 7, 10, 11),
('h7', '', '', 7, 11, 12),
('h7', '', '', 7, 12, 13),
('h7', '', '', 7, 13, 14),
('h7', '', '', 7, 14, 15),
('h7', '', '', 7, 15, 16),
('h7', '', '', 7, 16, 17),
('jj', 'a', '', 1, 8, 9),
('jj', '', '', 1, 9, 10),
('jj', '', '', 1, 10, 11),
('jj', '', '', 1, 11, 12),
('jj', '', '', 1, 12, 13),
('jj', '', '', 1, 13, 14),
('jj', '', '', 1, 14, 15),
('jj', '', '', 1, 15, 16),
('jj', '', '', 1, 16, 17),
('jj', 'a', '', 2, 8, 9),
('jj', '', '', 2, 9, 10),
('jj', '', '', 2, 10, 11),
('jj', '', '', 2, 11, 12),
('jj', '', '', 2, 12, 13),
('jj', '', '', 2, 13, 14),
('jj', '', '', 2, 14, 15),
('jj', '', '', 2, 15, 16),
('jj', '', '', 2, 16, 17),
('jj', '', '', 3, 8, 9),
('jj', '', '', 3, 9, 10),
('jj', '', '', 3, 10, 11),
('jj', '', '', 3, 11, 12),
('jj', '', '', 3, 12, 13),
('jj', '', '', 3, 13, 14),
('jj', '', '', 3, 14, 15),
('jj', '', '', 3, 15, 16),
('jj', '', '', 3, 16, 17),
('jj', '', '', 4, 8, 9),
('jj', '', '', 4, 9, 10),
('jj', '', '', 4, 10, 11),
('jj', '', '', 4, 11, 12),
('jj', '', '', 4, 12, 13),
('jj', '', '', 4, 13, 14),
('jj', '', '', 4, 14, 15),
('jj', '', '', 4, 15, 16),
('jj', '', '', 4, 16, 17),
('jj', '', '', 5, 8, 9),
('jj', '', '', 5, 9, 10),
('jj', '', '', 5, 10, 11),
('jj', '', '', 5, 11, 12),
('jj', '', '', 5, 12, 13),
('jj', '', '', 5, 13, 14),
('jj', '', '', 5, 14, 15),
('jj', '', '', 5, 15, 16),
('jj', '', '', 5, 16, 17),
('jj', '', '', 6, 8, 9),
('jj', '', '', 6, 9, 10),
('jj', '', '', 6, 10, 11),
('jj', '', '', 6, 11, 12),
('jj', '', '', 6, 12, 13),
('jj', '', '', 6, 13, 14),
('jj', '', '', 6, 14, 15),
('jj', '', '', 6, 15, 16),
('jj', '', '', 6, 16, 17),
('jj', '', '', 7, 8, 9),
('jj', '', '', 7, 9, 10),
('jj', '', '', 7, 10, 11),
('jj', '', '', 7, 11, 12),
('jj', '', '', 7, 12, 13),
('jj', '', '', 7, 13, 14),
('jj', '', '', 7, 14, 15),
('jj', '', '', 7, 15, 16),
('jj', '', '', 7, 16, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timetable_staff_subject`
--
ALTER TABLE `timetable_staff_subject`
  ADD PRIMARY KEY (`tid`,`day`,`start_time`,`end_time`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `timetable_staff_subject`
--
ALTER TABLE `timetable_staff_subject`
  ADD CONSTRAINT `fk_timetable` FOREIGN KEY (`tid`) REFERENCES `timetable` (`timetable_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
