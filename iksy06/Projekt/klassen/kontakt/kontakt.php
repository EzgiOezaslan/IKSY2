<?php


session_start();

require_once ("../../includes/startTemplate.inc.php");
require_once ("../DbFunctions.inc.php");

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabaseKontakt();

if (!($REQUEST_METHOD == "POST"))
{
    $smarty->assign('PHP_SELF', $PHP_SELF);
   // $smarty->assign ( 'preisNrKundeArtHash', $preisNrKundeArtHash );
}
else
{

   

    if(isset($_POST["submit"])){
    
 
    $stmt = $link->prepare("INSERT INTO kontakt (name,email,text) VALUES (:name,:email,:nachricht)");
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":nachricht", $_POST['nachricht']);
    $stmt->execute();
    
    echo "ERFOLGREICH VERSENDET!";
    
    //$send_kontakt=mysqli_query($con,$kontaktdaten);
    }
}
$smarty->display ( 'kontakt.tpl' );
?>
    