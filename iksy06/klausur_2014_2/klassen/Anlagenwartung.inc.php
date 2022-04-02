<?php
class Anlagenwartung
{
	public static function berechneUmsatz($gesamtarbeitszeit, $nichtImWartungsvertrag, $kundengrundwartung, $grundpreis)
	{
		DEFINE ('AUFSCHLAG_KUNDENGRUNDWARTUNG', 0.1);
		DEFINE ('AUFSCHLAG_NICHT_IM_WARTUNGSVERTRAG', 0.5);
		
		$umsatz = $gesamtarbeitszeit * $grundpreis + $nichtImWartungsvertrag * AUFSCHLAG_NICHT_IM_WARTUNGSVERTRAG * $grundpreis;
		
		if ($kundengrundwartung){
			$umsatz = $umsatz * (1 +AUFSCHLAG_KUNDENGRUNDWARTUNG) ;
		}
		
		return $umsatz;
	}
}
?>