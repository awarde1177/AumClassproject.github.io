-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 07:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `srno` int(11) NOT NULL,
  `c_id` varchar(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_semester` int(5) NOT NULL,
  `c_instructor` varchar(50) NOT NULL,
  `c_classroom` varchar(10) NOT NULL,
  `c_time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`srno`, `c_id`, `c_name`, `c_semester`, `c_instructor`, `c_classroom`, `c_time`) VALUES
(2, 'd151515', 'Data Structure', 1, 'Ashraf Alattar', 'd135', '1pm-3pm'),
(3, 'o131313', 'Operating System', 2, 'Hua Yan', 'o181818', '3pm-5pm'),
(4, 'a565656', 'Algorithm Design & Analysis', 3, 'Ashraf Alattar', 'g565', '1pm-3pm'),
(5, 'd363636', 'Advance Database', 4, 'Zhimin Gao', 'd125', '5pm-7pm'),
(6, 'b121212', 'Backend Web Development', 3, 'Zhimin Gao', 'b121', '9am-11am');

-- --------------------------------------------------------

--
-- Table structure for table `stucourse`
--

CREATE TABLE `stucourse` (
  `data_no` int(11) NOT NULL,
  `stu_id` varchar(50) NOT NULL,
  `sco_id` varchar(50) NOT NULL,
  `sco_name` varchar(50) NOT NULL,
  `sco_sem` int(10) NOT NULL,
  `sco_instructor` varchar(50) NOT NULL,
  `sco_classroom` varchar(50) NOT NULL,
  `sco_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stucourse`
--

INSERT INTO `stucourse` (`data_no`, `stu_id`, `sco_id`, `sco_name`, `sco_sem`, `sco_instructor`, `sco_classroom`, `sco_time`) VALUES
(7, 'jhon123', 'd151515', 'Data Structure', 1, 'Ashraf Alattar', 'd135', '1pm-3pm'),
(9, 'jhon123', 'a565656', 'Algorithm Design & Analysis', 3, 'Ashraf Alattar', 'g565', '1pm-3pm'),
(12, 'test123', 'd151515', 'Data Structure', 1, 'Ashraf Alattar', 'd135', '1pm-3pm'),
(13, 'test123', 'a565656', 'Algorithm Design & Analysis', 3, 'Ashraf Alattar', 'g565', '1pm-3pm');

-- --------------------------------------------------------

--
-- Table structure for table `stu_info`
--

CREATE TABLE `stu_info` (
  `sr` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `sgender` varchar(10) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `spassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_info`
--

INSERT INTO `stu_info` (`sr`, `firstname`, `lastname`, `sgender`, `sid`, `semail`, `spassword`) VALUES
(11, 'jhon', 'cena', 'male', 'jhon123', 'jhon@aum.edi', '12345'),
(12, 'test', 'test', 'female', 'test123', 'test@aum.edi', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `stucourse`
--
ALTER TABLE `stucourse`
  ADD PRIMARY KEY (`data_no`);

--
-- Indexes for table `stu_info`
--
ALTER TABLE `stu_info`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stucourse`
--
ALTER TABLE `stucourse`
  MODIFY `data_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stu_info`
--
ALTER TABLE `stu_info`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
