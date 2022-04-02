<?php

class Vertrag {

    public static function holeVertragsArtUndPreis($link, $vertragNr) {
		$query = "Select vertragsart, vertragspreis from vertrag where vertragNr='$vertragNr'";
		$result =  DbFunctions::getHashFromFirstRow($link, $query);
		return $result;
	}
	
	public static function holeKundendaten($link)
	{
	    $query="Select vertragNr, kunde
                from vertrag";
	    return DbFunctions::getHash($link, $query);
	}
}
?>