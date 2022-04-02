<?php /* Smarty version 2.6.13, created on 2016-06-27 14:03:21
         compiled from loesung.tpl */ ?>
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

	<?php if (( isset ( $this->_tpl_vars['PHP_SELF'] ) )): ?>
	<form name="formular" action="<?php echo $this->_tpl_vars['PHP_SELF']; ?>
" method="post">
		<label for="kunde">Kunde</label>
		<input type="input" id="kunde" name="kunde" required>
		<label for="anzahlMitarbeiter">Anzahl Mitarbeiter</label>
		<input type="number" id="anzahlMitarbeiter" name="anzahlMitarbeiter" min="1" max="5" required>
		<label for="preisErsatzteile">Ersatzteilpreis</label>
		<input type="number" id="preisErsatzteile" name="preisErsatzteile" min="0.00" max="9999.99" step="0.01" required>
		<label for="reaktionszeitOK">Reaktionszeit OK</label>
		<input type="checkbox" id="reaktionszeitOK" name="reaktionszeitOK">

		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php else: ?>
		<?php if (( isset ( $this->_tpl_vars['fehler'] ) )): ?>
			Unzulässige Eingabe.
		<?php else: ?> 
			Der Gewinn für Störfallbehebung beim Kunden "<?php echo $this->_tpl_vars['kunde']; ?>
" beträgt <?php echo $this->_tpl_vars['gewinn']; ?>
 Euro.
		 <?php endif; ?>
	 <?php endif; ?>
</body>
</html>