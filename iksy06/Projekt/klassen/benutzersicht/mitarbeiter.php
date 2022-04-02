<?php


session_start();

require_once ("../../includes/startTemplate.inc.php");
require_once ("../../klassen/Copygebuehren.inc.php");

require_once ("../Kunde.inc.php");
require_once ("../mitHolen.inc.php");
require_once ("../../klassen/Sicherheit.inc.php");
require_once ("../DbFunctions.inc.php");
require_once ("../../klassen/fpdf/fpdf.php");

DEFINE("MIN_GRENZE", 1);
DEFINE("MAX_SEITEN", 1000);
DEFINE("MAX_EXEMPLARE", 50);

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase();
$kundendaten=Kunde::hole($link);



if (! ($REQUEST_METHOD == "POST"))
{
    if(!isset($_SESSION["csrfToken"]))
    {
        $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
    }
    $smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);
    $smarty->assign ( 'PHP_SELF', $PHP_SELF );
    //$smarty->assign ( 'kundendaten', $kundendaten );
}
else
{
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
  }
    
    
    
    if(isset($_POST["submit"])):
        require("mysql.php");
        //$stmt = $mysql->prepare("SELECT * FROM benutzer WHERE vorname = :vorname"); //Username überprüfen
       // $stmt->bindParam(":vorname", $_POST["vorname"]);
      //  $stmt->execute();
        
        //$count = $stmt->rowCount();
       // if($count == 0):
            //Username ist frei
            
                $stmt = $mysql->prepare("INSERT INTO benutzer (vorname, nachname,abkuerzung) VALUES (:vorname, :nachname, :abkuerzung)");
                $stmt->bindParam(":vorname", $_POST["vorname"]);
                
                $stmt->bindParam(":nachname", $_POST["nachname"]);
                
                $stmt->bindParam(":abkuerzung", $_POST["abkuerzung"]);
                $stmt->execute();
                //echo "Dein Account wurde angelegt";
        
        endif;
        
        //$abfrage = $mysql->query("select*from benutzer order by desc");

        
      
        
        
        $ausgabe="Dein Account wurde angelegt!";
        
        

$smarty->assign ( 'ausgabe',$ausgabe);
}
$smarty->display ( 'mitarbeiter.tpl' );
?>