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
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `usersname` varchar(100) NOT NULL,
  `questid` int(4) NOT NULL,
  `answerstatus` int(1) NOT NULL,
  `answer` varchar(2) NOT NULL,
  `score` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `usersname`, `questid`, `answerstatus`, `answer`, `score`) VALUES
(36, 'krishna', 1, 1, 'B', 1),
(37, 'krishna', 2, 1, 'A', 2),
(38, 'krishna', 3, 1, 'A', 3),
(39, 'krishna', 4, 1, 'C', 4),
(40, 'krishna', 5, 1, 'D', 5),
(44, 'tuts', 1, 1, 'B', 1),
(45, 'tuts', 2, 1, 'D', 0),
(46, 'tuts', 4, 1, 'C', 1),
(47, 'tuts', 5, 1, 'D', 2),
(48, 'tuts', 3, 1, 'A', 3),
(49, 'dineshjnit', 1, 1, 'B', 1),
(50, 'dineshjnit', 2, 1, 'A', 2),
(51, 'dineshjnit', 4, 1, 'C', 3),
(52, 'dineshjnit', 5, 1, 'D', 4),
(53, 'dineshjnit', 3, 1, 'A', 5),
(54, 'dineshnit', 2, 1, 'A', 1),
(55, 'dineshnit', 3, 1, 'B', 0),
(56, 'dineshnit', 4, 1, 'C', 1),
(57, 'dineshnit', 1, 1, 'A', 0),
(58, 'dineshnit', 5, 1, 'D', 1),
(59, 'lol', 3, 1, 'B', -1),
(60, 'lol', 4, 1, 'C', 0),
(61, 'lol', 1, 1, 'B', 1),
(62, 'lol', 2, 1, 'A', 2),
(63, 'lol', 5, 1, 'A', 1),
(64, 'quiz', 1, 1, 'C', -1),
(65, 'quiz', 2, 1, 'C', -2),
(66, 'quiz', 5, 1, 'D', -1),
(67, 'quiz', 3, 1, 'A', 0),
(68, 'quiz', 4, 1, 'C', 1),
(69, 'test', 1, 1, 'B', 1),
(70, 'test', 2, 1, 'B', 0),
(71, 'test', 3, 1, 'A', 1),
(72, 'test', 4, 1, 'C', 2),
(73, 'test', 5, 1, 'D', 3),
(74, 'krish', 1, 1, 'B', 1),
(75, 'krish', 4, 1, 'D', 0),
(76, 'krish', 5, 1, 'D', 1),
(77, 'krishnaj197', 1, 1, 'B', 1),
(78, 'krishnaj197', 5, 1, 'D', 2),
(79, 'krishnaj197', 2, 1, 'A', 3),
(80, 'krishnaj197', 3, 1, 'A', 4),
(81, 'krishnaj197', 4, 1, 'C', 5),
(82, 'asd', 1, 1, 'B', 1),
(83, 'asd', 2, 1, 'C', 0),
(84, 'asd', 4, 1, 'C', 1),
(85, 'asd', 5, 1, 'D', 2),
(86, 'asd', 3, 1, 'A', 3),
(87, 'query', 1, 1, 'B', 1),
(88, 'query', 5, 1, 'C', 0),
(89, 'query', 2, 1, 'A', 1),
(90, 'query', 3, 1, 'A', 2),
(91, 'query', 4, 1, 'C', 3),
(92, 'qwerty', 1, 1, 'B', 1),
(93, 'qwerty', 2, 1, 'B', 0),
(94, 'qwerty', 3, 1, 'A', 1),
(95, 'qwerty', 4, 1, 'C', 2),
(96, 'qwerty', 5, 1, 'D', 3),
(97, 'ghostraider', 1, 1, 'B', 1),
(98, 'ghostraider', 4, 1, 'C', 2),
(99, 'ghostraider', 2, 1, 'A', 3),
(100, 'ghostraider', 3, 1, 'A', 4),
(101, 'ghostraider', 5, 1, 'D', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
