-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 13 mrt 2017 om 01:46
-- Serverversie: 5.6.35
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `activity`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activitytracker`
--

CREATE TABLE `activitytracker` (
  `id` int(6) UNSIGNED NOT NULL,
  `My_Activities` varchar(255) NOT NULL,
  `Start_Date` varchar(255) DEFAULT NULL,
  `End_Date` varchar(255) DEFAULT NULL,
  `Time_spent_in_hours` varchar(255) DEFAULT NULL,
  `Percentage_Completed` varchar(255) DEFAULT NULL,
  `Pleasure` varchar(255) DEFAULT NULL,
  `Difficulty` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `activitytracker`
--

INSERT INTO `activitytracker` (`id`, `My_Activities`, `Start_Date`, `End_Date`, `Time_spent_in_hours`, `Percentage_Completed`, `Pleasure`, `Difficulty`, `Notes`) VALUES
(2, 'Activity tracker', '2017-02-27', '2017-03-09', '24', '85', '9', '8', 'Not completed');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `activitytracker`
--
ALTER TABLE `activitytracker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `activitytracker`
--
ALTER TABLE `activitytracker`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
