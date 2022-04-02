<?php /* Smarty version 3.1.27, created on 2016-12-05 16:53:11
         compiled from "/srv/www/htdocs/phpJavascript/Altklausuren/klausur3/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144810533258458d67df00c9_82476244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '755166dc6c7f480f8f91770e9ea03959143778f4' => 
    array (
      0 => '/srv/www/htdocs/phpJavascript/Altklausuren/klausur3/smarty/templates/loesung.tpl',
      1 => 1401450032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144810533258458d67df00c9_82476244',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'fehler' => 0,
    'name' => 0,
    'gebuehren' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58458d67e5b960_88002272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58458d67e5b960_88002272')) {
function content_58458d67e5b960_88002272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144810533258458d67df00c9_82476244';
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
?>