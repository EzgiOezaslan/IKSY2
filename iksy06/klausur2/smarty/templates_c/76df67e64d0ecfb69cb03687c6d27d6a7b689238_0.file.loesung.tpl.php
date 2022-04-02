<?php
/* Smarty version 3.1.30, created on 2022-01-22 19:51:25
  from "/var/www/html/iksy06/klausur2/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61ec522d653959_31754303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76df67e64d0ecfb69cb03687c6d27d6a7b689238' => 
    array (
      0 => '/var/www/html/iksy06/klausur2/smarty/templates/loesung.tpl',
      1 => 1642877481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ec522d653959_31754303 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<label>Haushaltsvorstand</label>
		<input type="text" name="haushaltsvorstand"  required>
		<label>Strasses</label>
		<input type="text" id="strasse" name="strasse" required>
		<label>Hausnummer</label>
		<input type="text" name="hausnummer" required>
		<label>Postleitzahl</label>
		<input type="text" name="plz" pattern="\d{5}">
		<input type="submit" name="Button1" value="Berechne">
	</form>
	<?php } else { ?> 
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			Sehr geehrte/r Frau/Herr <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

			<br>
			Ihre Müllgebühren betragen <?php echo $_smarty_tpl->tpl_vars['betrag']->value;?>
 Euro. 
		<?php }?>
	<?php }?>

</body>
</html>
<?php }
}
