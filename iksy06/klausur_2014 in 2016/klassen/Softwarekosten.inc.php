<?php
class Softwarekosten
{
    public static function berechnePreis($vertragspreis, $vertragsart, $anzahlMitarbeiter, $reaktionszeitOk, $ersatzteilpreis)
	{

	    
		DEFINE ('VERTRAG_A', 70);
		DEFINE ('VERTRAG_B', 90);
		DEFINE ('VERTRAG_C', 100);
		
		DEFINE ('ERSATZ', 0.2);
		DEFINE ('SONDER_REAKTION', 100);
		
	
		
		if ($vertragsart == "A"){
		    $stundenpreis = VERTRAG_A;
		}
		else if ($vertragsart =="B"){
		    $stundenpreis = VERTRAG_B;
		}
		else {
		    $stundenpreis = VERTRAG_C;
		}
		
		
		$kosten=  $anzahlMitarbeiter*$stundenpreis + $ersatzteilpreis * (1+ERSATZ);
		$gewinn= $vertragspreis-$kosten;
		

		if(!$reaktionszeitOk){
		    $preis= $gewinn-SONDER_REAKTION;
		}
		
		
		return $gewinn;
	}
}
?>