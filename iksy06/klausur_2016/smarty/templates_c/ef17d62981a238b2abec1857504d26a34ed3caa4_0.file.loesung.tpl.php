<?php /* Smarty version 3.1.27, created on 2016-12-05 17:10:57
         compiled from "/srv/www/htdocs/phpJavascript/Altklausuren/klausur_2016/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:198141029058459191542db8_74346450%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef17d62981a238b2abec1857504d26a34ed3caa4' => 
    array (
      0 => '/srv/www/htdocs/phpJavascript/Altklausuren/klausur_2016/smarty/templates/loesung.tpl',
      1 => 1467028999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198141029058459191542db8_74346450',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'fehler' => 0,
    'kunde' => 0,
    'gewinn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58459191558847_35368451',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58459191558847_35368451')) {
function content_58459191558847_35368451 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '198141029058459191542db8_74346450';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Störfallbehebung</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Störfallbehebung</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<label for="kunde">Kunde</label>
		<input type="input" id="kunde" name="kunde" required>
		<label for="anzahlMitarbeiter">Anzahl Mitarbeiter</label>
		<input type="number" id="anzahlMitarbeiter" name="anzahlMitarbeiter" min="1" max="5" required>
		<label for="preisErsatzteile">Ersatzteilpreis</label>
		<input type="number" id="preisErsatzteile" name="preisErsatzteile" min="0.00" max="9999.99" step="0.01" required>
		<label for="reaktionszeitOK">Reaktionszeit OK</label>
		<input type="checkbox" id="reaktionszeitOK" name="reaktionszeitOK">

		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			Der Gewinn für Störfallbehebung beim Kunden "<?php echo $_smarty_tpl->tpl_vars['kunde']->value;?>
" beträgt <?php echo $_smarty_tpl->tpl_vars['gewinn']->value;?>
 Euro.
		 <?php }?>
	 <?php }?>
</body>
</html>
<?php }
}
?>