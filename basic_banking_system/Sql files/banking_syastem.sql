-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2024 at 08:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_syastem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(1, 'John Doe', 'john@example.com', '1308.00'),
(2, 'Jane Smith', 'jane@example.com', '850.00'),
(3, 'Alice Johnson', 'alice@example.com', '2272.00'),
(4, 'Bob Williams', 'bob@example.com', '930.00'),
(5, 'Eva Brown', 'eva@example.com', '1830.00'),
(6, 'Michael Davis', 'michael@example.com', '1601.00'),
(7, 'Emma Wilson', 'emma@example.com', '2270.00'),
(8, 'William Taylor', 'william@example.com', '1920.00'),
(9, 'Sophia Anderson', 'sophia@example.com', '1709.00'),
(10, 'James Martinez', 'james@example.com', '2300.00');

-- --------------------------------------------------------

--
-- Table structure for table `Transaction_History`
--

CREATE TABLE `Transaction_History` (
  `Sr_no` int(10) NOT NULL,
  `Transaction ID` bigint(10) NOT NULL,
  `Sender_Name` text NOT NULL,
  `Receiver_Name` text NOT NULL,
  `Amount` int(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Transaction_History`
--

INSERT INTO `Transaction_History` (`Sr_no`, `Transaction ID`, `Sender_Name`, `Receiver_Name`, `Amount`, `Date`) VALUES
(9, 4697450985, 'John Doe', 'Alice Johnson', 2, '2024-05-04 13:40:20'),
(10, 2198439269, 'John Doe', 'Emma Wilson', 50, '2024-05-04 13:40:34'),
(11, 2519865373, 'Jane Smith', 'John Doe', 500, '2024-05-04 15:05:25'),
(12, 8331283051, 'Jane Smith', 'John Doe', 500, '2024-05-04 20:14:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Transaction_History`
--
ALTER TABLE `Transaction_History`
  ADD PRIMARY KEY (`Sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Transaction_History`
--
ALTER TABLE `Transaction_History`
  MODIFY `Sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
