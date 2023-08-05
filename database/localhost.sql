-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2018 at 10:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spardhadb`
--
CREATE DATABASE `spardhadb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spardhadb`;

-- --------------------------------------------------------

--
-- Table structure for table `acc_table`
--

CREATE TABLE IF NOT EXISTS `acc_table` (
  `SportId` int(11) NOT NULL,
  `AccName` varchar(20) NOT NULL,
  `Qty` int(11) NOT NULL,
  PRIMARY KEY (`SportId`,`AccName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_table`
--

INSERT INTO `acc_table` (`SportId`, `AccName`, `Qty`) VALUES
(4, 'ball', 2),
(4, 'bat', 2),
(7, 'board', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cntct_table`
--

CREATE TABLE IF NOT EXISTS `cntct_table` (
  `Srno` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  PRIMARY KEY (`Srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cntct_table`
--

INSERT INTO `cntct_table` (`Srno`, `Name`, `Email`, `Subject`, `Message`, `Date`, `Time`) VALUES
(1, 'a', 'a', 'a', 'a', '2018-08-12', '07:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `sport_table`
--

CREATE TABLE IF NOT EXISTS `sport_table` (
  `SportId` int(11) NOT NULL,
  `SportCategory` varchar(20) NOT NULL,
  `SportName` varchar(30) NOT NULL,
  PRIMARY KEY (`SportId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport_table`
--

INSERT INTO `sport_table` (`SportId`, `SportCategory`, `SportName`) VALUES
(1, 'Single', 'Badminton'),
(2, 'Single', 'carom'),
(3, 'Doubles', 'Badminton'),
(4, 'Team', 'Cricket'),
(5, 'Athletics', 'Long Jump'),
(6, 'Team', 'Kho-Kho'),
(7, 'Single', 'chess');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`Username`, `Password`, `Email_Id`, `Usertype`) VALUES
('Batul', 'admin', 'pitolfatema52@gmail.com', 'Admin');
