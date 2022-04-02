<!DOCTYPE HTML>
<html>
<head>
<title>Softwarekosten</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Wartungskosten</h2>

	{if (isset($PHP_SELF))}
	<form name="formular" action="{$PHP_SELF}" method="post">
		<label>Wartungsart</label>
		<input type="text" id="wartungsart" name="wartungsart" required>
		<label for="gesamtarbeitszeit">Gesamtarbeitszeit</label>
		<input type="number" id="gesamtarbeitszeit" name="gesamtarbeitszeit" min="1" max="500" required>
		<label for="nichtImWartungsvertrag">Davon nicht im Wartungsvertrag</label>
		<input type="number" id="nichtImWartungsvertrag" name="nichtImWartungsvertrag" min="0" max="500" required>
		<label for="kundengrundwartung">Kundengrundwartung</label>
		<input type="checkbox" id="kundengrundwartung" name="kundengrundwartung">
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			Die Grundpreis für die von Ihnen gewählte Wartungsart "{$wartungsart}" beträgt {$grundpreis} Euro.
			<p>
			Für Ihre Eingaben ergibt sich ein Umsatz von  <i>{$umsatz} Euro</i>.
		 {/if}
	 {/if}
</body>
</html>
