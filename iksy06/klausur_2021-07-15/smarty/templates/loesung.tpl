<!DOCTYPE HTML>
<html>
<head>
<title>Versandhandel</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Auswahl Paketdienstleister</h2>

	{if (isset($PHP_SELF))}
		<form name="formular" action="{$PHP_SELF}" method="post">
			<label>Länge (cm)</label>
			<input type="number" name="laenge" min="10" max="150" required>
			<label>Breite (cm)</label>
			<input type="number" name="breite" min="10" max="150" required>
			<label>Höhe (cm)</label>
			<input type="number" name="hoehe" min="10" max="150" required>
			<label>Entfernung (km)</label>
			<input type="number" name="entfernung" min="0" max="1000" required>
			<label>fragiler Inhalt?</label>
			<input type="checkbox" name="fragil"">
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<input type="submit" name="Button1" value="Abschicken"">
		</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			{$ausgabeText}
			{if (isset($ausgabeText2))}
				<br>
				<b>{$ausgabeText2}</b>
				<br>
			{/if}
		{/if} 		 					
	{/if}
</body>
</html>
