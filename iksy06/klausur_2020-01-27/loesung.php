<?php
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/Kleinbrennerei.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/fpdf/fpdf.php");

DEFINE("MIN_GRENZE",0);
DEFINE("MAX_FLASCHEN", 25);
DEFINE("OBSTLER_NR", 1);
DEFINE("QUITTE_NR", 2);


$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

if (! ($REQUEST_METHOD == "POST"))
{
	$smarty->assign ( 'PHP_SELF', $PHP_SELF );
} 
else
{
    $link = DbFunctions::connectWithDatabase();
	$kunde = trim($_POST['kunde']);
	$anzahlObstler = $_POST ['anzahlObstler'];
	$anzahlQuitte = $_POST ['anzahlQuitte'];
	$geschenkverpackung = isset( $_POST ['geschenkverpackung']);
	$pdf = isset ( $_POST ['pdf'] );
	
	$correct = Sicherheit::isNumericalInBoundary($anzahlObstler, MIN_GRENZE, MAX_FLASCHEN);
	$correct = $correct && Sicherheit::isNumericalInBoundary($anzahlQuitte, MIN_GRENZE, MAX_FLASCHEN);
	$correct = $correct && Sicherheit::istNotEmpty($kunde);
	if (! $correct)
	{
	    $smarty->assign ( 'fehler', true );
	}
	else
	{
	
    	$preisObstler=Kleinbrennerei::holePreis($link, OBSTLER_NR);
    	$preisQuitte=Kleinbrennerei::holePreis($link, QUITTE_NR);
    	$preis=Kleinbrennerei::berechneGesamtpreis($preisObstler, $anzahlObstler, $preisQuitte, $anzahlQuitte, $geschenkverpackung);
        
    	$ausgabeText="Der Kunde ".$kunde." hat $preis Euro zu zahlen.";
    	if ($geschenkverpackung)
    	{
    	   $ausgabeText2="Bitte eine Geschenkverpackung vorbereiten!";
    	   $smarty->assign ( 'ausgabeText2', $ausgabeText2 );
    	}    	
        if ($pdf)
        {
            $xTextStart=10;
            $pdf=new fpdf();        
            $pdf->AddPage();
            $pdf->SetFont('Helvetica', "b", 14);
            $pdf->SetXY($xTextStart, 30);
            $pdf->Cell(16, 3, "Kleinbrennerei");
            $pdf->SetFont('Helvetica', "", 10);
            $pdf->SetXY($xTextStart, 40);
            $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText, "ISO-8859-15"));
            if ($geschenkverpackung)
            {
                $pdf->SetFont('Helvetica', "i", 10);
                $pdf->SetXY($xTextStart, 50);
                $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText2, "ISO-8859-15"));
            }
            $pdf->Output();
            exit();
        }
        $smarty->assign ( 'ausgabeText', htmlentities($ausgabeText));
	}
}
$smarty->display ( 'loesung.tpl' );
?>