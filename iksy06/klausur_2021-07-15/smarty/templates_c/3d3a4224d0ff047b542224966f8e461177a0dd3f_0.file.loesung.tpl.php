<?php
/* Smarty version 3.1.30, created on 2021-02-11 11:24:47
  from "/home/iksy/iksy05/klausur_2020-07-16/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_602505ef53aa92_29598220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3a4224d0ff047b542224966f8e461177a0dd3f' => 
    array (
      0 => '/home/iksy/iksy05/klausur_2020-07-16/smarty/templates/loesung.tpl',
      1 => 1594125382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602505ef53aa92_29598220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Weinhandel</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Kosten Weinhandel</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<label>Kunde</label>
			<input type="text" name="kunde" required>
			<label>Anzahl Flaschen Rotwein</label>
			<input type="number" name="anzahlRotwein" min="0" max="30" required>
			<label>Anzahl Flaschen Weißwein</label>
			<input type="number" name="anzahlWeisswein" min="0" max="30" required>
			<label>Anzahl Flaschen Roséwein</label>
			<input type="number" name="anzahlRosewein" min="0" max="30" required>
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
