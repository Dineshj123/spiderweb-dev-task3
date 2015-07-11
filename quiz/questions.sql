-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 06:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `optionA` varchar(50) NOT NULL,
  `optionB` varchar(50) NOT NULL,
  `optionC` varchar(50) NOT NULL,
  `optionD` varchar(50) NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`) VALUES
(1, 'What is the capital of India?', 'Chennai', 'New Delhi', 'Mumbai', 'Calcutta', 'B'),
(2, 'Who is the prime minister of India?', 'Narendera Modi', 'Rahul Gandhi', 'Mamtha Banerjee', 'Manmohan Singh', 'A'),
(3, 'What does CSS mean?', 'Cascading Style Sheets', 'Cascading Style Sources', 'Cracking Software Sources', 'None of these', 'A'),
(4, 'When did JS appeared?', '1997', '1996', '1995', '1994', 'C'),
(5, 'What is the abbreviation of NSO?', 'National Security Organisation', 'National Security Office', 'National Social Organisation', 'National Safeman''s Organization', 'D');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
