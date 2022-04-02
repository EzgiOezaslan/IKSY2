<?php
require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/Paketdienstleister.inc.php");;
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/fpdf/fpdf.php");

DEFINE("MIN_GRENZE_SEITE",0);
DEFINE("MAX_GRENZE_SEITE", 150);
DEFINE("MIN_GRENZE_ENTFERNUNG",0);
DEFINE("MAX_GRENZE_ENTFERNUNG", 1000);

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

if (! ($REQUEST_METHOD == "POST"))
{
	$smarty->assign ( 'PHP_SELF', $PHP_SELF );
} 
else
{
    $link = DbFunctions::connectWithDatabase();
    $laenge=trim($_POST['laenge']);
    $breite=trim($_POST['breite']);
    $hoehe=trim($_POST['hoehe']);
    $entfernung=trim($_POST['entfernung']);

	$fragil = isset( $_POST ['fragil']);
	$pdf = isset ( $_POST ['pdf'] );
	
	$correct = Sicherheit::isNumericalInBoundary($laenge, MIN_GRENZE_SEITE, MAX_GRENZE_SEITE);	
	$correct = $correct && Sicherheit::isNumericalInBoundary($breite, MIN_GRENZE_SEITE, MAX_GRENZE_SEITE);
	$correct = $correct && Sicherheit::isNumericalInBoundary($hoehe, MIN_GRENZE_SEITE, MAX_GRENZE_SEITE);
	$correct = $correct && Sicherheit::isNumericalInBoundary($entfernung, MIN_GRENZE_ENTFERNUNG, MAX_GRENZE_ENTFERNUNG);
	if (! $correct)
	{
	    $smarty->assign ( 'fehler', true );
	}
	else
	{
	
	    $dienstleister=Paketdienstleister::ermittleDienstleister($laenge, $breite, $hoehe, $entfernung);
	    $preis=Paketdienstleister::ermittlePreis($link, $dienstleister, $fragil);
	    
	    $ausgabeText="Der ermittelte Paketdienstleister ist $dienstleister zu $preis Euro.";
    	
    	if ($fragil)
    	{ 
    	   $ausgabeText2="Fragile Ware, bitte aufpassen!";
    	   $smarty->assign ( 'ausgabeText2', $ausgabeText2 );
    	}

        if ($pdf)
        {
            $xTextStart=10;
            $pdf=new fpdf();        
            $pdf->AddPage();
            $pdf->SetFont('Helvetica', "b", 14);
            $pdf->SetXY($xTextStart, 30);
            $pdf->Cell(16, 3, "Versandhandel");
            $pdf->SetFont('Helvetica', "", 10);
            $pdf->SetXY($xTextStart, 40);
            $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText, "ISO-8859-15"));
            if ($fragil)
            {
                $pdf->SetFont('Helvetica', "b", 10);
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