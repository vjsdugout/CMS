-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2012 at 03:25 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sajna_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminId` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`AdminId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `cStatus` int(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `cStatus`) VALUES
(1, 'raju', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contlist`
--

CREATE TABLE IF NOT EXISTS `contlist` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `RegistredOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contlist`
--

INSERT INTO `contlist` (`Id`, `Name`, `EmailId`, `ContactNo`, `Address`, `City`, `Description`, `RegistredOn`) VALUES
(1, 'dasari pothuraju', 'dasaripothuraju2010@gmail.com', '9700963601', 'Guntur', 'hyderabad', 'It very nice', '2012-03-08 13:04:40'),
(2, 'Suresh', 'suresh@gmail.com', '9652764696', 'Hydbad', 'Secbad', 'It very small', '2012-03-08 19:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `menulist`
--

CREATE TABLE IF NOT EXISTS `menulist` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `CatId` int(10) NOT NULL,
  `pStatus` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menulist`
--

INSERT INTO `menulist` (`Id`, `Name`, `Description`, `Price`, `CatId`, `pStatus`) VALUES
(1, 'Butter Chikeen', 'It very hot', '250.00', 0, ''),
(2, 'Butter Chikeen', 'It very hot', '250.00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `CatId` int(5) NOT NULL,
  `pStatus` int(5) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Description`, `Price`, `CatId`, `pStatus`) VALUES
(2, 'ButterChikeen', 'very nice\r\n\r\n', '250.00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resevationlist`
--

CREATE TABLE IF NOT EXISTS `resevationlist` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Zipcode` varchar(20) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Events` varchar(50) NOT NULL,
  `Visit` varchar(20) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Nofp` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `resevationlist`
--

INSERT INTO `resevationlist` (`Id`, `Name`, `ContactNo`, `Address`, `Zipcode`, `EmailId`, `Events`, `Visit`, `Date`, `Nofp`) VALUES
(1, 'dasaripothuraju', '9700963601', 'Qn:305,southlallaguda,\r\nsecbad', '500017', 'dasaripothuraju2010@gmail.com', 'Lunch', 'Yes', '8_3-2011', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
