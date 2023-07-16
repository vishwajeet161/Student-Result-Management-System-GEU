-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2023 at 08:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student result management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `username`, `emailid`, `password`) VALUES
(1, 'Vishnu', 'vishu11@gmail.com', '12345'),
(2, 'vishu161', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `Eligible_admin`
--

CREATE TABLE `Eligible_admin` (
  `id` int(10) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Eligible_admin`
--

INSERT INTO `Eligible_admin` (`id`, `emailid`) VALUES
(1, 'abc@gmail.com'),
(2, 'admin@gmail.com'),
(3, 'def@gmail.com'),
(4, 'vishu11@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `section` varchar(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `rollno` varchar(25) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `cd` varchar(10) NOT NULL,
  `se` varchar(10) NOT NULL,
  `cn` varchar(10) NOT NULL,
  `webd` varchar(10) NOT NULL,
  `bda` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `section`, `emailid`, `rollno`, `regno`, `cd`, `se`, `cn`, `webd`, `bda`, `total`, `status`) VALUES
(1, 'vishwajeet patel', 'AIDS', 'vishwajeet.patel161@gmail.com', '1', '11', '23', '22', '22', '22', '22', '111', 'Pass'),
(2, 'vishu12', 'B', 'vishwajeet161@gmail.com', '12', '13', '22', '22', '22', '22', '22', '110', 'Fail'),
(3, 'Raj Kapoor', 'AIDS', 'raj11@gmail.com', '1', '14', '22', '22', '22', '22', '22', '110', 'Pass'),
(4, 'ravi', 'D', 'ravi@gmail.com', '11', '15', '25', '25', '25', '25', '25', '125', 'Pass'),
(9, 'vishwajeet patel', 'AIDS', 'def@gamil.com', '23', '23', '23', '23', '23', '23', '23', '115', 'Pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `Eligible_admin`
--
ALTER TABLE `Eligible_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD KEY `section` (`section`,`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Eligible_admin`
--
ALTER TABLE `Eligible_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
