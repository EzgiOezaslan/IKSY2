<!DOCTYPE HTML>
<html>
<head>
<title>Störfallbehebung</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/Forms.css">
<link rel="stylesheet" type="text/css" href="./css/Tables.css">

</head>
<body>
	<h2>Störfallbehebnung</h2>

	{if (isset($PHP_SELF))}
	<form name="formular" action="{$PHP_SELF}" method="post">
		<input type="hidden" name="csrfToken" value="{$csrfToken}" />
		<label for="kunde">Kunde</label>
 		<select name="vertragnummer">
		{foreach key=vertragnummer item=kunde from=$kundendaten}
    	<option value="{$vertragnummer}">{$kunde}</option>    
  		{/foreach}		
		</select>
		
		<label>Anzahl Mitarbeiter</label>
		<input type="number" id="anzahlMitarbeiter" name="anzahlMitarbeiter" min="1" max="5" required>
		<label>Ersatzteilpreis</label>
		<input type="number" id="ersatzteilpreis" name="ersatzteilpreis" min="1" max="1000" required>
		<label>Reaktionszeit Ok?</label>
		<input type="checkbox" id="reaktionszeitOk" name="reaktionszeitOk">
		<label>PDF-Ausgabe?</label>
		<input type="checkbox" id="pdf" name="pdf">
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			{$ausgabe}<br>
		 {/if}
	 {/if}
</body>
</html>
