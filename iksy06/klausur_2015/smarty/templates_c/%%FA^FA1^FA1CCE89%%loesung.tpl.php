<?php /* Smarty version 2.6.13, created on 2015-06-08 14:48:04
         compiled from loesung.tpl */ ?>
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

	<?php if (( isset ( $this->_tpl_vars['PHP_SELF'] ) )): ?>
	<form name="formular" action="<?php echo $this->_tpl_vars['PHP_SELF']; ?>
" method="post">
		<label for="wohnanlage">Nummer der Wohnanlage</label>
		<input type="number" id="wohnanlage" name="wohnanlage" min="1" required>
		<label for="wohnflaeche">Wohnfläche</label>
		<input type="number" id="wohnflaeche" name="wohnflaeche" min="15" max="250" required>

		<label for="ausstattungEinfach">Ausstattung einfach</label>
		<input type="radio" id="ausstattungEinfach" name="ausstattung" value="einfach">
		<label for="ausstattungMittel">Ausstattung mittel</label>
		<input type="radio" id="ausstattungMittel" name="ausstattung" value="mittel">
		<label for="ausstattungGehoben">Ausstattung gehoben</label>
		<input type="radio" id="ausstattungGehoben" name="ausstattung" value="gehoben">
		
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php else: ?>
		<?php if (( isset ( $this->_tpl_vars['fehler'] ) )): ?>
			Unzulässige Eingabe.
		<?php else: ?> 
			Die Warmmiete für die von Ihnen gewählte Wohneinheit in der "<?php echo $this->_tpl_vars['adresse']; ?>
" beträgt <?php echo $this->_tpl_vars['warmmiete']; ?>
 Euro.
		 <?php endif; ?>
	 <?php endif; ?>
</body>
</html>