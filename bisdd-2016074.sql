-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisdd-2016074`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `subjectsToTeach` varchar(255) NOT NULL,
  `ratePerHour` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `email`, `phoneNumber`, `qualifications`, `subjectsToTeach`, `ratePerHour`) VALUES
(1, 'Peter Brown', 'peter@onlineacademy.com', '000111', 'BSc Computer Science', 'Programming Databases', 40),
(2, 'John White', 'john@onlineacademy.com', '111222', 'MSc Biology', 'Physics Biology', 70),
(3, 'David Red', 'david@onlineacademy.com', '222333', 'BA Art', 'Design', 50),
(4, 'Sue Black', 'sue@onlineacademy.com', '333444', 'Diploma Biology', 'Nutrition First Aid', 35),
(5, 'Jane Red', 'jane@onlineacademy.com', '444555', 'PhD in Politics', 'History Sociology', 65),
(6, 'Abigail Blue', 'abigail@onlineacademy.com', '555666', 'BSc in Multimedia', 'Design Programming', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
