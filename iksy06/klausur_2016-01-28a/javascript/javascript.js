function pruefeStrassennetz()
{	
    
	var laengeStrassennetz=$("#laengeStrassennetz").val();
	var davonNebenstrassen=$("#davonNebenstrassen").val();
	
	if((davonNebenstrassen<laengeStrassennetz*0.2)||(davonNebenstrassen>laengeStrassennetz*0.8))
    {    	
        alert("Fehler Kombination Längen");
        return false;
    }
    return true;
}