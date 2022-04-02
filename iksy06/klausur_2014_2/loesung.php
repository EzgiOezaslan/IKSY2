<?php
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/Anlagenwartung.inc.php");
require_once ("./klassen/Wartungsart.inc.php");

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase();

if (!($REQUEST_METHOD == "POST")) {
	$smarty->assign('PHP_SELF', $PHP_SELF);
} else {
	$wartungsart = DbFunctions::escape($link, trim($_POST ['wartungsart']));
	$gesamtarbeitszeit = trim($_POST ['gesamtarbeitszeit']);
	$nichtImWartungsvertrag = trim($_POST ['nichtImWartungsvertrag']);
	$kundengrundwartung = isset($_POST ['kundengrundwartung']);
	
	$correct = Sicherheit::isNumericalInBoundary($gesamtarbeitszeit, 1, 500);
	$correct = $correct && Sicherheit::isNumericalInBoundary($nichtImWartungsvertrag, 0, $gesamtarbeitszeit);
	
	if ($correct) {
		$grundpreis = Wartungsart::holeGrundpreis($link, $wartungsart);
		$correct = ($grundpreis != null);
	}
	
	if (!$correct) {
		$smarty->assign('fehler', true);
	} else {
		
	    $umsatz = Anlagenwartung::berechneUmsatz($gesamtarbeitszeit, $nichtImWartungsvertrag, $kundengrundwartung, $grundpreis);
		
		$smarty->assign('wartungsart', htmlentities($wartungsart));
		$smarty->assign('grundpreis', $grundpreis);
		$smarty->assign('umsatz', $umsatz);
	}
}
$smarty->display('loesung.tpl');

?>