<?php

class Mietberechnung {

	public static function berechneMiete($wohnflaeche, $ausstattung, $gesamtwohnflaeche, $gesamtnebenkosten) {
		DEFINE('MIETE_EINFACH', 8.7);
		DEFINE('MIETE_MITTEL', 10.2);
		DEFINE('MIETE_GEHOBEN', 11.3);
		DEFINE('AUFSCHLAG_KLEINE_WOHNUNG', 0.1);
		DEFINE('GRENZE_KLEINE_WOHNUNG', 50);
		
		if ($ausstattung == "einfach") {
			$grundpreis = MIETE_EINFACH;
		} else if ($ausstattung == "mittel") {
			$grundpreis = MIETE_MITTEL;
		} else {
			$grundpreis = MIETE_GEHOBEN;
		}
		
		$kaltmiete = $wohnflaeche * $grundpreis;
		if ($wohnflaeche < GRENZE_KLEINE_WOHNUNG) {
			$kaltmiete = $kaltmiete * (1 + AUFSCHLAG_KLEINE_WOHNUNG);
		}
		
		$nebenkosten = $wohnflaeche / $gesamtwohnflaeche * $gesamtnebenkosten;
		
		return $kaltmiete + $nebenkosten;
	}
}
?>