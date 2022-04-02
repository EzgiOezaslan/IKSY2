<?php
/* Smarty version 3.1.30, created on 2022-01-22 16:55:48
  from "/var/www/html/iksy06/klausur1/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_61ec2904551ab0_45305274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e3578de9bcc9f3a83cde5f468a7e155455c07ab' => 
    array (
      0 => '/var/www/html/iksy06/klausur1/smarty/templates/loesung.tpl',
      1 => 1640074316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ec2904551ab0_45305274 (Smarty_Internal_Template $_smarty_tpl) {
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
		<input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
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
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
		<table>
			<tr><th>Kunde:  </th><td> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
			<tr><th>Rabatt: </th><td> <?php echo $_smarty_tpl->tpl_vars['rabatt']->value;?>
%</td>
			<tr><th>Betrag: </th><td> <?php echo $_smarty_tpl->tpl_vars['betrag']->value;?>
 Euro</td>
		</table>
<?php }
}?>
</body>
</html>
<?php }
}
