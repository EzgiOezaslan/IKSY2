 
-- phpMyAdmin SQL Dump
-- version 2.11.9.3
-- http://www.phpmyadmin.net
--
-- Host: pav050
-- Erstellungszeit: 01. Juli 2015 um 13:16
-- Server Version: 5.5.33
-- PHP-Version: 5.5.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Datenbank: `wiInf_Miete`
--
CREATE DATABASE `wiInf_Miete` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wi_Miete`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Wohnanlage`
--

CREATE TABLE IF NOT EXISTS `Wohnanlage` (
  `WohnanlageNr` int(11) NOT NULL AUTO_INCREMENT,
  `Strasse` varchar(30) NOT NULL,
  `Gesamtwohnflaeche` int(11) NOT NULL,
  `Gesamtnebenkosten` double NOT NULL,
  PRIMARY KEY (`WohnanlageNr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `Wohnanlage`
--

INSERT INTO `Wohnanlage` (`WohnanlageNr`, `Strasse`, `Gesamtwohnflaeche`, `Gesamtnebenkosten`) VALUES
(1, 'Lennershofstrasse 823', 1323, 2163),
(2, 'Ilse-Brandström-Str. 38', 489, 394),
(3, 'Königsallee 83', 4992, 6733),
(4, 'Karl-Heinz-Strasse 43', 120, 80);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Wohung`
--

CREATE TABLE IF NOT EXISTS `Wohung` (
  `WohnungNr` int(11) NOT NULL AUTO_INCREMENT,
  `Adresse` varchar(30) NOT NULL,
  `Wohneinheit` varchar(30) NOT NULL,
  `Wohnflaeche` int(11) NOT NULL,
  `Gesamtwohnflaeche` int(11) NOT NULL,
  `Ausstattung` varchar(20) NOT NULL,
  `Gesamtnebenkosten` double NOT NULL,
  PRIMARY KEY (`WohnungNr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `Wohung`
--

INSERT INTO `Wohung` (`WohnungNr`, `Adresse`, `Wohneinheit`, `Wohnflaeche`, `Gesamtwohnflaeche`, `Ausstattung`, `Gesamtnebenkosten`) VALUES
(1, 'Lennershofstrasse 140', 'EG links', 123, 1812, 'Gehoben', 1358),
(2, 'Lennershofstrasse 167', '1OG rechts', 78, 1332, 'Mittel', 1129),
(3, 'Lennershofstrasse 173', 'DG rechts', 25, 706, 'Einfach', 1633),
(4, 'Elsa-Brandström-Str. 32', '2OG links', 73, 3020, 'Mittel', 3462);
