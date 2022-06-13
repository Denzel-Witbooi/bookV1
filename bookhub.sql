-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 01:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookhub`
--
CREATE DATABASE IF NOT EXISTS `bookhub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookhub`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `admin_firstname` varchar(255) NOT NULL,
  `admin_lastname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tbladmin`
--

TRUNCATE TABLE `tbladmin`;
--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`admin_id`, `username`, `admin_firstname`, `admin_lastname`, `admin_email`, `admin_password`, `admin_role`) VALUES
(1, 'Fred101', 'Fred', 'Jones', 'fred@mail.com', '$1$rasmusle$Jc8j4AfVj2TSAL43VaUFG0', 'admin'),
(4, 'mickey', 'Mykle', 'Singh', 'mickey@mail.com', '$1$rasmusle$REaQlfirpH5t7ef1xDkN50', 'admin'),
(5, 'crliberty', '', '', 'connor@mail.com', '$1$rasmusle$Jc8j4AfVj2TSAL43VaUFG0', 'pending'),
(6, 'zero', '', '', 'zero@mail.com', '$1$rasmusle$Jc8j4AfVj2TSAL43VaUFG0', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

DROP TABLE IF EXISTS `tblbook`;
CREATE TABLE IF NOT EXISTS `tblbook` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(255) NOT NULL,
  `book_price` float NOT NULL,
  `book_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `book_image` varchar(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tblbook`
--

TRUNCATE TABLE `tblbook`;
--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`book_id`, `book_title`, `book_price`, `book_description`, `short_desc`, `book_image`) VALUES
(1, 'PHP ', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'web2.png'),
(3, 'PHP ', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'web2.png'),
(4, 'PHP ', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'web2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

DROP TABLE IF EXISTS `tblorder`;
CREATE TABLE IF NOT EXISTS `tblorder` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tblorder`
--

TRUNCATE TABLE `tblorder`;
--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(1, 722, 'T809231', 'complete', 109),
(2, 200, 'T33230', 'complete', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(255) NOT NULL,
  `studentnumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tbluser`
--

TRUNCATE TABLE `tbluser`;
--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `user_firstname`, `studentnumber`, `username`, `user_role`, `user_password`, `user_status`) VALUES
(1, 'Jane', '2010234', 'Jane2022', 'student', '$1$rasmusle$REaQlfirpH5t7ef1xDkN50', 'pending'),
(5, 'Maggy', 'ST0001', 'nas', 'student', '$1$rasmusle$rKFtgiTdvXO509cNbJbBb1', 'verified'),
(6, 'Denzel', 'ST0002', 'denny', 'student', '$1$rasmusle$RWiTrDf2BNntcaEjN/CLk.', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(255) NOT NULL,
  `studentnumber` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL DEFAULT 'unverified',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
