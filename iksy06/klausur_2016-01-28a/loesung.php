<?php

	require_once("./includes/startTemplate.inc.php");
	require_once("$ROOT_DIR/klassen/Sicherheit.inc.php");
	require_once("$ROOT_DIR/klassen/DbFunctions.inc.php");
	require_once("$ROOT_DIR/klassen/Kommune.inc.php");
	require_once("$ROOT_DIR/klassen/Salzpreisberechnung.inc.php");
	
    $PHP_SELF = $_SERVER ['PHP_SELF'];
    $REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];    
    $link = DbFunctions::connectWithDatabase();   
    $template='loesung.tpl'; 
    if($REQUEST_METHOD != "POST") 
    {
    	$smarty->assign('PHP_SELF', $PHP_SELF);
    }
    else 
    {		
	    $laengeStrassennetz=$_POST['laengeStrassennetz'];	    
	    $davonNebenstrassen=$_POST['davonNebenstrassen'];
	    $kommune=DbFunctions::escape ( $link, trim ( $_POST ['kommune'] ) );
	    
	    $correct = Sicherheit::isNumericalInBoundary ($laengeStrassennetz, 1000, 10000);
	    $correct=$correct && Sicherheit::isCorrectNumericalString($davonNebenstrassen);
	    $correct=$correct && Sicherheit::istNotEmpty($kommune);
	    if (!$correct) {
		$smarty->assign('fehler', true);
	    } 
	    else
	    {
	    	$einsatztage=Kommune::holeEinsatztage($link, $kommune);	   
		$salzpreis=Salzpreisberechnung::berechnesalzpreis($laengeStrassennetz, $davonNebenstrassen, $einsatztage);
	    	$smarty->assign('salzpreis', $salzpreis);	    
	    }
    }
 	$smarty->display($template);
    
?>
