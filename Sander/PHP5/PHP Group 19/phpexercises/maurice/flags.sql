-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 12:54 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flagdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE `flags` (
  `ID` int(11) NOT NULL,
  `flagname` varchar(255) NOT NULL,
  `flagimage` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flags`
--

INSERT INTO `flags` (`ID`, `flagname`, `flagimage`, `category`) VALUES
(1, 'cobra', 'cobra.gif', 'cartoon'),
(2, 'golf', 'golf.gif', 'sports'),
(3, 'olympic', 'olympic.gif', 'sports'),
(4, 'UN', 'UN.gif', 'organizations'),
(5, 'baratheon', 'baratheon.jpg', 'tvseries'),
(6, 'batman', 'batman.jpg', 'superhero'),
(7, 'jediorder', 'jediorder.jpg', 'movies'),
(8, 'lannister', 'lannister.jpg', 'tvseries'),
(9, 'lbgt', 'lbgt.jpg', 'organizations'),
(10, 'strawhat', 'strawhat.jpg', 'manga'),
(11, 'superman', 'superman.jpg', 'superhero'),
(12, 'targaryen', 'targaryen.jpg', 'tvseries'),
(13, 'worldgovernment', 'worldgovernment.jpg', 'manga'),
(14, 'xmen', 'xmen.jpg', 'superhero'),
(15, 'bigmom', 'bigmom.png', 'manga'),
(16, 'blackbeard', 'blackbeard.png', 'manga'),
(17, 'bowser', 'bowser.png', 'videogame'),
(18, 'mario', 'mario.png', 'videogame'),
(19, 'rebelalliance', 'rebelalliance.png', 'movies'),
(20, 'redcross', 'redcross.png', 'organizations'),
(21, 'shanks', 'shanks.png', 'manga'),
(22, 'stark', 'stark.png', 'tvseries'),
(23, 'tyrell', 'tyrell.png', 'tvseries'),
(24, 'unicef', 'unicef.png', 'organizations'),
(25, 'wwf', 'wwf.png', 'organizations');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flags`
--
ALTER TABLE `flags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
