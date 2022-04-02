<!DOCTYPE HTML>
<html>
<head>
<title>Kopierladen</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Copyshop-Aufgabe</h2>

	{if (isset($PHP_SELF))}
	<form name="formular" action="{$PHP_SELF}" method="post">
		<input type="hidden" name="csrfToken" value="{$csrfToken}" />
		<label>Kundennummer</label>
		<input type="number" name="kundennummer" min="1" required>
		<label>Anzahl Seiten</label>
		<input type="number" id="anzahlSeiten" name="anzahlSeiten" min="1" max="1000" required>
		<label>Anzahl Exemplare</label>
		<input type="number" name="anzahlExemplare" min="1" max="50" required>
		<label>Farbige Kopien?</label>
		<input type="checkbox" name="farbe">
		<label>Binden lassen?</label>
		<input type="checkbox" name="binden">
		<input type="submit" name="Button1" value="Abschicken"">
	</form>
	{else} 
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
		<table>
			<tr><th>Kunde:  </th><td> {$name}</td>
			<tr><th>Rabatt: </th><td> {$rabatt}%</td>
			<tr><th>Betrag: </th><td> {$betrag} Euro</td>
		</table>
{/if}
{/if}
</body>
</html>
