-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 21, 2017 at 08:38 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `init`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_login`
-- 

CREATE TABLE `admin_login` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin_login`
-- 

INSERT INTO `admin_login` (`email`, `password`) VALUES 
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `cat_table`
-- 

CREATE TABLE `cat_table` (
  `id` int(10) NOT NULL auto_increment,
  `cat_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `cat_table`
-- 

INSERT INTO `cat_table` (`id`, `cat_name`) VALUES 
(3, 'cat1'),
(5, 'cat2');

-- --------------------------------------------------------

-- 
-- Table structure for table `march_register`
-- 

CREATE TABLE `march_register` (
  `mid` int(10) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `march_register`
-- 

INSERT INTO `march_register` (`mid`, `name`, `company`, `phone`, `city`, `email`, `password`) VALUES 
(1, 'bb', 'bbb', 'bbb', 'bbb', 'bb', 'bb');

-- --------------------------------------------------------

-- 
-- Table structure for table `sub_cat_table`
-- 

CREATE TABLE `sub_cat_table` (
  `id` int(10) NOT NULL auto_increment,
  `cat_name` varchar(100) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `sub_cat_table`
-- 

INSERT INTO `sub_cat_table` (`id`, `cat_name`, `sub_cat_name`) VALUES 
(1, 'cat1', 'subcat2');
