<?php

class Kleinbrennerei {

    public static function holePreis($link, $produktNr)
    {
		$query="Select preisProFlasche 
                from produkt
                where produktNr=$produktNr";
		return DBFunctions::getFirstFieldOfResult($link, $query);
	}
	
	public static function berechneGesamtpreis($preisObstler, $anzahlObstler, $preisQuitte, $anzahlQuitte, $geschenkverpackung)
	{
	    
	    DEFINE('VERSANDKOSTEN_GRENZE_1', 4);
	    DEFINE('VERSANDKOSTEN_GRENZE_2', 6);
	    DEFINE('VERSANDKOSTEN_GRENZE_3', 10);
	    
	    DEFINE('VERSANDKOSTEN_1', 6.50);
	    DEFINE('VERSANDKOSTEN_2', 7.80);
	    DEFINE('VERSANDKOSTEN_3', 8,65);
	    DEFINE('VERSANDKOSTEN_4', 0.00);
	    
	    DEFINE('RABATT_SONST', 0.05);
	    DEFINE('RABATT_GRENZE', 200);
	    
	    DEFINE('ZUSCHLAG_GESCHENKVERPACKUNG', 3.50);
	    
	  
	    $preis=$anzahlObstler*$preisObstler+$anzahlQuitte*$preisQuitte;
	    
	    $gesamtAnzahlFlaschen=$anzahlObstler+$anzahlQuitte;
	    if ($gesamtAnzahlFlaschen<=VERSANDKOSTEN_GRENZE_1)
	    {
	        $versandkosten=VERSANDKOSTEN_1;
	    }
	    elseif($gesamtAnzahlFlaschen<=VERSANDKOSTEN_GRENZE_2)
	    {
	        $versandkosten=VERSANDKOSTEN_2;
	    }
	    elseif($gesamtAnzahlFlaschen<=VERSANDKOSTEN_GRENZE_3)
	    {
	        $versandkosten=VERSANDKOSTEN_3;
	    }
	    else
	    {
	        $versandkosten=VERSANDKOSTEN_4;
	    }
	    $preis=$preis+$versandkosten;
	    
	    
	    if($preis>=RABATT_GRENZE)
	    {
	        $preis=$preis*(1-RABATT_SONST);
	    }
	    if($geschenkverpackung)
	    {
	        $preis=$preis+ZUSCHLAG_GESCHENKVERPACKUNG;
	    }
	    return $preis;
	}
}
?>