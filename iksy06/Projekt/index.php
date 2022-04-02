<?php
    
session_start();

require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/Copygebuehren.inc.php");
require_once ("./klassen/Kunde.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/fpdf/fpdf.php");

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];
$link = DbFunctions::connectWithDatabase();

//$link = DbFunctions::connectWithDatabase();

    $var="EYY SEFO";
    
    $rabatt=Kunde::holeRabatt($link, 1);
    $smarty->assign ( 'var',$var);
    $smarty->assign ( 'rabatt',$rabatt);

    
    
    
    $smarty->display ( 'index.tpl' );
?>
    
