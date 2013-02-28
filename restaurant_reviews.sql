-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2013 at 05:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant_reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `Name` varchar(50) NOT NULL,
  `Street_Number` int(11) DEFAULT NULL,
  `Street_Name` varchar(40) NOT NULL,
  `Area` varchar(40) NOT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Has_Bar` char(1) NOT NULL DEFAULT 'U',
  `Open_Past_10` char(1) NOT NULL DEFAULT 'U',
  `Accepts_EagleOne` char(1) NOT NULL DEFAULT 'U',
  `Price_Rating` int(11) NOT NULL DEFAULT '1',
  `Avg_Rating` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`Name`, `Street_Number`, `Street_Name`, `Area`, `Phone`, `Has_Bar`, `Open_Past_10`, `Accepts_EagleOne`, `Price_Rating`, `Avg_Rating`) VALUES
('Burger King', 1190, 'Burger King Drive', 'Fredericksburg', '5401234567', 'F', 'T', 'T', 5, 3),
('Hunan Garden', 9876, 'Walker Ln', 'Fredericksburg', '5407653322', 'F', 'F', 'F', 3, 4),
('Roadkill Roadhouse', 1111, 'Old Country Road', 'Dahlgren', '5407774444', 'T', 'T', 'F', 5, 1),
('Good Food Place', 4444, 'Blah St', 'Fredericksburg', '5402223333', 'U', 'U', 'U', 1, 1),
('', 0, '', '', '', 'U', 'U', 'U', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `Restaurant_Name` varchar(50) NOT NULL,
  `Reviewed_By` varchar(30) NOT NULL,
  `Num_Stars` int(11) NOT NULL DEFAULT '1',
  `Price_Rating` int(11) NOT NULL DEFAULT '1',
  `Review_Text` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`Restaurant_Name`, `Reviewed_By`, `Num_Stars`, `Price_Rating`, `Review_Text`) VALUES
('Good Food Place', 'Steve', 1, 1, 0x476f6f6420706c6163652e),
('', '', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(12) NOT NULL DEFAULT '',
  `real_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`username`, `password`, `real_name`) VALUES
('admin', 'password', 'FredFood Team');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
