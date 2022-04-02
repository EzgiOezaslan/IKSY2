<?php
class Produkt
{            
    public static function holekundendaten ($link)
    {
      $query="Select vertragNr, kunde
	      from vertrag";
      return DbFunctions::getHash($link, $query);
    }
    
    public static function holepreisundart($link, $vertragNr)
    {
        $query="Select vertragNr, vertragsart, vertragspreis
	       from vertrag
           where vertragNr='$vertragNr'";
        return DbFunctions::getHashFromFirstRow($link, $query);
        return result;
    }

}
?>