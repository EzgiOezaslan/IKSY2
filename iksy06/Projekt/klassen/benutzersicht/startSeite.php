<?php


session_start();

require_once ("../../includes/startTemplate.inc.php");
require_once ("../../klassen/Copygebuehren.inc.php");
require_once ("../../klassen/Kunde.inc.php");
require_once ("../../klassen/Sicherheit.inc.php");
require_once ("../../klassen/DbFunctions.inc.php");
require_once ("../../klassen/fpdf/fpdf.php");

DEFINE("MIN_GRENZE", 1);
DEFINE("MAX_SEITEN", 1000);
DEFINE("MAX_EXEMPLARE", 50);


$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase();


if (! ($REQUEST_METHOD == "POST"))
{
    if(!isset($_SESSION["csrfToken"]))
    {
        $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
    }
    $smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);    
	$smarty->assign ( 'PHP_SELF', $PHP_SELF );		
	
} 
else
{
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }
    
    
    

}

$smarty->display ( 'startSeite.tpl' );
?>