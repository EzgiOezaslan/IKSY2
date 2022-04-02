<?php
session_start();
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/Copygebuehren.inc.php");
require_once ("./klassen/Kunde.inc.php");

DEFINE("MIN_GRENZE", 1);
DEFINE("MAX_SEITEN", 1000);
DEFINE("MAX_EXEMPLARE", 50);

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase ();

if (! ($REQUEST_METHOD == "POST"))
{
	$smarty->assign ( 'PHP_SELF', $PHP_SELF );
	if(!isset($_SESSION["csrfToken"]))
	{
	    $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
	}
	$smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);
} 
else
{
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }
	$kundennummer = $_POST ['kundennummer'];
	$anzahlSeiten = $_POST ['anzahlSeiten'];
	$anzahlExemplare = $_POST ['anzahlExemplare'];
	$farbe = isset ( $_POST ['farbe'] );
	$bindung = isset ( $_POST ['binden'] );
	
	$correct = Sicherheit::isNumericalMin ( $kundennummer, MIN_GRENZE );
	$correct = $correct && Sicherheit::isNumericalInBoundary ( $anzahlSeiten, MIN_GRENZE, MAX_SEITEN );
	$correct = $correct && Sicherheit::isNumericalInBoundary ( $anzahlExemplare, MIN_GRENZE, MAX_EXEMPLARE );

	if (! $correct)
	{
		$smarty->assign ( 'fehler', true );
	} else
	{
		$kundendaten = Kunde::holeKundenDatensatz ( $link, $kundennummer );
		
		$betrag = Copygebuehren::berechneGebuehr ( $anzahlExemplare, $anzahlSeiten, $farbe, $bindung, $kundendaten ['Rabatt'] );
		
		$smarty->assign ( 'name', htmlentities ( $kundendaten ['Name'] ) );
		$smarty->assign ( 'rabatt', htmlentities ( $kundendaten ['Rabatt'] ) );
		$smarty->assign ( 'betrag', $betrag );
	}
}
$smarty->display ( 'loesung.tpl' );
?>






