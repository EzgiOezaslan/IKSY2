<?php
/* Smarty version 3.1.30, created on 2018-06-27 13:41:54
  from "/var/www/html/iksy05/Altklausuren/klausur3/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b337802cb8ef3_26801215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55d1f9b47c6338556dec0800c49642ee73570ed5' => 
    array (
      0 => '/var/www/html/iksy05/Altklausuren/klausur3/smarty/templates/loesung.tpl',
      1 => 1529480814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b337802cb8ef3_26801215 (Smarty_Internal_Template $_smarty_tpl) {
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
		<input type="text" id="haushaltsvorstand" name="haushaltsvorstand" required>
		<label>Strasse</label>
		<input type="text" id="strasse" name="strasse">
		<label>Hausnummer</label>
		<input type="text" id="hausnummer" name="hausnummer">
		<label>Postleitzahl</label>
		<input type="text" id="postleitzahl" name="postleitzahl" pattern="\d{5}">
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			Sehr geehrte/r Frau/Herr  <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
. <br>
			Ihre Müllgebühren betragen <i><?php echo $_smarty_tpl->tpl_vars['gebuehren']->value;?>
 Euro</i>.
		 <?php }?>
	 <?php }?>
</body>
</html>
<?php }
}
