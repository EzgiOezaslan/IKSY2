<?php
class Kommune
{            
    public static function holeEinsatztage($link, $kommune)
    {
      $query="Select Einsatztage from Kommune
			where Kommune='$kommune'";
      return DbFunctions::getFirstFieldOfResult($link, $query);
    }    
}
?>