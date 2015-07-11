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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `usersname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `usersname`, `password`) VALUES
(1, 'dinesh', 'adcd7048512e64b48da55b027577886ee5a36350'),
(2, 'ganeshj', '379d0581e45780207fe175f3aef627bd4785e95d'),
(3, 'dineshj', '3fd782df9d66d3cb66bb0bc203afb3ce4f695af8'),
(4, 'krishna', 'c5766602be28cf61bddc5d62e41ca34e14f19e13'),
(6, 'tutguyz', 'fe703d258c7ef5f50b71e06565a65aa07194907f'),
(7, 'krishnaj', '5c1d073c4f7f1dda6a1accc64f70b0d14d1ce38f'),
(8, 'tuts', 'f86c53b50f776206dcce713074ab3d0b9123cc2a'),
(9, 'dineshjnit', 'ab29469f70a0ad2533e5d24db279075b07526cba'),
(10, 'dineshnit', 'cf607419915a4c408ae95cf03315e218f27ee29e'),
(11, 'lol', '2620c5f1018ab54ff54a9662d1530fff2f1fd95a'),
(12, 'quiz', '39185eadc1b79f587530e59447a1ece6ccf96fa7'),
(13, 'test', '4028a0e356acc947fcd2bfbf00cef11e128d484a'),
(14, 'krish', 'ea358720094dd19118c5c93c7ee38e99d4172709'),
(15, 'krishnaj197', '654f86d56843cfaa62d8ef6feaea37260354ce75'),
(16, 'asd', 'ceedf12f8fe3dc63d35b2567a59b93bd62ff729a'),
(17, 'query', '52a7b7a0c3bc8f88be2b23c2313bf449ec8be3c8'),
(18, 'qwerty', '7186ebfb69adb98029cce10975245bf1e6c44194'),
(19, 'ghostraider', 'fe703d258c7ef5f50b71e06565a65aa07194907f'),
(20, 'avast', 'eb35a4c206050a5a3ea09b80ace38ebe83751bc2'),
(21, 'bob', 'cbbf428054383c22583df65ccbfb7c2fecebf3b8'),
(22, 'blob', '5411c0cbe60b7e1f75148e56ef91ceca43fa1bb5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
