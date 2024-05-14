-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2024 at 12:29 PM
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
-- Database: `PaymentDetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `txtDetails`
--

CREATE TABLE `txtDetails` (
  `Sr.no` int(11) NOT NULL,
  `amount` text NOT NULL,
  `payment_id` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txtDetails`
--

INSERT INTO `txtDetails` (`Sr.no`, `amount`, `payment_id`, `added_date`) VALUES
(1, '10', '5655ggc', '2024-05-14 10:35:51'),
(2, '', '', '2024-05-14 11:03:45'),
(3, '', '', '2024-05-14 11:03:51'),
(4, '1000', 'pay_OALoHL2ZYW5MJ8', '2024-05-14 11:05:06'),
(5, '', '', '2024-05-14 11:10:24'),
(6, '', '', '2024-05-14 11:20:18'),
(7, '', '', '2024-05-14 11:35:05'),
(8, '', '', '2024-05-14 11:39:09'),
(9, '1000', 'pay_OAMQCqKeN030lx', '2024-05-14 11:41:08'),
(10, '', '', '2024-05-14 11:42:09'),
(11, '1000', 'pay_OAMSJ3hN6A0jEr', '2024-05-14 11:42:56'),
(12, '1000', 'pay_OAMTrRzaTPqMnF', '2024-05-14 11:44:40'),
(13, '', '', '2024-05-14 11:46:10'),
(14, '', '', '2024-05-14 11:48:36'),
(15, '1000', 'pay_OAMZXeZNIJInWK', '2024-05-14 11:50:08'),
(16, '', '', '2024-05-14 11:52:13'),
(17, '', '', '2024-05-14 11:53:08'),
(18, '', '', '2024-05-14 11:53:28'),
(19, '1000', 'pay_OAMgmPZRjhwnDe', '2024-05-14 11:56:36'),
(20, '0', '', '2024-05-14 11:59:44'),
(21, '100000', 'pay_OAMkm3ZOLaSViA', '2024-05-14 12:00:23'),
(22, '10', 'pay_OAMm949xBhUjfH', '2024-05-14 12:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `txtDetails`
--
ALTER TABLE `txtDetails`
  ADD PRIMARY KEY (`Sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `txtDetails`
--
ALTER TABLE `txtDetails`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
