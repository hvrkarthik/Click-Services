-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 07:42 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `click_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(20) NOT NULL auto_increment,
  `request_id` int(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `bill_date` date NOT NULL,
  `total_worker` int(10) NOT NULL,
  `rate_worker` int(20) NOT NULL,
  `desc_work` varchar(1000) NOT NULL,
  `amount` int(20) NOT NULL,
  `tamt` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `request_id`, `customer_id`, `bill_date`, `total_worker`, `rate_worker`, `desc_work`, `amount`, `tamt`, `status`) VALUES
(1, 1, '25', '2019-03-19', 5, 250, 'hhhjgjhg', 1000, '2250', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL auto_increment,
  `category_name` varchar(20) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(32, 'plumbing', 'pipeline connections'),
(35, 'paintaing', 'wall painting interior and exterior'),
(36, 'Elecric works', 'setup electronic devices');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(20) NOT NULL auto_increment,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` bigint(30) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  PRIMARY KEY  (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(25, 'Jagadish', 9123456789, 'jagu@gmail.com', 'Hubli');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `hint a` varchar(255) NOT NULL,
  `hint b` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`, `hint a`, `hint b`) VALUES
('admin', '123', 'admin', 'who i am?', 'admin'),
('9123456789', '123456', 'customer', 'Your registered Email-Id', 'jagu@gmail.com'),
('abc123', '9876543210', 'provider', 'My registered Email Id', 'mahesh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(20) NOT NULL auto_increment,
  `customer_id` int(20) NOT NULL,
  `service_id` int(20) NOT NULL,
  `service_producer_id` int(20) NOT NULL,
  `rating_date` date NOT NULL,
  `reviews` varchar(100) NOT NULL,
  `ratings` int(10) NOT NULL,
  PRIMARY KEY  (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ratings`
--


-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(20) NOT NULL auto_increment,
  `customer_id` int(20) NOT NULL,
  `service_id` int(20) NOT NULL,
  `service_producer_id` int(20) NOT NULL,
  `request_date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY  (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `customer_id`, `service_id`, `service_producer_id`, `request_date`, `description`) VALUES
(1, 25, 26, 37, '2019-03-19', 'fhghggh');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(20) NOT NULL auto_increment,
  `service_name` varchar(50) NOT NULL,
  `service_description` varchar(100) NOT NULL,
  `category_id` int(20) NOT NULL,
  PRIMARY KEY  (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `category_id`) VALUES
(26, 'Plumbing', 'All types of plumbing services and contracts', 35),
(27, 'Electric Works', 'All types of electric works and contracts', 35),
(28, 'painting', 'wall paint', 35);

-- --------------------------------------------------------

--
-- Table structure for table `service_producers`
--

CREATE TABLE `service_producers` (
  `service_producer_id` int(20) NOT NULL auto_increment,
  `service_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_no` bigint(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `register_no` varchar(50) NOT NULL,
  PRIMARY KEY  (`service_producer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `service_producers`
--

INSERT INTO `service_producers` (`service_producer_id`, `service_id`, `name`, `contact_no`, `company_name`, `email`, `address`, `register_no`) VALUES
(37, 26, 'MAhesh H', 9876543210, 'ABC', 'mahesh@gmail.com', 'Dharwad', 'abc123');
