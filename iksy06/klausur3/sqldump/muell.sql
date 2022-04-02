SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Datenbank: `wiInf_Muell`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Haushalt`
--

CREATE TABLE IF NOT EXISTS `Haushalt` (
  `Nr` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL DEFAULT '',
  `Strasse` varchar(100) NOT NULL DEFAULT '',
  `Hausnummer` varchar(100) NOT NULL DEFAULT '',
  `PLZ` bigint(5) NOT NULL DEFAULT '0',
  `Personen` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Nr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `Haushalt`
--

INSERT INTO `Haushalt` (`Nr`, `Name`, `Strasse`, `Hausnummer`, `PLZ`, `Personen`) VALUES
(1, 'Mustermann', 'Lennershofstr.', '140', 44801, 5),
(2, 'Meier', 'Universitätsstr.', '100', 44801, 2);
