<?php /* Smarty version 2.6.13, created on 2014-05-30 11:41:27
         compiled from loesung.tpl */ ?>
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

	<?php if (( isset ( $this->_tpl_vars['PHP_SELF'] ) )): ?>
	<form name="formular" action="<?php echo $this->_tpl_vars['PHP_SELF']; ?>
" method="post">
		<label>Haushaltsvorstand</label>
		<input type="text" id="haushaltsvorstand" name="haushaltsvorstand" required>
		<label>Strasse</label>
		<input type="text" id="strasse" name="strasse">
		<label>Hausnummer</label>
		<input type="text" id="hausnummer" name="hausnummer">
		<label>Postleitzahl</label>
		<input type="text" id="postleitzahl" name="postleitzahl" pattern="\d{5}">
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php else: ?>
		<?php if (( isset ( $this->_tpl_vars['fehler'] ) )): ?>
			Unzulässige Eingabe.
		<?php else: ?> 
			Sehr geehrte/r Frau/Herr  <?php echo $this->_tpl_vars['name']; ?>
. <br>
			Ihre Müllgebühren betragen <i><?php echo $this->_tpl_vars['gebuehren']; ?>
 Euro</i>.
		 <?php endif; ?>
	 <?php endif; ?>
</body>
</html>