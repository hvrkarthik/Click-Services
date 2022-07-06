-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 10:18 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `click_services`
--
CREATE DATABASE IF NOT EXISTS `click_services` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `click_services`;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(20) NOT NULL AUTO_INCREMENT,
  `request_id` int(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `bill_date` date NOT NULL,
  `total_worker` int(10) NOT NULL,
  `rate_worker` int(20) NOT NULL,
  `desc_work` varchar(1000) NOT NULL,
  `amount` int(20) NOT NULL,
  `tamt` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `request_id`, `customer_id`, `bill_date`, `total_worker`, `rate_worker`, `desc_work`, `amount`, `tamt`, `status`) VALUES
(1, 6666, '666', '6666-06-06', 6666, 6666, '', 6666, '', '6666'),
(6, 8888, '8888', '8888-08-08', 777, 777, '', 777, '', 'nnn'),
(8, 8, '8', '8888-08-08', 8, 8, '', 8, '', 'u'),
(9, 0, '', '2018-12-04', 8, 8, '', 8, '', 'j'),
(10, 0, '', '2018-12-05', 1111, 4444, '', 8888, '', 'hhhhh'),
(11, 0, '', '2018-12-21', 5, 5, '', 5, '', 'r'),
(12, 0, '', '2018-12-05', 111, 111, '', 111, '', 'hhhhh'),
(13, 0, '', '2018-12-12', 5, 200, '', 1000, '', 'active'),
(14, 0, '', '2018-12-12', 5, 200, '', 1000, '', 'active'),
(15, 13, '20', '2018-12-06', 10, 300, '', 3000, '', 'active'),
(16, 11, '20', '2018-12-06', 10, 300, '', 3000, '', 'active'),
(19, 13, '17', '2018-12-15', 88888, 678, '', 6789, '', 'YUVI'),
(20, 3, '15', '2018-12-09', 1212, 19, '', 12112, '', 'ASAS'),
(21, 3, '15', '2018-12-17', 111, 111, '', 55, '', 'FGH'),
(22, 3, '15', '2018-12-21', 111, 111, '', 22, '', 'JJJJ'),
(23, 3, '17', '2018-12-19', 22, 77, '', 7777, '', 'SSS'),
(24, 3, '17', '2018-12-14', 111, 111, '', 111, '', 'gdg'),
(25, 3, '17', '2018-12-02', 5, 55, '', 12112, '', 'j'),
(26, 30, '24', '2019-01-16', 10, 350, 'Fitting', 2000, '5500', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(32, 'accc', 'ggggg'),
(35, 'abcde', 'ggggg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` bigint(30) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(24, 'Asif K', 9743320840, 'asif.bvb@gmail.com', 'Dharwad'),
(25, 'Jagadish', 9123456789, 'jagu@gmail.com', 'Hubli');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `hintq` varchar(255) NOT NULL,
  `hinta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`, `hintq`, `hinta`) VALUES
('admin', '123', 'admin', 'who i am?', 'admin'),
('pb12345', '9876543210', 'provider', 'My registered Email Id', 'kunal@gmail.com'),
('9743320840', '123456', 'customer', 'Your registered Email-Id', 'asif.bvb@gmail.com'),
('hb112233', '9871235867', 'provider', 'My registered Email Id', 'sameer@gmail.com'),
('9123456789', '123456', 'customer', 'Your registered Email-Id', 'jagu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `rating_id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` int(20) NOT NULL,
  `service_id` int(20) NOT NULL,
  `service_producer_id` int(20) NOT NULL,
  `rating_date` date NOT NULL,
  `reviews` varchar(100) NOT NULL,
  `ratings` int(10) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `customer_id`, `service_id`, `service_producer_id`, `rating_date`, `reviews`, `ratings`) VALUES
(1, 1626, 53, 576, '0000-00-00', 'dwcwwb', 2),
(3, 55, 53, 576, '0000-00-00', 'gfdb', 2),
(4, 12, 23, 34, '0000-00-00', 'wv2ytfjh', 2),
(18, 78, 78, 78, '7878-08-07', 'yy', 78),
(19, 2, 2, 1, '2018-12-05', 'etrte', 3),
(22, 15, 2, 1, '2018-12-15', 'nnnn', 4),
(23, 15, 2, 1, '2018-12-14', 'QWER', 78),
(24, 15, 2, 1, '2018-12-01', 'FGHJ', 2),
(25, 15, 2, 1, '2018-12-29', 'ZXCVBN', 4),
(27, 17, 2, 1, '2018-12-16', 'NNN', 5),
(28, 17, 2, 1, '2018-12-23', 'QQQ', 1),
(29, 17, 2, 1, '2018-12-15', 'rtyu', 5),
(30, 17, 2, 1, '2018-12-09', 'qq', 2),
(31, 17, 2, 1, '2018-12-15', 'jj', 8),
(32, 17, 2, 1, '2018-12-08', 'df', 3),
(33, 24, 26, 34, '2019-01-16', 'Good service', 4);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` int(20) NOT NULL,
  `service_id` int(20) NOT NULL,
  `service_producer_id` int(20) NOT NULL,
  `request_date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `customer_id`, `service_id`, `service_producer_id`, `request_date`, `description`) VALUES
