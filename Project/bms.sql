-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 11:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `add` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `phone`, `add`) VALUES
(8, 'Md.Anik Islam', 'islamanik6366@gmail.com', '01303159123', 'Palbari (vashkorjo Mor),Jashore Sador,Jashore'),
(9, 'Check', 'check@gmail.com', '099888766', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `hrlogin`
--

CREATE TABLE IF NOT EXISTS `hrlogin` (
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `ucat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrlogin`
--

INSERT INTO `hrlogin` (`uname`, `upass`, `ucat`) VALUES
('anik', '12345', 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `ucat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `upass`, `ucat`) VALUES
('anik', '1234', 'admin'),
('anikhr', '12345', 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`noticeid` int(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeid`, `subject`, `details`) VALUES
(2, 'misson', 'jsgarghgsar'),
(3, 'techview Quotation (Ref S00002)', 'test'),
(4, 'T', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE IF NOT EXISTS `performance` (
  `name` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`name`, `rate`, `date`) VALUES
('Laptop', 3, '2021-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE IF NOT EXISTS `stuff` (
`empno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`empno`, `Name`, `Email`, `Address`, `Phone`, `Salary`, `Position`, `Gender`, `DOB`, `Pass`) VALUES
(1, 'Durjoy', 'durjoy@gmail.com', 'Dhaka', 1303030303, 30000, 'Accounts Manager', 'Male', '2005-02-14', '1234@'),
(2, 'Check', 'check@gmail.com', 'Nai', 1000000224, 1000, 'Cashier', 'Female', '2021-04-02', '1234@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
 ADD PRIMARY KEY (`empno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
MODIFY `noticeid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
MODIFY `empno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
