<!DOCTYPE HTML>
<html>
<head>
<title>Müllgebühren</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Müllgebühren</h2>

	{if (isset($PHP_SELF))}
	<form name="formular" action="{$PHP_SELF}" method="post">
		<label>Haushaltsvorstand</label>
		<input type="text" id="haushaltsvorstand" name="haushaltsvorstand" required>
		<label>Strasse</label>
		<input type="text" id="strasse" name="strasse">
		<label>Hausnummer</label>
		<input type="text" id="hausnummer" name="hausnummer">
		<label>Postleitzahl</label>
		<input type="text" id="postleitzahl" name="postleitzahl" pattern="\d{ldelim}5{rdelim}">
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			Sehr geehrte/r Frau/Herr  {$name}
			 <br>
			Ihre Müllgebühren betragen {$gebuehren} Euro.
		 {/if}
	 {/if}
</body>
</html>
