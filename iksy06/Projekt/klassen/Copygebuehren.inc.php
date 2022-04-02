<?php

class Copygebuehren {

	public static function berechneGebuehr($anzahlExemplare, $anzahlSeiten, $farbe, $bindung) {
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
	
		return $ergebnis;
	}
	
	public static function gewaehreRabatt($preis, $anzahlExemplare, $anzahlSeiten, $kundenRabatt)
	{
	    DEFINE('RABATT_AB_RABATT_GRENZE', 0.2);
	    DEFINE('RABATT_SONST', 0);
	    DEFINE('RABATT_GRENZE', 100);
	    
	    $preis=$preis*(1-$kundenRabatt/100);
	    
	    if($anzahlExemplare*$anzahlSeiten>RABATT_GRENZE)
	    {
	        $rabatt=RABATT_AB_RABATT_GRENZE;
	    }
	    else 
	    {
	        $rabatt=RABATT_SONST;
	    }
	    
	    $preis=$preis*(1-$rabatt);
	    
	    return $preis;
	}
}
?>