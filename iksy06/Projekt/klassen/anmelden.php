<?php


session_start();

require_once ("../includes/startTemplate.inc.php");
require_once ("../klassen/Copygebuehren.inc.php");
require_once ("../klassen/Kunde.inc.php");
require_once ("../klassen/Sicherheit.inc.php");
require_once ("../klassen/DbFunctions.inc.php");
require_once ("../klassen/fpdf/fpdf.php");

//header("Location: ./astartSeite.php", true, 301);

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabaseAnmelden();


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

	    if(isset($_POST["submit"])){
	        //require("mysql.php");
	        $stmt = $link->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
	        $stmt->bindParam(":user", $_POST["username"]);
	        $stmt->execute();
	        $count = $stmt->rowCount();
	        if($count == 1){
	            //Username ist frei
	            $row = $stmt->fetch();
	            if(password_verify($_POST["pw"], $row["PASSWORD"])){
	                session_start();
	                $_SESSION["username"] = $row["USERNAME"];
	                header("Location: benutzersicht/startSeite.php");
	                
	                
	            } else {
	                echo "Der Login ist fehlgeschlagen";
	            }
	        
	    }
	    }
	    
	    
	        
	    
	    
}
	    $smarty->display ( 'anmelden.tpl' );
?>