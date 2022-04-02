<?php /* Smarty version 3.1.27, created on 2018-06-27 13:51:34
         compiled from "/var/www/html/iksy05/Altklausuren/klausur_2014_2/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8370198715b337a463287a3_36981478%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87424600251e5a4a5c6485b3495139d62b93e476' => 
    array (
      0 => '/var/www/html/iksy05/Altklausuren/klausur_2014_2/smarty/templates/loesung.tpl',
      1 => 1529480822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8370198715b337a463287a3_36981478',
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
  'unifunc' => 'content_5b337a46380fc8_60649008',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b337a46380fc8_60649008')) {
function content_5b337a46380fc8_60649008 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8370198715b337a463287a3_36981478';
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