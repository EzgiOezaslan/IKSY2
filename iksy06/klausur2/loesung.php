<?php
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/Ratinggebuehren.inc.php");
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
    $haushaltsvorstand = DbFunctions::escape($link, trim($_POST ['haushaltsvorstand']));
    $plz = DbFunctions::escape($link, trim($_POST ['plz']));


    $correct = Sicherheit::hasLength ( $plz, 5 );
    $correct = $correct && Sicherheit::isCorrectNumericalString ( $plz );

	
	if (! $correct)
	{
		$smarty->assign ( 'fehler', true );
	} 
	else
	{
		$daten = Kunde::holeKundenDatensatz ( $link, $haushaltsvorstand );
		$betrag = Ratinggebuehren::berechneBetrag ($daten ['Personen']);
		
		$smarty->assign ( 'name', htmlentities ( $haushaltsvorstand ) );
		$smarty->assign ( 'betrag', $betrag );
	}
}
$smarty->display ( 'loesung.tpl' );
?> 	