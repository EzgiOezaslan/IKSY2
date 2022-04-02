<?php

class Copygebuehren {

	public static function berechneGebuehr($anzahlExemplare, $anzahlSeiten, $farbe, $bindung, $rabatt) {
		DEFINE('PREIS_SW', 0.02);
		DEFINE('PREIS_FARBE', 0.07);
		DEFINE('PREIS_BINDUNG', 3.5);
		
		$anzahlKopien = $anzahlSeiten * $anzahlExemplare;
		
		if ($farbe) {
			$ergebnis = $anzahlKopien * PREIS_FARBE;
		} else {
			$ergebnis = $anzahlKopien * PREIS_SW;
		}
		
		if ($bindung) {
			$ergebnis = $ergebnis + $anzahlExemplare * PREIS_BINDUNG;
		}
		
		$ergebnis = $ergebnis * (1 - $rabatt / 100);
		
		return $ergebnis;
	}
}
?>