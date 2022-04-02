<head>
<title>Kopierladen</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/Forms.css">
<link rel="stylesheet" type="text/css" href="../../css/Tables.css">



</head>
<body>
	<h2>Copyshop-Aufgabe</h2>
	
	
	
	<a href="../../index.php">Abmelden</a>
	
	
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			<br><i>{$ausgabeText}</i><br>
			
		{/if} 		 					
	{/if}
</body>
</html>