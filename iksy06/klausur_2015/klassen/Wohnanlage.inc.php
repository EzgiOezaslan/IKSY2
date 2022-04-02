<?php

class Wohnanlage {

	public static function holeWohnanlageDatensatz($link, $wohnanlageNr) {
		$query = "Select Gesamtwohnflaeche, Gesamtnebenkosten, Strasse from Wohnanlage where WohnanlageNr=$wohnanlageNr";
		return DbFunctions::getHashFromFirstRow($link, $query);
	}
}
?>