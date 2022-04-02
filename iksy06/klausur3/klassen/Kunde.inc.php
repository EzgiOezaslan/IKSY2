<?php
class Kunde
{            
    public static function holeKundenDatensatz($link, $name)
    {
      $query="Select Personen
	      from Haushalt
	      where 
	      Name='$name'";
      return DbFunctions::getHashFromFirstRow($link, $query);
    }
}
?>