<?php

session_start();

require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/Softwarekosten.inc.php");
require_once ("./klassen/Produkt.inc.php");
require_once('./klassen/fpdf/fpdf.php');

DEFINE("MIN_MITARBEITER", 1);
DEFINE("MAX_MITARBEITER", 5);
DEFINE("MIN_PREIS", 0);
DEFINE("MAX_PREIS", 1000);


$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase ();
$kundendaten=Produkt::holekundendaten($link);

if (! ($REQUEST_METHOD == "POST"))
{
        if(!isset($_SESSION["csrfToken"]))
        {
            $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
        }
        
	$smarty->assign ( 'PHP_SELF', $PHP_SELF );
	$smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);
	$smarty->assign ( 'kundendaten', $kundendaten );
}
else
{
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }
    
    $vertragnummer = $_POST ['vertragnummer'];
	$anzahlMitarbeiter = $_POST ['anzahlMitarbeiter'];
	$ersatzteilpreis =  $_POST ['ersatzteilpreis'] ;
	$reaktionszeitOk = isset ( $_POST ['reaktionszeitOk'] );
	$pdf = isset ( $_POST ['pdf'] );
	
	$correct = Sicherheit::isCorrectNumericalString ($vertragnummer);
	$correct = $correct && Sicherheit::isNumericalInBoundary ($anzahlMitarbeiter, MIN_MITARBEITER, MAX_MITARBEITER);
	$correct = $correct && Sicherheit::isNumericalInBoundary ($ersatzteilpreis, MIN_PREIS, MAX_PREIS);
	
	if (! $correct)
	{
		$smarty->assign ( 'fehler', true );
	}
	else
	{
	    $daten = Produkt::holepreisundart ( $link, $vertragnummer );
	    $preis = Softwarekosten::berechnepreis ( $daten ['vertragspreis'], $daten['vertragsart'], $anzahlMitarbeiter, $reaktionszeitOk, $ersatzteilpreis);
		
		$ausgabe="Der Gewinn für Störfallbehebung beim Kunden\"$kundendaten[$vertragnummer]\" beträgt $preis Euro.";
	
		
		if ($pdf)
		{
		    $xTextStart=10;
		    $pdf=new fpdf();
		    $pdf->AddPage();
		    
		    $pdf->SetFont('Helvetica', "b", 14);
		    $pdf->SetXY($xTextStart, 30);
		    $pdf->Cell(16, 3, "Softwarekosten");
		    
		    $pdf->SetFont('Helvetica', "", 10);
		    $pdf->SetXY($xTextStart, 40);
		    $pdf->Cell(16, 3, $ausgabe);

		    $pdf->SetFont('Helvetica', "i", 10);
		    $pdf->SetXY($xTextStart, 45);
		  
		    $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText, "ISO-8859-15"));
		    $pdf->Output();
		    exit();
		}
		
		
		
		$smarty->assign ( 'ausgabe', htmlentities($ausgabe) );
	
	}
}
$smarty->display ( 'loesung.tpl' );

?>