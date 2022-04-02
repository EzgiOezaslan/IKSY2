<?php
/* Smarty version 3.1.30, created on 2020-01-22 18:29:22
  from "/var/www/html/uebung2/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e288672d26492_88953309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06fb6f65cd4360666070b216cbed775b42f3f8b' => 
    array (
      0 => '/var/www/html/uebung2/smarty/templates/loesung.tpl',
      1 => 1579714160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e288672d26492_88953309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kleinbrennerei</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Kleinbrennereikosten</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<label>Kunde</label>
			<input type="text" name="kunde" required>
			<label>Anzahl Flaschen Obstler</label>
			<input type="number" id="anzahlObstler" name="anzahlObstler" min="1" max="25" required>
			<label>Anzahl Flaschen Quitte</label>
			<input type="number" name="anzahlQuitte" min="1" max="25" required>
			<label>Geschenkverpackung?</label>
			<input type="checkbox" name="geschenkverpackung"">
			<!-- <label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">-->
			<input type="submit" name="Button1" value="Abschicken"">
		</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			<?php echo $_smarty_tpl->tpl_vars['ausgabeText']->value;?>

			<?php if ((isset($_smarty_tpl->tpl_vars['ausgabeText2']->value))) {?>
				<br>
				<i><?php echo $_smarty_tpl->tpl_vars['ausgabeText2']->value;?>
</i>
				<br>
			<?php }?>
		<?php }?> 		 					
	<?php }?>
</body>
</html>
<?php }
}
