<?php
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/Mietberechnung.inc.php");
require_once ("./klassen/Wohnanlage.inc.php");

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase();

if (!($REQUEST_METHOD == "POST")) {
	$smarty->assign('PHP_SELF', $PHP_SELF);
} else {
	$wohnanlage = DbFunctions::escape($link, $_POST ['wohnanlage']);
	$wohnflaeche = $_POST ['wohnflaeche'];
	$ausstattung = $_POST ['ausstattung'];
	
	$correct = Sicherheit::isNumericalMin($wohnanlage, 1);
	$correct = $correct && Sicherheit::isNumericalInBoundary($wohnflaeche, 15, 250);
	$correct = $correct && Sicherheit::isCorrectAusstattung($ausstattung);
	
	
	
	if (!$correct) {
		$smarty->assign('fehler', true);
	} else {
	    $daten = Wohnanlage::holeWohnanlageDatensatz($link, $wohnanlage);
		$warmmiete = Mietberechnung::berechneMiete($wohnflaeche, $ausstattung, $daten['Gesamtwohnflaeche'], $daten ['Gesamtnebenkosten']);
		
		$smarty->assign('adresse', htmlentities($daten['Strasse']));
		$smarty->assign('warmmiete', $warmmiete);
	}
}
$smarty->display('loesung.tpl');
?>