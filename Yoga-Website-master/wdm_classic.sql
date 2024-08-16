-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 12:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdm`
--
CREATE DATABASE IF NOT EXISTS `wdm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wdm`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `admin`
--

TRUNCATE TABLE `admin`;
--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `classid` varchar(11) NOT NULL,
  `classname` varchar(40) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `class`
--

TRUNCATE TABLE `class`;
--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `classname`, `description`) VALUES
('Gentle', 'Gentle Hatha Yoga', 'Intended for beginners and anyone wishing a grounded foundation in the practice of yoga, this 60 minute class of poses and slow movement focuses on asana (proper alignment and posture), pranayama (breath work), and guided meditation to foster your mind and body connection.'),
('Restorative', 'Restorative Yoga', 'This 90 minute class features very slow movement and long poses that are supported by a chair or wall. This calming, restorative experience is suitable for students of any level of experience. This practice can be a perfect way to help rehabilitate and injury.'),
('Vinyasa', 'Vinyasa Yoga', 'Although designed for intermediate to advance students, beginners are welcome to this 60 minute class that focuses on breath-synchronized movement - you will inhale and exhale as you flow energetically though yoga poses.');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `client`
--

TRUNCATE TABLE `client`;
--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `name`, `address`, `phone`, `email`, `password`) VALUES
(6, 'Mihir Makwana', 'ANAND', '8460716859', 'mihirpmakwana786@gmail.com', 'Yoga2017'),
(7, 'Mihir Makwana', 'ANAND', '8460716859', 'mihirpmakwana786@gmail.com', 'Yoga2017'),
(8, 'Chirag Solanki', 'Petlad', '7600181856', 'chirag@gmail.com', 'Yoga2017');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `comments` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `contact`
--

TRUNCATE TABLE `contact`;
--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `comments`) VALUES
('Candice Gomes', 'candicegomes_15@hotmail.com', 'Hello!'),
('Rachel Green', 'rachel.green@yahoo.com', 'Hello, I would like to know more about yoga.'),
('Ross Gellar', 'ross.gellar@gmail.com', 'I like dinosaurs. Do you? '),
('Pheobe Buffay', 'pheobe.buffay@msn.com', 'I do yoga ever day, can you help me with class timings?'),
('Chandlar Bing', 'bing.c@iCloud.com', 'Bing! Could this be any more boring?'),
('Chirag Solanki', 'chirag@gmail.com', 'Nice!');

-- --------------------------------------------------------

--
-- Table structure for table `cschedule`
--

DROP TABLE IF EXISTS `cschedule`;
CREATE TABLE `cschedule` (
  `clientid` int(11) NOT NULL,
  `timeid` varchar(11) NOT NULL,
  `classid` varchar(11) NOT NULL,
  `daysid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `cschedule`
--

TRUNCATE TABLE `cschedule`;
--
-- Dumping data for table `cschedule`
--

INSERT INTO `cschedule` (`clientid`, `timeid`, `classid`, `daysid`) VALUES
(8, '3', 'vinyasa', 'weekend');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

DROP TABLE IF EXISTS `days`;
CREATE TABLE `days` (
  `daysid` varchar(11) NOT NULL,
  `daysname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `days`
--

TRUNCATE TABLE `days`;
--
-- Dumping data for table `days`
--

INSERT INTO `days` (`daysid`, `daysname`) VALUES
('weekday', 'Monday - Friday'),
('weekend', 'Saturday & Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `timeid` varchar(11) NOT NULL,
  `classid` varchar(11) NOT NULL,
  `daysid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `schedule`
--

TRUNCATE TABLE `schedule`;
--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`timeid`, `classid`, `daysid`) VALUES
('1', 'Gentle', 'weekday'),
('2', 'Vinyasa', 'weekday'),
('6', 'Restorative', 'weekday'),
('7', 'Gentle', 'weekday'),
('2', 'Gentle', 'weekend'),
('3', 'Vinyasa', 'weekend'),
('4', 'Gentle', 'weekend'),
('5', 'Vinyasa', 'weekend'),
('6', 'Restorative', 'weekend');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
CREATE TABLE `time` (
  `timeid` varchar(11) NOT NULL,
  `time` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `time`
--

TRUNCATE TABLE `time`;
--
-- Dumping data for table `time`
--

INSERT INTO `time` (`timeid`, `time`) VALUES
('1', '9:00am'),
('2', '10:30am'),
('3', 'Noon'),
('4', '1:30pm'),
('5', '3:00pm'),
('6', '5:30pm'),
('7', '7:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `phone`, `address`, `state`, `city`, `password`) VALUES
('Chirag Solanki', 'chirag', 'chirag@gmail.com', '7600181856', 'Petlad', 'Gujarat', 'Anand', '123'),
('Mihir Makwana', 'mihir', 'mihirpmakwana786@gmail.com', '8460716859', 'anand', 'GUJARAT', 'Anand', '123');

-- --------------------------------------------------------

--
-- Table structure for table `yoga_registrations`
--

DROP TABLE IF EXISTS `yoga_registrations`;
CREATE TABLE `yoga_registrations` (
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `session` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `free_trial` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `yoga_registrations`
--

TRUNCATE TABLE `yoga_registrations`;
--
-- Dumping data for table `yoga_registrations`
--

INSERT INTO `yoga_registrations` (`name`, `username`, `email`, `phone`, `session`, `date`, `time`, `free_trial`) VALUES
('Chirag Solanki', 'chirag', 'chirag@gmail.com', '7600181856', 'Evening', '2024-02-25', '5:00 PM to 8:00 PM', 'Silver'),
('Mihir Makwana', 'mihir', 'mihirpmakwana786@gmail.com', '8460716859', 'Morning', '2024-03-05', '7:00 AM to 11:00 AM', 'Bronze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `cschedule`
--
ALTER TABLE `cschedule`
  ADD KEY `clientid` (`clientid`),
  ADD KEY `timeid` (`timeid`),
  ADD KEY `classid` (`classid`),
  ADD KEY `daysid` (`daysid`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`daysid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD KEY `timeid` (`timeid`),
  ADD KEY `classid` (`classid`),
  ADD KEY `daysid` (`daysid`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`timeid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `yoga_registrations`
--
ALTER TABLE `yoga_registrations`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cschedule`
--
ALTER TABLE `cschedule`
  ADD CONSTRAINT `cSchedule_ibfk_1` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`),
  ADD CONSTRAINT `cSchedule_ibfk_2` FOREIGN KEY (`timeid`) REFERENCES `time` (`timeid`),
  ADD CONSTRAINT `cSchedule_ibfk_3` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `cSchedule_ibfk_4` FOREIGN KEY (`daysid`) REFERENCES `days` (`daysid`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`timeid`) REFERENCES `time` (`timeid`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`daysid`) REFERENCES `days` (`daysid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
