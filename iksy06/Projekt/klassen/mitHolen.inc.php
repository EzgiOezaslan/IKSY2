<?php
class mitHolen
{            
    public static function hinzu($link,$vorname,$nachname,$abkuerzung)
    {
      "INSERT INTO benutzer (vorname,nachname,abkürzung) VALUES ($vorname,$nachname,$abkuerzung)";
                
      
    }
    
    
}
?>