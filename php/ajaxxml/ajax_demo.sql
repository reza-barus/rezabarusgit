-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2011 at 03:04 AM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `age`, `hometown`, `job`) VALUES
(1, 'reza', 'barus', '24', 'slipi', 'developer'),
(2, 'john ', 'mayer', '30', 'Los Angeles', 'Musician'),
(3, 'Joe', 'Satriani', '40', 'New York', 'Guitarist'),
(4, 'Nuno', 'Bettencourt', '40', 'Porto', 'Musician'),
(11, ' dua', ' dua', ' dua', ' dua', ' dua'),
(14, ' xmlsatu', ' xmlsatu', ' xmlsatu', ' xmlsatu', ' xmlsatu'),
(13, ' dua', ' dua', ' dua', ' dua', ' dua'),
(15, ' xmldua', ' xmldua', ' xmldua', ' xmldua', ' xmldua');
