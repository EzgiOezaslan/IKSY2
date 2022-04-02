-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 06. Jul 2021 um 15:42
-- Server-Version: 8.0.25-0ubuntu0.20.04.1
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
-- Datenbank: `wiInf_Versandhandel`
--
CREATE DATABASE IF NOT EXISTS `wiInf_Versandhandel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wiInf_Versandhandel`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Paketdienstleister`
--

DROP TABLE IF EXISTS `Paketdienstleister`;
CREATE TABLE `Paketdienstleister` (
  `PaketdienstleisterNr` tinyint UNSIGNED NOT NULL,
  `Bezeichnung` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Paketpreis` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `Paketdienstleister`
--

INSERT INTO `Paketdienstleister` (`PaketdienstleisterNr`, `Bezeichnung`, `Paketpreis`) VALUES
(1, 'WPS', 5.99),
(2, 'UPS', 3.99),
(3, 'DPD', 3.49),
(4, 'DHL', 4.99),
(5, 'GLS', 5.49);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Paketdienstleister`
--
ALTER TABLE `Paketdienstleister`
  ADD PRIMARY KEY (`PaketdienstleisterNr`),
  ADD UNIQUE KEY `Bezeichnung` (`Bezeichnung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
