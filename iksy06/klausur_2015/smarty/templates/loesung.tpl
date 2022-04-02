<!DOCTYPE HTML>
<html>
<head>
<title>Mietkosten</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Mietkosten</h2>

	{if (isset($PHP_SELF))}
	<form name="formular" action="{$PHP_SELF}" method="post">
		<label for="wohnanlage">Nummer der Wohnanlage</label>
		<input type="number" id="wohnanlage" name="wohnanlage" min="1" required>
		<label for="wohnflaeche">Wohnfläche</label>
		<input type="number" id="wohnflaeche" name="wohnflaeche" min="15" max="250" required>

		<label for="ausstattungEinfach">Ausstattung einfach</label>
		<input type="radio" id="ausstattungEinfach" name="ausstattung" value="einfach" selected>
		<label for="ausstattungMittel">Ausstattung mittel</label>
		<input type="radio" id="ausstattungMittel" name="ausstattung" value="mittel">
		<label for="ausstattungGehoben">Ausstattung gehoben</label>
		<input type="radio" id="ausstattungGehoben" name="ausstattung" value="gehoben">
		
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			Die Warmmiete für die von Ihnen gewählte Wohneinheit in der "{$adresse}" beträgt {$warmmiete} Euro.
		 {/if}
	 {/if}
</body>
</html>
