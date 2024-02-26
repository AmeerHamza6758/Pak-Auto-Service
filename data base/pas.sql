-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 08:30 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ascs`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sr_no`, `username`, `password`) VALUES
(1, 'talha', '1234'),
(2, 'adil', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookacar`
--

CREATE TABLE IF NOT EXISTS `bookacar` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `start` varchar(25) NOT NULL,
  `end` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cinic` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sr_no`, `name`, `email`, `subject`, `message`) VALUES
(4, 'Talha Aziz', 'talhaaziz23@yahoo.com', 'Washing', 'mcvjcjkrkrjbrcf');

-- --------------------------------------------------------

--
-- Table structure for table `mechanicbooking`
--

CREATE TABLE IF NOT EXISTS `mechanicbooking` (
  `username` varchar(25) NOT NULL,
  `service` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `number` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mechanicbooking`
--

INSERT INTO `mechanicbooking` (`username`, `service`, `type`, `number`, `date`, `time`, `name`, `email`, `phone`, `message`, `sr_no`) VALUES
('talha00', 'Engine Work', 'Regular Car', '1234', '28/08/2019', 'Afternoon', 'talha', 'jamtalhahameed323@gmail.c', '03330000444', 'dd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `myusers`
--

CREATE TABLE IF NOT EXISTS `myusers` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`sr_no`, `username`, `password`, `email`, `phone`, `name`) VALUES
(4, 'admin', '7654', 'admin@yahoo.com', '', 'talha'),
(5, 'talha00', '12345', 'admin@yahoo.com', '', 'Talha'),
(6, 'adil', '1234', 'chadil@22', '', 'adil'),
(7, '', '', '', '', ''),
(8, 'iqra', '1234', 'admin@yahoo.com', '', 'iqra iqbal ');

-- --------------------------------------------------------

--
-- Table structure for table `wash`
--

CREATE TABLE IF NOT EXISTS `wash` (
  `username` varchar(25) NOT NULL,
  `service` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `number` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