(3, 0, 0, 11111, '0000-00-00', ''),
(11, 333, 333, 333, '3333-03-31', '333'),
(13, 44, 44, 44, '4444-04-04', 'ee'),
(14, 2, 2, 1, '2018-12-06', 'fghj'),
(15, 15, 5, 18, '2018-12-18', 'aaaaaa'),
(16, 15, 5, 18, '2018-12-18', 'aaaaaa'),
(17, 15, 2, 18, '2018-12-07', 'aaa'),
(18, 15, 2, 1, '2018-12-07', 'aaa'),
(19, 15, 2, 20, '2018-12-07', 'aaa'),
(20, 15, 2, 1, '2018-12-16', 'AAAAAA'),
(21, 15, 2, 1, '2018-12-02', 'aaa'),
(22, 15, 2, 1, '2018-12-02', 'aaa'),
(23, 15, 2, 1, '2018-12-07', 'KKK'),
(24, 15, 2, 1, '2018-12-06', 'GHJHH'),
(25, 15, 2, 1, '2018-12-27', 'DFGHJK'),
(27, 17, 2, 1, '2018-12-22', 'asasa'),
(28, 17, 2, 1, '2018-12-21', 'qqq'),
(29, 17, 2, 1, '2018-12-09', 'qqq'),
(30, 24, 26, 34, '2019-01-13', 'Syntax Fitting'),
(31, 24, 26, 34, '2019-01-24', 'hgjfhgf');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(20) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(50) NOT NULL,
  `service_description` varchar(100) NOT NULL,
  `category_id` int(20) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `category_id`) VALUES
(26, 'Plumbing', 'All types of plumbing services and contracts', 35),
(27, 'Electric Works', 'All types of electric works and contracts', 35);

-- --------------------------------------------------------

--
-- Table structure for table `service_producers`
--

CREATE TABLE IF NOT EXISTS `service_producers` (
  `service_producer_id` int(20) NOT NULL AUTO_INCREMENT,
  `service_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_no` bigint(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `register_no` varchar(50) NOT NULL,
  PRIMARY KEY (`service_producer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `service_producers`
--

INSERT INTO `service_producers` (`service_producer_id`, `service_id`, `name`, `contact_no`, `company_name`, `email`, `address`, `register_no`) VALUES
(34, 26, 'Kunal', 9876543210, 'Kunal Ltd', 'kunal@gmail.com', 'Haveri', 'pb12345'),
(35, 27, 'Samantha', 9871235867, 'samanth and co', 'sameer@gmail.com', 'Hubli', 'hb112233');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
