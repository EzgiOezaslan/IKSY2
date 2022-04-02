<?php
class Wartungsart
{            
    public static function holeGrundpreis($link, $wartungsart)
    {
        $query="Select Grundpreis from Wartungsart where Name='$wartungsart'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }
}
?>