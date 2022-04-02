<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Forms.css">
	<link rel="stylesheet" type="text/css" href="css/Tables.css">
    <title>Salzpreis</title>
    <script type='text/javascript' src='./javascript/jquery-3.1.1.min.js'>
	</script>
	<script 
			src="./javascript/javascript.js">
	</script>
</head>
<body>
	{if (isset($PHP_SELF))}
		<form name="formular" action="{$PHP_SELF}" method="post">
			<label for="kommune">Kommune</label>
			<input type="input" id="kommune" name="kommune" required>
			<label for="laengeStrassennetz">Länge Straßennetz</label>
			<input type="number" id="laengeStrassennetz" name="laengeStrassennetz" min="1000" max="10000" required>
			<label for="davonNebenstrassen">davon Nebenstraßen</label>
			<input type="number" id="davonNebenstrassen" name="davonNebenstrassen" required>					
			<input type="submit" name="Button1" value="Berechnen">
		</form>
{else}
    Der Salzpreis beträgt {$salzpreis}
{/if}
</body>
</html>