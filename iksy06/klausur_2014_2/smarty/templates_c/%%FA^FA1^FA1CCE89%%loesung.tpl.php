<?php /* Smarty version 2.6.13, created on 2015-01-15 13:39:50
         compiled from loesung.tpl */ ?>
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

	<?php if (( isset ( $this->_tpl_vars['PHP_SELF'] ) )): ?>
	<form name="formular" action="<?php echo $this->_tpl_vars['PHP_SELF']; ?>
" method="post">
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
	<?php else: ?>
		<?php if (( isset ( $this->_tpl_vars['fehler'] ) )): ?>
			Unzulässige Eingabe.
		<?php else: ?> 
			Die Grundpreis für die von Ihnen gewählte Wartungsart "<?php echo $this->_tpl_vars['wartungsart']; ?>
" beträgt <?php echo $this->_tpl_vars['grundpreis']; ?>
 Euro.
			<p>
			Für Ihre Eingaben ergibt sich ein Umsatz von  <i><?php echo $this->_tpl_vars['umsatz']; ?>
 Euro</i>.
		 <?php endif; ?>
	 <?php endif; ?>
</body>
</html>