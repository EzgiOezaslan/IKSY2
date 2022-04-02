<?php /* Smarty version 2.6.13, created on 2014-05-30 11:20:00
         compiled from loesung.tpl */ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Debit-Revolution: Ratings</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Debit-Revolution: Ratings</h2>

	<?php if (( isset ( $this->_tpl_vars['PHP_SELF'] ) )): ?>
	<form name="formular" action="<?php echo $this->_tpl_vars['PHP_SELF']; ?>
" method="post">
		<label>Kundennummer</label>
		<input type="number" name="kundennummer" min="1" required>
		<label>Anzahl Erstratings</label>
		<input type="number" id="anzahlErstratings" name="anzahlErstratings" min="1" max="500" required>
		<label>Anzahl Folgeratings</label>
		<input type="number" name="anzahlFolgeratings" min="1" max="500" required>
		<input type="submit" name="Button1" value="Abschicken">
	</form>
	<?php else: ?> 
		<?php if (( isset ( $this->_tpl_vars['fehler'] ) )): ?>
			Unzulässige Eingabe.
		<?php else: ?> 
			<table>
				<tr><th>Unternehmen: </th><td> <?php echo $this->_tpl_vars['unternehmen']; ?>
</td>
				<tr><th>Kundenart: 	 </th><td> <?php echo $this->_tpl_vars['kundenart']; ?>
</td>
				<tr><th>Betrag:      </th><td> <?php echo $this->_tpl_vars['betrag']; ?>
 Euro.</td>
		</table>
		<?php endif; ?>
	<?php endif; ?>

</body>
</html>