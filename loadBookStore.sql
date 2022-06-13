-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 11:13 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

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
(5, 'crliberty', 'Connor', 'Liberty', 'connor@mail.com', '$1$rasmusle$rKFtgiTdvXO509cNbJbBb1', 'admin'),
(7, 'jane', '', '', 'jane@mail.com', '$1$rasmusle$0GYWlU.VOlg2Kw0dULQZb1', 'admin'),
(8, 'user', '', '', 'user@mail.com', '$1$rasmusle$RWiTrDf2BNntcaEjN/CLk.', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tblbook`
--

TRUNCATE TABLE `tblbook`;
--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`book_id`, `book_title`, `book_price`, `book_description`, `short_desc`, `book_image`) VALUES
(16, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(21, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(22, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(27, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(28, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(33, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(34, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(39, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(41, 'Project Management 101', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_1_unsplash.jpg'),
(42, 'Web dev 102', 600, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_12_unsplash.jpg'),
(43, 'Programming 101', 120, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_3_unsplash.jpg'),
(44, 'Oracle 102', 300, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_2_unsplash.jpg'),
(46, 'Oracle 102', 300, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_2_unsplash.jpg'),
(47, 'Programming 101', 120, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_3_unsplash.jpg'),
(48, 'Web dev 102', 600, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_12_unsplash.jpg'),
(49, 'Project Management 101', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_1_unsplash.jpg'),
(50, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(51, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(52, 'Project Management 101', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_1_unsplash.jpg'),
(53, 'Web dev 102', 600, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_12_unsplash.jpg'),
(54, 'Programming 101', 120, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_3_unsplash.jpg'),
(55, 'Programming 101', 120, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_3_unsplash.jpg'),
(56, 'Web dev 102', 600, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_12_unsplash.jpg'),
(57, 'Project Management 101', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_1_unsplash.jpg'),
(58, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(59, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(60, 'Project Management 101', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_1_unsplash.jpg'),
(61, 'Web dev 102', 600, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_12_unsplash.jpg'),
(62, 'Programming 101', 120, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_3_unsplash.jpg'),
(63, 'Oracle 102', 300, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_2_unsplash.jpg'),
(64, 'Oracle 102', 300, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_2_unsplash.jpg'),
(65, 'Programming 101', 120, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_3_unsplash.jpg'),
(66, 'Web dev 102', 600, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_12_unsplash.jpg'),
(67, 'Project Management 101', 450, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula        ', 'book_1_unsplash.jpg'),
(68, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(69, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(70, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(71, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(72, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(73, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(74, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg'),
(75, 'Made of Silence', 350, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam ligula, congue quis justo et, condimentum commodo ante.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'book_7_unsplash.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tblorder`
--

TRUNCATE TABLE `tblorder`;
--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(1, 722, 'T809231', 'pending', 109),
(2, 200, 'T33230', 'complete', 100),
(4, 12222, 'T000001', 'complete', 100000);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tbluser`
--

TRUNCATE TABLE `tbluser`;
--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `user_firstname`, `studentnumber`, `username`, `user_role`, `user_password`, `user_status`) VALUES
(1, 'Jane', '2010234', 'Jane2022', 'student', '$1$rasmusle$C9hcexA9bZvj9kF8X2XPw0', 'verified'),
(5, 'Maggy', 'ST0001', 'nas', 'student', '$1$rasmusle$rKFtgiTdvXO509cNbJbBb1', 'verified'),
(6, 'Denzel', 'ST0002', 'denny', 'student', '$1$rasmusle$RWiTrDf2BNntcaEjN/CLk.', 'pending'),
(8, '', 'ST0101', 'Student101', 'student', '$1$rasmusle$RWiTrDf2BNntcaEjN/CLk.', 'pending');

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
