<?php
/* Smarty version 3.1.30, created on 2018-06-20 10:22:54
  from "/var/www/html/Altklausuren/klausur2/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2a0ede65f8d2_10589022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c8119ae1a41c4f6161ca2aecf4fec7da882537d' => 
    array (
      0 => '/var/www/html/Altklausuren/klausur2/smarty/templates/loesung.tpl',
      1 => 1481033703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2a0ede65f8d2_10589022 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<label>Kundennummer</label>
		<input type="number" name="kundennummer" min="1" required>
		<label>Anzahl Erstratings</label>
		<input type="number" id="anzahlErstratings" name="anzahlErstratings" min="1" max="500" required>
		<label>Anzahl Folgeratings</label>
		<input type="number" name="anzahlFolgeratings" min="1" max="500" required>
		<input type="submit" name="Button1" value="Abschicken">
	</form>
	<?php } else { ?> 
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			<table>
				<tr><th>Unternehmen: </th><td> <?php echo $_smarty_tpl->tpl_vars['unternehmen']->value;?>
</td>
				<tr><th>Kundenart: 	 </th><td> <?php echo $_smarty_tpl->tpl_vars['kundenart']->value;?>
</td>
				<tr><th>Betrag:      </th><td> <?php echo $_smarty_tpl->tpl_vars['betrag']->value;?>
 Euro.</td>
		</table>
		<?php }?>
	<?php }?>

</body>
</html>
<?php }
}
