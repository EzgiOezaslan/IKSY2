-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 02. Feb 2021 um 12:03
-- Server-Version: 8.0.21-0ubuntu0.20.04.4
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `wiInf_Software`
--
CREATE DATABASE IF NOT EXISTS `wiInf_Software` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wiInf_Software`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkt`
--

DROP TABLE IF EXISTS `produkt`;
CREATE TABLE `produkt` (
  `produktNr` tinyint NOT NULL,
  `name` text NOT NULL,
  `einkaufspreis` double NOT NULL,
  `kategorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `produkt`
--

INSERT INTO `produkt` (`produktNr`, `name`, `einkaufspreis`, `kategorie`) VALUES
(1, 'PDF Reader', 26, 'Utilities'),
(2, 'PC Kalk', 89, 'Office'),
(3, 'Windows 4711', 112, 'Betriebssystem'),
(4, 'Windows 0815', 87, 'Betriebssystem'),
(5, 'PC Writer', 58, 'Office');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`produktNr`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produktNr` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
