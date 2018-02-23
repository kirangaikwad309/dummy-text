-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 12:21 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dummy`
--
CREATE DATABASE IF NOT EXISTS `dummy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dummy`;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `username` varchar(256) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`username`, `password`) VALUES
('Admin', 'admin'),
('Admin', 'admin'),
('Admin', 'admin'),
('Admin', 'admin'),
('Admin', 'admin'),
('Admin', 'admin'),
('Admin', 'admin'),
('Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `textdemo`
--

CREATE TABLE IF NOT EXISTS `textdemo` (
  `Name` varchar(256) NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
