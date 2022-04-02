<?php
/* Smarty version 3.1.30, created on 2021-07-06 15:08:43
  from "/home/iksy/iksy05/klausur_2021-07-12/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60e455db988ab0_85734103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd18e248cfb6ee95498dad91366ffee2ac58c96b6' => 
    array (
      0 => '/home/iksy/iksy05/klausur_2021-07-12/smarty/templates/loesung.tpl',
      1 => 1625576919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e455db988ab0_85734103 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Versandhandel</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Auswahl Paketdienstleister</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<label>Länge (cm)</label>
			<input type="number" name="laenge" min="10" max="150" required>
			<label>Breite (cm)</label>
			<input type="number" name="breite" min="10" max="150" required>
			<label>Höhe (cm)</label>
			<input type="number" name="hoehe" min="10" max="150" required>
			<label>Entfernung (km)</label>
			<input type="number" name="entfernung" min="0" max="1000" required>
			<label>fragiler Inhalt?</label>
			<input type="checkbox" name="fragil"">
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<input type="submit" name="Button1" value="Abschicken"">
		</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			<?php echo $_smarty_tpl->tpl_vars['ausgabeText']->value;?>

			<?php if ((isset($_smarty_tpl->tpl_vars['ausgabeText2']->value))) {?>
				<br>
				<b><?php echo $_smarty_tpl->tpl_vars['ausgabeText2']->value;?>
</b>
				<br>
			<?php }?>
		<?php }?> 		 					
	<?php }?>
</body>
</html>
<?php }
}
