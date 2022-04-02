<?php /* Smarty version 3.1.27, created on 2016-12-05 16:55:18
         compiled from "/srv/www/htdocs/phpJavascript/Altklausuren/klausur_2014_2/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32032209658458de6755050_70295754%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '576aee1eb73bdf41d32204472c15c4ec2b1ba8ce' => 
    array (
      0 => '/srv/www/htdocs/phpJavascript/Altklausuren/klausur_2014_2/smarty/templates/loesung.tpl',
      1 => 1421329174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32032209658458de6755050_70295754',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'fehler' => 0,
    'wartungsart' => 0,
    'grundpreis' => 0,
    'umsatz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58458de67d3a95_45104864',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58458de67d3a95_45104864')) {
function content_58458de67d3a95_45104864 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32032209658458de6755050_70295754';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Softwarekosten</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Wartungskosten</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<label>Wartungsart</label>
		<input type="text" id="wartungsart" name="wartungsart" required>
		<label for="gesamtarbeitszeit">Gesamtarbeitszeit</label>
		<input type="number" id="gesamtarbeitszeit" name="gesamtarbeitszeit" min="1" max="500" required>
		<label for="nichtImWartungsvertrag">Davon nicht im Wartungsvertrag</label>
		<input type="number" id="nichtImWartungsvertrag" name="nichtImWartungsvertrag" min="0" max="500" required>
		<label for="kundengrundwartung">Kundengrundwartung</label>
		<input type="checkbox" id="kundengrundwartung" name="kundengrundwartung">
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			Die Grundpreis für die von Ihnen gewählte Wartungsart "<?php echo $_smarty_tpl->tpl_vars['wartungsart']->value;?>
" beträgt <?php echo $_smarty_tpl->tpl_vars['grundpreis']->value;?>
 Euro.
			<p>
			Für Ihre Eingaben ergibt sich ein Umsatz von  <i><?php echo $_smarty_tpl->tpl_vars['umsatz']->value;?>
 Euro</i>.
		 <?php }?>
	 <?php }?>
</body>
</html>
<?php }
}
?>