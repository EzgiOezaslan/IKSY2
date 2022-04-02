<?php
class Salzpreisberechnung
{            
    public static function berechnesalzpreis($laengeStrassennetz, $davonNebenstrassen, $einsatztage)
    {
    	$hauptstrassen=$laengeStrassennetz-$davonNebenstrassen;
    	$salzMenge=$hauptstrassen*$einsatztage*70+$davonNebenstrassen*$einsatztage*70*0.7;
    	$salzMenge/=1000;
    	if($salzMenge>=1000)
    	{
    		$rabatt=0.2;
    	}
    	elseif($salzMenge>=700)
    	{
    		$rabatt=0.1;
    	}
    	else
    	{
    		$rabatt=0;
    	}
    	$preis=$salzMenge*180*(1-$rabatt);
    	if($preis>100000)
    	{
    		$preis*=0.9;
    	}
    	return $preis;
    }
}
?>