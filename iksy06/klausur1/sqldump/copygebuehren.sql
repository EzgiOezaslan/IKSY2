SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Datenbank: `wiInf_Kopierladen`
--

CREATE DATABASE IF NOT EXISTS `wiInf_Kopierladen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wiInf_Kopierladen`;
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kunde`
--

CREATE TABLE IF NOT EXISTS `Kunde` (
  `KundeNr` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL DEFAULT '',
  `Rabatt` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`KundeNr`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `Kunde`
--

INSERT INTO `Kunde` (`KundeNr`, `Name`, `Rabatt`) VALUES
(1, 'Mustermann', 20),
(2, 'Meier', 10);
