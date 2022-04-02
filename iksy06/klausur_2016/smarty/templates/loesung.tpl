<!DOCTYPE HTML>
<html>
<head>
<title>Störfallbehebung</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Störfallbehebung</h2>

	{if (isset($PHP_SELF))}
	<form name="formular" action="{$PHP_SELF}" method="post">
		<input type="hidden" name="csrfToken" value="{$csrfToken}" />
		
		<label for="kunde">Kunde</label>
 		<select name="vertragsnummer">
		{foreach key=vertragsnummer item=kunde from=$kundendaten}
    		<option value="{$vertragsnummer}">{$kunde}</option>    
  		{/foreach}		
		</select>
		
		<label for="anzahlMitarbeiter">Anzahl Mitarbeiter</label>
		<input type="number" id="anzahlMitarbeiter" name="anzahlMitarbeiter" min="1" max="5" required>
		
		<label for="preisErsatzteile">Ersatzteilpreis</label>
		<input type="number" id="preisErsatzteile" name="preisErsatzteile" min="0.00" max="9999.99" step="0.01" required>
		
		<label for="reaktionszeitOK">Reaktionszeit OK?</label>
		<input type="checkbox" id="reaktionszeitOK" name="reaktionszeitOK">
		
		<label for="pdf">PDF Ausgabe?</label>
		<input type="checkbox" id="pdf" name="pdf">

		<input type="submit" name="Button1" value="Berechnen">
	</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			{$ausgabeText}
		 {/if}
	 {/if}
</body>
</html>
