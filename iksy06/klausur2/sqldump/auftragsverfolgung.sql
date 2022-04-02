-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Jun 2018 um 08:21
-- Server Version: 10.0.34-MariaDB
-- PHP-Version: 5.5.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `wiInf_Auftragsverfolgung`
--
CREATE DATABASE IF NOT EXISTS `wiInf_Auftragsverfolgung` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wiInf_Auftragsverfolgung`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kunde`
--

CREATE TABLE IF NOT EXISTS `Kunde` (
  `KundeNr` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL DEFAULT '',
  `KundeartNr` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `Strasse` varchar(255) NOT NULL DEFAULT '',
  `PLZ` varchar(5) NOT NULL DEFAULT '',
  `Ort` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`KundeNr`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `Kunde`
--

INSERT INTO `Kunde` (`KundeNr`, `Name`, `KundeartNr`, `Strasse`, `PLZ`, `Ort`) VALUES
(1, 'Meier AG', 1, 'HHJH hhh', '44565', 'Bochum');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kundeart`
--

CREATE TABLE IF NOT EXISTS `Kundeart` (
  `KundeartNr` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `Bezeichnung` varchar(255) NOT NULL DEFAULT '',
  `Preis` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`KundeartNr`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `Kundeart`
--

INSERT INTO `Kundeart` (`KundeartNr`, `Bezeichnung`, `Preis`) VALUES
(1, 'Gold', 100),
(2, 'Silber', 150);
