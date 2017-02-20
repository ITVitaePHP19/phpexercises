-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 10:21 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php19`
--

-- --------------------------------------------------------

--
-- Table structure for table `yahtzeescores`
--

CREATE TABLE `yahtzeescores` (
  `ID` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yahtzeescores`
--

INSERT INTO `yahtzeescores` (`ID`, `name`, `score`) VALUES
(11, 'Randy Random', 90),
(10, 'Dick McClick', 131),
(14, 'Randy Random', 90),
(15, 'Randy Random', 90),
(19, 'Randy Random', 90),
(20, 'Randy Random', 90),
(21, 'Randy Random', 90),
(22, 'Randy Random', 90),
(23, 'Randy Random', 90),
(24, 'Beat the Cheat', 280),
(25, 'Chris P Bacon', 204),
(26, 'Sue Hyu', 266);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yahtzeescores`
--
ALTER TABLE `yahtzeescores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yahtzeescores`
--
ALTER TABLE `yahtzeescores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
