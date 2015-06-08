-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2015 at 11:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tripmania`
--
CREATE DATABASE IF NOT EXISTS `tripmania` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tripmania`;

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE IF NOT EXISTS `attraction` (
  `type` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attraction`
--

--INSERT INTO `attraction` (`type`, `category`) VALUES
--('amusement park', 'family'),
--('arcade', 'kids'),
--('beach', 'family'),
--('biking', 'family'),
--('boating', 'family'),
--('fishing', 'adult'),
--('museum', 'adult'),
--('park', 'family'),
--('shopping', 'adults'),
--('zoo', 'family');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

--INSERT INTO `login` (`username`, `password`, `role`) VALUES
--('allison', 'abraham', 'regular'),
--('barney', 'dino', 'regular'),
--('corrie', 'calamazoo', 'regular'),
--('dino', 'calamazoo', 'regular'),
--('jack', 'jill', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `name` varchar(15) NOT NULL,
  `code` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

--INSERT INTO `places` (`name`, `code`) VALUES
--('Las Vegas', 'LV'),
--('Los Angeles', 'LA'),
--('Miami', 'MI'),
--('New York', 'NY'),
--('Orlando', 'Or');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE IF NOT EXISTS `trip` (
  `tripid` int(11) NOT NULL,
  `code` char(2) NOT NULL,
  `cost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

--INSERT INTO `trip` (`tripid`, `code`, `cost`) VALUES
--(111, 'LA', '400'),
--(123, 'NY', '445'),
--(222, 'LA', '475'),
--(234, 'NY', '766'),
--(333, 'NY', '346'),
--(345, 'LA', '555'),
--(456, 'LV', '799'),
--(567, 'OR', '601'),
--(666, 'MI', '300'),
--(777, 'MI', '275');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `tripid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--

--
-- Indexes for table `login`
--
--ALTER TABLE `login`
--ADD PRIMARY KEY (`username`);

--
-- Indexes for table `places`
--

--
-- Indexes for table `trip`
--

--
-- Indexes for table `user`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
