<?php
class Muellgebuehren
{
	public static function berechneGebuehr($personen)
	{
		DEFINE ('LITER_PRO_WOCHE', 30);
		DEFINE ('PREIS_JE_10LITER', 26);
		
		$gebuehr = $personen * LITER_PRO_WOCHE / 10 * PREIS_JE_10LITER;

		return $gebuehr;
	}
}
?>