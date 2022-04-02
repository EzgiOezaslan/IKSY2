<?php
/* Smarty version 3.1.30, created on 2018-12-04 10:51:44
  from "/var/www/html/iksy05/uebungZusammenfassung/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c064e3023b806_34867054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef6b8c290e74bab98f98bc0eef7f7efd1db1150' => 
    array (
      0 => '/var/www/html/iksy05/uebungZusammenfassung/smarty/templates/loesung.tpl',
      1 => 1543917037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c064e3023b806_34867054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kopierladen</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Copyshop-Aufgabe</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<label>Kundennummer</label>
			<input type="number" name="kundennummer" min="1" required>
			<label>Anzahl Seiten</label>
			<input type="number" id="anzahlSeiten" name="anzahlSeiten" min="1" max="1000" required>
			<label>Anzahl Exemplare</label>
			<input type="number" name="anzahlExemplare" min="1" max="50" required>
			<label>Farbige Kopien?</label>
			<input type="checkbox" name="farbe">
			<label>Binden lassen?</label>
			<input type="checkbox" name="binden">
			<input type="submit" name="Button1" value="Abschicken"">
		</form>
	<?php } else { ?> 		 			
		Sie müssen <?php echo $_smarty_tpl->tpl_vars['betrag']->value;?>
 Euro bezahlen!
	<?php }?>
</body>
</html>
<?php }
}
