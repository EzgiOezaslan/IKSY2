<!DOCTYPE HTML>
<html>
<head>
<title>Kleinbrennerei</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Kleinbrennereikosten</h2>

	{if (isset($PHP_SELF))}
		<form name="formular" action="{$PHP_SELF}" method="post">
			<label>Kunde</label>
			<input type="text" name="kunde" required>
			<label>Anzahl Flaschen Obstler</label>
			<input type="number" id="anzahlObstler" name="anzahlObstler" min="0" max="25" required>
			<label>Anzahl Flaschen Quitte</label>
			<input type="number" name="anzahlQuitte" min="0" max="25" required>
			<label>Geschenkverpackung?</label>
			<input type="checkbox" name="geschenkverpackung">
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<input type="submit" name="Button1" value="Abschicken">
		</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			{$ausgabeText}
			{if (isset($ausgabeText2))}
				<br>
				<i>{$ausgabeText2}</i>
				<br>
			{/if}
		{/if} 		 					
	{/if}
</body>
</html>
