-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 mrt 2017 om 14:22
-- Serverversie: 10.1.19-MariaDB
-- PHP-versie: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlogger`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activities`
--

CREATE TABLE `activities` (
  `ActID` int(11) NOT NULL,
  `ActOmschrijving` varchar(100) NOT NULL,
  `ActNormTijd` float NOT NULL,
  `ActIDifficulty` int(12) NOT NULL,
  `ActIntroductionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `activities`
--

INSERT INTO `activities` (`ActID`, `ActOmschrijving`, `ActNormTijd`, `ActIDifficulty`, `ActIntroductionDate`) VALUES
(1, 'mysql', 40, 3, '2017-01-01'),
(2, 'pearl basics', 400, 4, '2016-12-04'),
(3, 'c sharp', 200, 3, '2017-03-07');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `PassWord` varchar(200) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UserLevel` int(11) NOT NULL DEFAULT '1',
  `ProfileImage` text NOT NULL,
  `Bio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Email`, `UserName`, `PassWord`, `TimeStamp`, `UserLevel`, `ProfileImage`, `Bio`) VALUES
(1, 'mark', 'laat', 'jonglaat', 'markie', '123', '2017-03-11 10:26:23', 1, '', 0),
(2, 'rudy', 'fernandez', 'rudy@barcelona.es', 'ruudje', '123', '2017-03-01 12:24:26', 1, 'aardige jongen enrome sprongkracht', 0),
(3, '3423', '', '', '', '', '2017-03-11 10:28:09', 1, '', 0),
(4, 'greg', '', '', '', '', '2017-03-11 10:28:16', 1, '', 0),
(5, 'kobe', 'Briant', 'KOBE@LAKERS.COM', 'KOBIE', '123', '2017-03-01 12:25:29', 2, 'gestopt ion 2016.Vel verdiend', 0),
(7, 'freddie', 'freddie', 'freddie', 'freddie', 'freddie', '2017-02-24 14:02:06', 0, '', 0),
(81, 'mark', 'mark', 'mark', 'markmark', '$2y$10$tlnxtuEoCXTChlbeGMCUfOA6Q6s2CB7CPMSonu7S6GIM8cZw1us.W', '2017-03-11 10:28:49', 2, '', 0),
(84, 'ollie', 'ollie', 'ollie', 'ollie', '$2y$10$Sw1O/G4yAQfCyuDyUrb8WOK60xzVL.WiVGfOrmBm8.aY/OHhX1b9q', '2017-03-11 11:24:17', 1, '', 0),
(85, 'freddie', 'freddie', 'freddie', 'freddie', '$2y$10$IPnm32oHFFGnfdqa32tMTu1lvBau6v8o.DZX4JJc8RkjSMGJnzGXG', '2017-03-13 10:10:38', 1, '', 0),
(86, 'freddie', 'freddie', 'freddie', 'freddie', '$2y$10$B1QqFUjj1VUCPifYx2BxS.NeE7C3ecOuxEd48.kmvvk2.xIf/PUF.', '2017-03-13 10:11:44', 1, '', 0),
(87, 'peter', 'peter', 'peter', 'peter', '$2y$10$2jQhR.oB2Rrv8C9oxOXcMOS7ofxyUWC8cvyvSBCp3EGOWA8sBSivq', '2017-03-13 10:19:38', 2, '', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `useractivities`
--

CREATE TABLE `useractivities` (
  `UserID` int(12) NOT NULL,
  `ActivityID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `useractivities`
--

INSERT INTO `useractivities` (`UserID`, `ActivityID`) VALUES
(12, 1),
(12, 2),
(12, 3),
(10, 1),
(10, 2),
(10, 3),
(15, 2),
(15, 1),
(81, 1),
(81, 1),
(81, 3),
(81, 1),
(81, 3),
(81, 1),
(87, 1),
(87, 2),
(87, 1),
(87, 2),
(84, 1),
(84, 2),
(84, 1),
(84, 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ActID`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `activities`
--
ALTER TABLE `activities`
  MODIFY `ActID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
