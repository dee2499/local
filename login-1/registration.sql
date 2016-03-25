-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2016 at 04:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `admin` int(5) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` int(6) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `hidden` int(5) NOT NULL,
  `deleted` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `admin`, `surname`, `password`, `email`, `dob`, `image`, `phone`, `gender`, `city`, `address`, `about`, `hidden`, `deleted`) VALUES
(76, 'Deepak', 1, 'Visani', '123456', 'Deepakvisani@gmail.com', 1455836400, '1455881777adf013439a45160198cfc78bf65587fa.png', '9016564867', 'male', 'Amreli', 'Jalaram nagar', 'Lorem ipsum', 0, 0),
(77, 'Rahul', 0, 'Dravid', '123456', 'RahulDravid@gmail.com', 1455881828, '1455881828anzeige.png', '9978458574', 'male', 'rajkot', 'Jalaram nagar', 'lorem ipsum', 0, 0),
(78, 'Deepak', 0, 'Visani', 'deepak', 'Deepakvisani@gmail.com', 1455882764, '1455882764adf013439a45160198cfc78bf65587fa.png', '9016564867', 'male', 'Amreli', 'Jalaram nagar', 'adasdasdsadsa', 0, 1),
(79, 'Rahul', 0, 'Visani', 'password', 'Deepakvisani@gmail.com', 1455836400, '145589075712491917_203163723364023_4072054554392146016_o.jpg', '', 'male', 'Ahmedabad', 'Bandglore', 'asdasdasdasd', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
