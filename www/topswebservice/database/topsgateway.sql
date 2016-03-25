-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2013 at 05:37 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topsgateway`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`cityid`),
  KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`, `sid`) VALUES
(1, 'Ahemdabad', 1),
(2, 'Gadhinagar', 1),
(3, 'Indoor', 2),
(4, 'Bhopal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'city id',
  `cname` varchar(50) NOT NULL COMMENT 'city name',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'India'),
(3, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `custacc`
--

CREATE TABLE IF NOT EXISTS `custacc` (
  `c_accno` varchar(20) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_balance` float NOT NULL,
  PRIMARY KEY (`c_accno`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custacc`
--

INSERT INTO `custacc` (`c_accno`, `c_id`, `c_balance`) VALUES
('C201308084', 4, 10000),
('C201308085', 5, 7300);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_fname` varchar(50) NOT NULL,
  `c_lname` varchar(50) NOT NULL,
  `c_country` int(11) NOT NULL,
  `c_state` int(11) NOT NULL,
  `c_city` int(11) NOT NULL,
  `c_add` varchar(200) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `c_email` (`c_email`),
  KEY `c_country` (`c_country`),
  KEY `c_state` (`c_state`),
  KEY `c_city` (`c_city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_fname`, `c_lname`, `c_country`, `c_state`, `c_city`, `c_add`, `c_email`, `c_password`) VALUES
(3, 'Indra', 'Shastri', 1, 1, 1, '53 chandrasheela society ', 'indranshastri@yahoo.in', '€Vîç1”eE'),
(4, 'pratik', 'pratik', 1, 1, 1, 'dlskljdfls', 'pratik21@yahoo.com', '€J¿OhþÕàee†\rª‘£†ºjàš’?ª!/Š›¿uà;Ë³vÐ[Ç '),
(5, 'pratik', 'pratik', 1, 1, 1, 'dlskljdfls', 'pratik22@yahoo.com', '€‘¥ì]o(ýh`¡’7à[gT£*eR\0ZËJÆZb"¿‡''¨Õê4');

-- --------------------------------------------------------

--
-- Table structure for table `saler`
--

CREATE TABLE IF NOT EXISTS `saler` (
  `s_id` int(11) NOT NULL,
  `s_fname` varchar(50) NOT NULL,
  `s_lname` varchar(50) NOT NULL,
  `comp_name` varchar(50) NOT NULL,
  `s_country` int(11) NOT NULL,
  `s_state` int(11) NOT NULL,
  `s_city` int(11) NOT NULL,
  `comp_add` varchar(500) NOT NULL,
  `ph_no` int(11) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `s_zipcode` int(11) NOT NULL,
  KEY `s_country` (`s_country`),
  KEY `s_state` (`s_state`),
  KEY `s_city` (`s_city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saler`
--

INSERT INTO `saler` (`s_id`, `s_fname`, `s_lname`, `comp_name`, `s_country`, `s_state`, `s_city`, `comp_add`, `ph_no`, `email_id`, `password`, `s_zipcode`) VALUES
(1, 'nikunj', 'nikunj', 'Online book store', 1, 1, 1, 'kjhkhlkhlk', 8989, 'rucha@yahoo.in', 'tops123', 79);

-- --------------------------------------------------------

--
-- Table structure for table `salersacc`
--

CREATE TABLE IF NOT EXISTS `salersacc` (
  `s_accno` varchar(20) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_bal` int(11) NOT NULL,
  `apikey` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salersacc`
--

INSERT INTO `salersacc` (`s_accno`, `s_id`, `s_bal`, `apikey`) VALUES
('S201308080', 1, 20800, '120130808101');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`, `cid`) VALUES
(1, 'Gujrat', 1),
(2, 'MadhyaPradesh', 1),
(3, 'Torrento', 3),
(4, 'Regina', 3),
(5, 'UP', 1),
(6, 'kerela', 1),
(7, 'Kerela', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transid` int(11) NOT NULL AUTO_INCREMENT,
  `custacc` varchar(50) NOT NULL,
  `salersacc` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `salertransid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`transid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transid`, `custacc`, `salersacc`, `amount`, `salertransid`, `date`) VALUES
(1, 'C201308085', 'S201308080', 900, 16, '2013-08-08 15:13:34'),
(2, 'C201308085', 'S201308080', 900, 17, '2013-08-08 15:20:52'),
(3, 'C201308085', 'S201308080', 900, 17, '2013-08-08 15:21:53'),
(4, 'C201308085', 'S201308080', 900, 18, '2013-08-08 15:23:01'),
(5, 'C201308085', 'S201308080', 900, 19, '2013-08-08 15:24:53'),
(6, 'C201308085', 'S201308080', 900, 12, '2013-08-09 18:16:34'),
(7, 'C201308085', 'S201308080', 900, 13, '2013-08-09 18:18:53'),
(8, 'C201308085', 'S201308080', 900, 14, '2013-08-09 18:21:35'),
(9, 'C201308085', 'S201308080', 900, 17, '2013-08-13 11:29:46'),
(10, 'C201308085', 'S201308080', 900, 18, '2013-08-16 16:09:19'),
(11, 'C201308085', 'S201308080', 900, 17, '2013-09-14 08:52:54'),
(12, 'C201308085', 'S201308080', 900, 19, '2013-09-14 09:05:30');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `custacc`
--
ALTER TABLE `custacc`
  ADD CONSTRAINT `custacc_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`c_country`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`c_state`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_ibfk_3` FOREIGN KEY (`c_city`) REFERENCES `city` (`cityid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
