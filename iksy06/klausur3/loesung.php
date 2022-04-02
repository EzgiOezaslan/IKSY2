<?php
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/Muellgebuehren.inc.php");
require_once ("./klassen/Kunde.inc.php");

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase ();

if (! ($REQUEST_METHOD == "POST"))
{
	$smarty->assign ( 'PHP_SELF', $PHP_SELF );
} 
else
{
	$haushaltsvorstand = DbFunctions::escape ( $link, trim ( $_POST ['haushaltsvorstand'] ) );
	$postleitzahl = trim ( $_POST ['postleitzahl'] );
	
	$correct = Sicherheit::hasLength ( $postleitzahl, 5 );
	$correct = $correct && Sicherheit::isCorrectNumericalString ( $postleitzahl );
	
	if (! $correct)
	{
		$smarty->assign ( 'fehler', true );
	} 
	else
	{
		$daten = Kunde::holeKundenDatensatz ( $link, $haushaltsvorstand );
		$gebuehren = Muellgebuehren::berechneGebuehr ( $daten ['Personen'] );
		
		$smarty->assign ( 'name', htmlentities ( $haushaltsvorstand ) );
		$smarty->assign ( 'gebuehren', $gebuehren );
	}
}
$smarty->display ( 'loesung.tpl' );
?>