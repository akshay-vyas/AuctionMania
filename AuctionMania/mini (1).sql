-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 03:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `assemble`
--

CREATE TABLE IF NOT EXISTS `assemble` (
  `aid` int(25) NOT NULL AUTO_INCREMENT,
  `pid` int(25) NOT NULL,
  `cid` int(25) NOT NULL,
  `uid` int(25) NOT NULL,
  `h_price` int(25) NOT NULL,
  `temp` date NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `assemble`
--

INSERT INTO `assemble` (`aid`, `pid`, `cid`, `uid`, `h_price`, `temp`) VALUES
(88, 85, 15, 4, 20000, '2018-04-10'),
(89, 82, 14, 4, 0, '2018-05-03'),
(90, 84, 12, 3, 0, '2019-02-02'),
(91, 82, 14, 3, 600000, '2018-05-03'),
(92, 85, 15, 3, 40000, '2018-04-10'),
(93, 87, 14, 4, 300000, '2019-02-02'),
(94, 87, 14, 9, 90000000, '2019-02-02'),
(95, 89, 15, 4, 70000, '2019-02-02'),
(96, 84, 12, 9, 0, '2019-02-02'),
(97, 91, 15, 9, 0, '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(25) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cat_name`) VALUES
(12, 'paint'),
(13, 'car'),
(14, 'jwellery'),
(15, 'player');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `img` int(255) NOT NULL AUTO_INCREMENT,
  `pid` int(25) NOT NULL,
  `images` varchar(500) NOT NULL,
  PRIMARY KEY (`img`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(25) NOT NULL AUTO_INCREMENT,
  `uid` int(25) NOT NULL,
  `cid` int(25) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_desc` varchar(200) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `p_aprice` varchar(9) NOT NULL,
  `p_bprice` varchar(9) NOT NULL,
  `p_start` date NOT NULL,
  `p_end` date NOT NULL,
  `p_status` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `uid`, `cid`, `p_name`, `p_desc`, `pic`, `p_aprice`, `p_bprice`, `p_start`, `p_end`, `p_status`) VALUES
(79, 3, 13, 'Audi Q3', '2014 Audi Q3 TDI S Line Edition Quattro S-T, Diesel 140 HP, 5d, Auto, Blanco', 'car2.jpg', '5000000', '5000000', '2018-02-02', '2018-05-02', 'rejected'),
(80, 3, 12, 'John Wayne Gacy (1942 - 1994)', 'Lot 180: John Wayne Gacy (1942-1994) "Pogo the Clown', 'paint1.jpg', '5000', '10000', '2019-01-01', '2019-02-02', 'confirmed'),
(81, 3, 14, 'Diamond', 'j', 'j1.jpg', '10000', '100000', '2018-01-01', '2018-05-02', 'confirmed'),
(82, 1, 14, 'Ruby Necklace', 'A Magnificent Diamond Emerald Bead, ', 'j2.jpg', '59000', '600000', '2018-02-01', '2018-05-03', 'confirmed'),
(83, 1, 13, 'Ford Fiesta TDCI VAN', '2016 model , 1.5 Diesel 75 HP, 3d, Manual, Blanco', 'car4.jpg', '10000', '15000', '2017-02-02', '2019-02-02', 'confirmed'),
(84, 1, 12, 'oil paint', 'French School, Portrait of Girl & Pony- Oil', 'paint5.jpg', '5000', '6000', '2017-02-02', '2019-02-02', 'confirmed'),
(85, 1, 15, 'Dhoni', 'finisher', 'player1.jpg', '100000', '10000', '2018-03-04', '2018-04-10', 'confirmed'),
(86, 3, 12, 'redirect', 'https://pesuacademy.com/Academy/', 'car3.jpg', '50', '50', '2018-01-01', '2019-01-01', 'pending'),
(87, 3, 14, 'p1', ' p desc', 'j4.jpg', '1000', '50000', '2018-01-01', '2019-02-02', 'confirmed'),
(89, 3, 15, 'demo1', 'vds', 'j1.jpg', '500', '60000', '2018-03-30', '2019-02-02', 'confirmed'),
(90, 3, 13, 'car', 'high mileage car', 'car3.jpg', '5000', '10000', '2018-02-01', '2019-02-02', 'confirmed'),
(91, 3, 15, 'kholi', 'fine player', 'virat.jpg', '500000', '1600000', '2018-01-01', '2019-02-02', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(25) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dp` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `contact`, `address`, `dp`, `pwd`, `type`) VALUES
(1, 'akshay', 'akshay@gmail.com', '8123619432', 'gadag', 'nin', '123', 'user'),
(3, 'sonu', 'sonu@gmail.com', '812318148', 'gadag', 'no', '123', 'user'),
(4, 'indu', 'indu@gmail.com', '8123326328', 'mysore', '', '123', 'user'),
(5, 'admin', 'admin@gmail.com', '812318148', 'gadag', 'null', '123', 'admin'),
(9, 'vyas', 'vyas@gmail.com', '1234567890', 'vivekanad road 1st cross', '', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `won`
--

CREATE TABLE IF NOT EXISTS `won` (
  `oid` int(50) NOT NULL AUTO_INCREMENT,
  `pid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `cid` int(50) NOT NULL,
  `f_amount` varchar(50) NOT NULL,
  `f_date` varchar(50) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
