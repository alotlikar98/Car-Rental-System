-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 01:55 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcar`
--

CREATE TABLE `addcar` (
  `c_id` int(100) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `seating` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcar`
--

INSERT INTO `addcar` (`c_id`, `carname`, `model`, `fueltype`, `seating`, `price`, `images`) VALUES
(1, 'maruti-Suzuki', 'Delta', 'diesel', 5, 12000, 'carimg/maruti-suzuki-delta.jpg'),
(2, 'Kia-Motors', 'Sonet-HTE', 'diesel', 5, 11000, 'carimg/kia-sonet.jpg'),
(3, 'Maruti-Suzuki', 'Baleno', 'petrol', 5, 15000, 'carimg/MS-Baleno-Alpha.jpg'),
(14, 'Hyundai', 'i20', 'petrol', 4, 8000, 'carimg/hyundai-i20-cover-thumbnail.jpg'),
(15, 'kia-motors', 'seltos', 'diesel', 5, 10000, 'carimg/kia-seltos.jpg'),
(16, 'Tata-Motors', 'Nexon', 'petrol', 5, 8000, 'carimg/tata-nexan.jpg'),
(17, 'Mahindra', 'Tar', 'petrol', 4, 9000, 'carimg/mahindra-tar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cu_id` int(100) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cdescrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cu_id`, `cname`, `cemail`, `cdescrip`) VALUES
(1, 'user1', 'user@gmail.com', 'how to contact the owner of car'),
(2, 'user12', 'user12@gmail.com', 'is there any  document requirement'),
(9, 'user13', 'user13@gmail.com', 'i want to change my password'),
(10, 'user14', 'user14@gmail.com', 'hiii'),
(16, 'user14', 'user14@gmail.com', 'is there any other way to contact the owner'),
(17, 'user15', 'user15@gmail.com', 'owner of car dont take any calls'),
(18, 'user16', 'user15@gmail.com', 'owner of car dont take any calls'),
(19, 'user20', 'user15@gmail.com', 'hii hello how are you');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `fname`, `username`, `email`, `contact`, `password`, `cpassword`) VALUES
(9, 'abcd', ' abcds', 'xyz@gmail.com', '+912344563829', '123456', '123456'),
(10, 'anket', 'ready', 'test@gmail.com', '+912344563829', '12345', '12345'),
(11, 'aniket', 'aniket124', 'qwerty@yahoo.com', '+912344565457', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE `rentcar` (
  `r_id` int(100) NOT NULL,
  `fromdate` date NOT NULL,
  `tilldate` date NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentcar`
--

INSERT INTO `rentcar` (`r_id`, `fromdate`, `tilldate`, `payment`) VALUES
(6, '2020-12-18', '2020-12-20', 'cash'),
(7, '2020-12-21', '2020-12-24', 'cash'),
(8, '2020-12-23', '2020-12-25', 'cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcar`
--
ALTER TABLE `addcar`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentcar`
--
ALTER TABLE `rentcar`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcar`
--
ALTER TABLE `addcar`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cu_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rentcar`
--
ALTER TABLE `rentcar`
  MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
