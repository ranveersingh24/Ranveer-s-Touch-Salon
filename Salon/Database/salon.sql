-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 07:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `fullName2` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phoneNum` int(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `apDate` date NOT NULL,
  `apTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fullName2`, `gender`, `phoneNum`, `email2`, `services`, `apDate`, `apTime`) VALUES
(8, 'Ranveer', 'male', 125164825, 'ranveer@gmail.com', 'Aroma Therapy,Expert Hair Spa', '2022-07-05', '10:57'),
(9, 'Nicholas', 'female', 135416851, 'nick@gmail.com', 'Manicure,Wedding Makeup', '2022-07-01', '14:00'),
(10, 'John Luke', 'male', 175462585, 'john@gmail.com', 'Body Spa,Massage,Manicure', '2022-06-26', '09:01'),
(11, 'Harini', 'female', 125416458, 'harini@gmail.com', 'Body Spa,Manicure,Wedding Makeup', '2022-07-22', '15:09'),
(12, 'Lisa Cullin', 'female', 111485526, 'lissa14@gmail.com', 'Aroma Therapy,Body Spa,Manicure', '2022-07-23', '11:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullName2` varchar(255) NOT NULL,
  `phoneNum` int(50) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullName2`, `phoneNum`, `email2`, `message`) VALUES
(16, 'Ranveer', 123482365, 'ranveer@gmail.com', 'bla bla'),
(17, 'John Khal', 162549815, 'john23@gmail.com', 'blu blu'),
(18, 'Nicholas', 174985222, 'nick12@gmail.com', 'ble ble'),
(19, 'Julia Leens', 178851616, 'julia19@gmail.com', 'I would like to know...');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `roles` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `roles`, `created`) VALUES
(1, 'nick', 'nick456', 'Designer', '2022-07-21 10:33:25'),
(2, 'ranveer', 'ranveer123', 'Owner', '2022-07-21 09:57:15'),
(3, 'john', 'john789', 'Specialist', '2022-07-21 09:57:56'),
(32, 'Harvinder', 'harvinder24', 'Cleaner', '2022-07-23 15:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bookSystem` varchar(255) NOT NULL,
  `visitComfortable` varchar(255) NOT NULL,
  `happyTreat` varchar(255) NOT NULL,
  `friRecommend` varchar(255) NOT NULL,
  `otherTreat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullName`, `email`, `bookSystem`, `visitComfortable`, `happyTreat`, `friRecommend`, `otherTreat`) VALUES
(12, 'Ranveer', 'ranveer@gmail.com', 'Satisfied', 'Very Satisfied', 'Neutral', 'yes', 'bla bla'),
(13, 'Nicholas', 'nick@gmail.com', 'Neutral', 'Unsatisfied', 'Unsatisfied', 'no', 'blu blu'),
(15, 'John', 'john12@gmail.com', 'Satisfied', 'Very Satisfied', 'Very Satisfied', 'yes', 'blo blo'),
(17, 'winston', 'winston14@gmail.com', 'Very Satisfied', 'Satisfied', 'Unsatisfied', 'yes', 'I would like to see other spa methods on the body...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
