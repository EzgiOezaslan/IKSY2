<?php

class Gebaeudemanagement {

	public static function berechneGewinn($anzahlMitarbeiter, $preisErsatzteile, $reaktionszeitOK, $vertragsart, $vertragspreis) {
		DEFINE('MITARBEITERKOSTEN_A', 70);
		DEFINE('MITARBEITERKOSTEN_B', 90);
		DEFINE('MITARBEITERKOSTEN_C', 100);
		DEFINE('AUFSCHLAG_ERSATZTEILE', 0.2);
		DEFINE('POENALE_REAKTIONSZEIT', 100);
		
		if ($vertragsart == "A") {
			$stundenpreis = MITARBEITERKOSTEN_A;
		} else if ($vertragsart == "B") {
			$stundenpreis = MITARBEITERKOSTEN_B;
		} else {
			$stundenpreis = MITARBEITERKOSTEN_C;
		}

		$kosten = $anzahlMitarbeiter*$stundenpreis + $preisErsatzteile * (1+AUFSCHLAG_ERSATZTEILE);
		$gewinn = $vertragspreis - $kosten;

		if (! $reaktionszeitOK) {
			$gewinn = $gewinn - POENALE_REAKTIONSZEIT;
		}
		
		return $gewinn;
	}
}
?>