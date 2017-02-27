-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 09:20 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material` varchar(100) NOT NULL,
  `mprice` int(30) NOT NULL,
  `myards` int(30) NOT NULL,
  `mshop` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Total_Amount` varchar(100) NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `material`, `mprice`, `myards`, `mshop`, `location`, `Total_Amount`, `date_posted`) VALUES
(5, '2321', 345, 313, 'wishwa', 'upload/d.jpg', '107985', '2016-02-20'),
(6, '1234', 345, 100, 'wishwa', 'upload/Screenshot (84).png', '34500', '2016-02-27'),
(7, '1231', 340, 500, 'wishwa', 'upload/12800224_10205553741269563_8944155164391451231_n.jpg', '170000', '2016-03-09'),
(8, '3231', 345, 13, 'wishwa', 'upload/piyuma.JPG', '4485', '2016-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `material1`
--

CREATE TABLE IF NOT EXISTS `material1` (
  `material` varchar(100) NOT NULL,
  `mprice` int(30) NOT NULL,
  `myards` decimal(30,2) NOT NULL,
  `mshop` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Total_Amount` varchar(100) NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  UNIQUE KEY `material` (`material`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material1`
--

INSERT INTO `material1` (`material`, `mprice`, `myards`, `mshop`, `location`, `Total_Amount`, `date_posted`) VALUES
('1231', 340, '260.00', 'wishwa', 'upload/12800224_10205553741269563_8944155164391451231_n.jpg', '340000', '2016-03-09'),
('1234', 345, '601.50', 'wishwa', 'upload/12755350_10208548523897242_607009145_o.jpg', '332500', '2016-02-20'),
('2321', 345, '626.00', 'wishwa', 'upload/d.jpg', '215970', '2016-02-20'),
('3231', 567, '193.00', 'wishwa', 'upload/12765742_10201088813139600_57564587_o.jpg', '106545', '2016-02-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
