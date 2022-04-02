<?php
class Kunde
{            
    public static function holeKundenDatensatz($link, $kundennummer)
    {
      $query="Select Name, Rabatt
	      from Kunde
	      where 
	      KundeNr=$kundennummer";
      return DbFunctions::getHashFromFirstRow($link, $query);
    }
}
?>