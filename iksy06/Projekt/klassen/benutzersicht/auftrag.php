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
$kundendaten=Kunde::holeKundendaten($link);

if (! ($REQUEST_METHOD == "POST"))
{
    if(!isset($_SESSION["csrfToken"]))
    {
        $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
    }
    $smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);
    $smarty->assign ( 'PHP_SELF', $PHP_SELF );
    $smarty->assign ( 'kundendaten', $kundendaten );
}
else
{
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }
    
    
    $auftrag = $_POST ['auftrag'];
    $text = $_POST ['text'];
    $abkuerzung = $_POST ['abkuerzung'];
    
    $pdf = isset($_POST ['pdf']);
    
    
        
        
        Kunde::fuege($link,$auftrag,$text,$abkuerzung);
        //$rabatt=Kunde::holeRabatt($link, 1);
        
        $ausgabeText="ERfolgreich";
        //$ausgabeText="Die Kosten des Kunden ".$kundendaten[1]." betragen $betrag Euro.";
        if ($pdf)
        {
            $xTextStart=10;
            $pdf=new fpdf();
            $pdf->AddPage();
            $pdf->SetFont('Helvetica', "b", 14);
            $pdf->SetXY($xTextStart, 30);
            $pdf->Cell(16, 3, "Copyshop-Aufgabe");
            $pdf->SetFont('Helvetica', "", 10);
            $pdf->SetXY($xTextStart, 40);
            $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText, "ISO-8859-15"));
            
            $pdf->Output();
            exit();
        }
        $smarty->assign ( 'ausgabeText',$ausgabeText);
        //$smarty->assign ( 'ausgabeText', htmlentities($ausgabeText));
        //$smarty->assign ( 'rabatt', htmlentities($rabatt));
    }


$smarty->display ( 'auftrag.tpl' );
?>