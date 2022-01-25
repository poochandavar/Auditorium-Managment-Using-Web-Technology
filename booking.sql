-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 04:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `ActivityName` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `NoOfDays` int(255) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Department`, `ActivityName`, `StartDate`, `EndDate`, `NoOfDays`, `StartTime`, `EndTime`) VALUES
(7, 'ME', 'skwkswk', '2022-01-14', '2022-01-27', 13, '14:51:00', '17:51:00'),
(8, 'ME', 'skwkswk', '2022-01-14', '2022-01-27', 13, '14:51:00', '17:51:00'),
(10, 'ME', 'sdsdf', '2022-01-22', '2022-01-28', 6, '14:15:00', '16:15:00'),
(11, 'CIVIL', 'feasta', '2022-01-14', '2022-01-19', 5, '10:23:00', '17:24:00'),
(13, 'ME', 'haha', '2022-01-21', '2022-02-04', 14, '12:39:00', '18:39:00'),
(14, 'ME', 'haha', '2022-01-21', '2022-02-04', 14, '12:39:00', '18:39:00'),
(15, 'CIVIL', 'sabnanb', '2022-01-18', '2022-01-21', 3, '13:45:00', '14:45:00'),
(17, 'ME', 'hilo', '2022-01-21', '2022-01-26', 5, '10:50:00', '15:51:00'),
(18, 'ME', 'real', '2022-01-22', '2022-01-27', 5, '12:41:00', '17:41:00'),
(19, 'CSE', 'kimkim', '2022-01-20', '2022-01-25', 5, '14:47:00', '17:47:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
