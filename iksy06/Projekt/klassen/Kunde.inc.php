<?php
class Kunde
{            
    public static function holeKundendaten($link)
    {
      $query="Select KundeNr, Name
                from Kunde";
      return DbFunctions::getHash($link, $query);
    }
    
    public static function holeRabatt($link)
    {
        $query="Select Rabatt
                from Kunde";
                
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }
        //where KundeNr=$kundennummer";
    
    public static function fuege($link,$auftrag,$text,$abkuerzung)
    {
        
        "INSERT INTO benutzer(auftrag,text,abkuerzung) 
                    VALUES ('$auftrag','$text','$abkuerzung')";
        
        //return DbFunctions::getFirstFieldOfResult($link, $query);
    }
    
    public static function hole($link)
    {
        $query="Select nachname
                from benutzer";
                
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }
}
?>