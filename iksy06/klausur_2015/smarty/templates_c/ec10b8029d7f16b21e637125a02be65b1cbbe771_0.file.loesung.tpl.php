<?php /* Smarty version 3.1.27, created on 2016-12-05 17:02:23
         compiled from "/srv/www/htdocs/phpJavascript/Altklausuren/klausur_2015/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:51231182758458f8f4cb993_69329755%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec10b8029d7f16b21e637125a02be65b1cbbe771' => 
    array (
      0 => '/srv/www/htdocs/phpJavascript/Altklausuren/klausur_2015/smarty/templates/loesung.tpl',
      1 => 1480953740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51231182758458f8f4cb993_69329755',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'fehler' => 0,
    'adresse' => 0,
    'warmmiete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58458f8f4e6b88_51576429',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58458f8f4e6b88_51576429')) {
function content_58458f8f4e6b88_51576429 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '51231182758458f8f4cb993_69329755';
?>
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

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<label for="wohnanlage">Nummer der Wohnanlage</label>
		<input type="number" id="wohnanlage" name="wohnanlage" min="1" required>
		<label for="wohnflaeche">Wohnfläche</label>
		<input type="number" id="wohnflaeche" name="wohnflaeche" min="15" max="250" required>

		<label for="ausstattungEinfach">Ausstattung einfach</label>
		<input type="radio" id="ausstattungEinfach" name="ausstattung" value="einfach" selected>
		<label for="ausstattungMittel">Ausstattung mittel</label>
		<input type="radio" id="ausstattungMittel" name="ausstattung" value="mittel">
		<label for="ausstattungGehoben">Ausstattung gehoben</label>
		<input type="radio" id="ausstattungGehoben" name="ausstattung" value="gehoben">
		
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			Die Warmmiete für die von Ihnen gewählte Wohneinheit in der "<?php echo $_smarty_tpl->tpl_vars['adresse']->value;?>
" beträgt <?php echo $_smarty_tpl->tpl_vars['warmmiete']->value;?>
 Euro.
		 <?php }?>
	 <?php }?>
</body>
</html>
<?php }
}
?>