<?php
class Ratinggebuehren
{
	public static function berechneBetrag($personen)

	{
		DEFINE('MUELL_PRO_PERSON', 30);
		DEFINE('PREIS_JAEHRLICH' ,26);
		
		$betrag= $personen*MUELL_PRO_PERSON/10*PREIS_JAEHRLICH;

		return $betrag;
	}
}
?>