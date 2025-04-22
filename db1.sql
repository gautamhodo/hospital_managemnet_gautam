-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 12:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `bill_name` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `patient_id`, `bill_name`, `amount`, `date_added`) VALUES
(2, '3', 'akhil rs', 1500, '0000-00-00'),
(3, '4', 'Gautam S', 300, '0000-00-00'),
(4, '5', 'arjun rs', 2500, '0000-00-00'),
(5, '3', 'akhil rs', 100, '0000-00-00'),
(7, '4', 'Gautam s', 6700, '0000-00-00'),
(8, '5', 'arjun', 400, '0000-00-00'),
(9, '4', 'Gautam s', 30, '0000-00-00'),
(10, '3', 'akhil rs', 300, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`id`, `name`, `age`, `bloodgroup`, `phone`, `email`, `address`, `amount`, `status`) VALUES
(3, 'akhil', 12, 'b-', 2147483647, '456@gmail.com', 'kollam', 300, '1'),
(6, 'Gautam s', 36, 'o+', 2147483647, '123gautm@gmail.com', 'kowdiar tvm', 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
