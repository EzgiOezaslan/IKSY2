<?php

class Paketdienstleister {

    public static function holePreis($link, $dienstleister)
    {
		$query="Select Paketpreis 
                from Paketdienstleister
                where Bezeichnung='$dienstleister'";
		return DBFunctions::getFirstFieldOfResult($link, $query);
	}
	
	public static function ermittlePreis($link, $dienstleister, $fragil)
	{
	    DEFINE('ZUSCHLAG_FRAGIL', 0.5);
	    
	    $preis=self::holePreis($link, $dienstleister);
	    
	    if($fragil)
	    {
	        $preis=$preis+ZUSCHLAG_FRAGIL;
	    }
	    
	    return $preis;
	}	
	
	public static function ermittleDienstleister($laenge, $breite, $hoehe, $entfernung)
	{
	    
	    DEFINE('VOLUMEN_GRENZE_1', 1);
	    DEFINE('VOLUMEN_GRENZE_2', 2);
	    
	    DEFINE('ENTFERNUNG_GRENZE', 50);
	    
	    DEFINE('DIENSTLEISTER_1', "DHL");
	    DEFINE('DIENSTLEISTER_2', "UPS");
	    DEFINE('DIENSTLEISTER_3', "WPS");
	    
	    DEFINE('DIENSTLEISTER_KURZE_STRECKE', "WPS");
	    	        
	    $paketvolumen=$laenge/100*$breite/100*$hoehe/100;
	    
	    if($paketvolumen<VOLUMEN_GRENZE_1)
	    {
	        $dienstleister=DIENSTLEISTER_1;
	    }
	    elseif($paketvolumen<VOLUMEN_GRENZE_2)
	    {
	        $dienstleister=DIENSTLEISTER_2;
	    }
        else
        {
            $dienstleister=DIENSTLEISTER_3;
        }
        
        if($entfernung<ENTFERNUNG_GRENZE)
        {
            $dienstleister=DIENSTLEISTER_KURZE_STRECKE;
        }  
        
        return $dienstleister;
	}
}
?>