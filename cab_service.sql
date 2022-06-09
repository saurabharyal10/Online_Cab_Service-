-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 02:59 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cab_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_ride`
--

CREATE TABLE IF NOT EXISTS `apply_ride` (
  `id` int(11) NOT NULL,
  `current_location` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `status` enum('approve','reject') DEFAULT NULL,
  `driver_name` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_ride`
--

INSERT INTO `apply_ride` (`id`, `current_location`, `destination`, `time`, `userid`, `status`, `driver_name`, `remarks`) VALUES
(11, ' gongabu', ' kalanki ', '   April 16th 2021 06:53:37 PM', 18, 'approve', 'pramod pandit', ''),
(12, ' sanopul', ' kalanki ', '   April 17th 2021 02:53:07 AM', 17, 'approve', 'pramod pandit', ''),
(13, ' manamaiju', ' kalanki ', '   April 17th 2021 05:33:47 PM', 17, 'approve', 'abc123', 'complete'),
(14, ' gongabu', ' dhungedhara ', '   April 18th 2021 08:15:17 AM', 20, 'approve', 'Pramod Pandit', ''),
(15, ' balaju', ' kalanki ', '   April 18th 2021 10:06:02 AM', 22, 'approve', 'pramod', ''),
(17, ' sanopul', ' dhungedhara ', '   April 22nd 2021 01:26:56 PM', 29, 'approve', 'abc123', 'complete'),
(18, ' balaju', ' dhungedhara ', '   April 22nd 2021 05:15:50 PM', 29, '', '', ''),
(19, ' satdobato', ' balaju ', '   August 16th 2021 01:31:06 PM', 35, 'approve', 'Tom', 'complete'),
(20, ' banasthali', ' gongabu ', '   August 27th 2021 08:27:29 PM', 38, 'approve', 'Tom', 'complete'),
(21, ' balaju', ' kalanki ', '   August 28th 2021 07:47:41 PM', 35, 'approve', 'abc123', 'complete'),
(22, ' balaju', ' basundhara ', '   August 30th 2021 07:01:50 AM', 35, 'approve', 'abc123', ''),
(23, ' gongabu', ' balaju ', '   August 30th 2021 12:02:49 PM', 40, 'approve', 'Adriver', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'AdminGPON', 'pppp@gmail.com', '98608765489', 'ghbjn'),
(2, 'Saurabh aryal', 'pppp@gmail.com', '3456789', 'hyy.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `date_of_join` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `user_name`, `password`, `mobile`, `email`, `date_of_birth`, `address`, `gender`, `user_type`, `date_of_join`) VALUES
(2, 'admin1', 'admin1', 'admin1', '345678', 'rdfghjk@xgfgcgvh', '08-09-2066', 'gogabu', 'male', 'admin', '2077'),
(17, 'pramod pandit', 'pramod1', 'pramod1', '9861283316', 'panditpramod@gmail.com', '2020-09-09', 'maharajgung', 'Male', 'User', '2021-Apr-Fri'),
(18, 'Bibek Aryal', 'bilbek', 'bibek', '987654331', 'bibek@gmail.com', '2060-09-08', 'gongabu', 'Male', 'User', '2021-Apr-Fri'),
(19, 'pramod', 'pramod', 'pramod', '987654321', 'panditpramod@yahoo.com', '2060-09-09', 'balaju', 'Male', 'Driver', '2021-Apr-Sat'),
(20, 'Saurabh Aryal', 'saurabh', 'saurabh', '987653246', 'pra@gmail.com', '2065-07-08', 'dhungedhara', 'Male', 'User', '2021-Apr-Sun'),
(21, 'Pramod Pandit', 'pramod123', 'pramod123', '9876543', 'panditpramod1@gmail.com', '2068-08-05', 'balaju', 'Male', 'Driver', '2021-Apr-Sun'),
(22, 'Binod', 'binod', 'binod', '9863', 'pra@gmail.com', '2022-09-09', 'ktm', 'Male', 'User', '2021-Apr-Sun'),
(23, 'AdminGPON', 'adam', 'adam', '9876', 'ppppgmail.com', '2000-09-09', 'asdasd', 'Male', 'Driver', '2021-Apr-Thu'),
(24, 'AdminGPON', 'pramod', 'pppp', '9876543', 'hjjnbgvhj', '2006-09-09', 'bbjkb', 'Male', 'Driver', '2021-Apr-Thu'),
(25, 'Prem', 'pram', 'pram', '9871', 'ppppgmail.com', '2003-09-09', 'nuwakot', 'Male', 'Driver', '2021-Apr-Thu'),
(26, 'AdminGPON', 'admingpon', 'admingpon', '9871', 'panditpramod1@gmail.com', '2077-06-06', 'nkt', 'Male', 'Driver', '2021-Apr-Thu'),
(27, 'AdminGPON', 'adminknown', 'adminknown', '9878', 'pppp@gmail.com', '3000-08-08', 'ktm', 'Male', 'Driver', '2021-Apr-Thu'),
(29, 'AdminGPON', 'prem11', 'prem11', '9860876548', 'pppp@gmail.com', '', 'nkt', 'Male', 'User', '2021-Apr-Thu'),
(30, 'adam', 'adam', 'adam', '1234567890', 'pppp@gmail.com', '1662674400', 'gongabu', 'Male', 'User', '2021-Jun-Sun'),
(31, 'AdminGPON', 'pramod', 'pramod', '9860876548', 'pppp@gmail.com', '1662674400', 'nuwakot', 'Male', 'Driver', '2021-Jun-Sun'),
(32, 'AdminGPON', 'pramod1', 'pramod1', '9860876548', 'pandirpramod877@gmail.com', '', 'asdasd', 'Male', 'User', '2021-Jun-Sun'),
(33, 'unknown', 'unknown', 'unknown', '9871234567', 'pppp@gmail.com', '2030-03-06', 'asdasd', 'Male', 'Driver', '2021-Jun-Mon'),
(34, 'adam', 'pramod', 'pramod', '9860876555', 'pppp@gmail.com', '2023-09-15', 'nkt', 'Male', 'User', '2021-Jun-Mon'),
(35, 'abc', 'abc', 'abc', '9999999999', 'a@b.ccom', '2021-04-29', 'ktm', 'Male', 'User', '2021-Aug-Mon'),
(36, 'abc123', 'abc123', 'abc123', '9999999999', 'k@d.com', '2017-01-01', 'sdfgbnm', 'Male', 'Driver', '2021-Aug-Mon'),
(37, 'Tom', 'Tom1', 'tom', '3254862483', 'tom@gmail.com', '2021-08-30', 'ktm', 'Male', 'Driver', '2021-Aug-Fri'),
(38, 'user', 'user1', 'user', '3216549878', 'user@mail.com', '2021-08-10', 'ktm', 'Male', 'User', '2021-Aug-Fri'),
(39, 'Adriver', 'adriver', 'adriver', '987654321', 'aa@gmail.com', '2020-08-08', 'kathmandu', 'Male', 'Driver', '2021-Aug-Mon'),
(40, 'Auser', 'auser', 'auser', '987654321', 'pp@gmail.com', '2019-07-07', 'nuwakot', 'Male', 'User', '2021-Aug-Mon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_ride`
--
ALTER TABLE `apply_ride`
  ADD PRIMARY KEY (`id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_ride`
--
ALTER TABLE `apply_ride`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_ride`
--
ALTER TABLE `apply_ride`
ADD CONSTRAINT `apply_ride_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tbl_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
