<?php /* Smarty version 3.1.27, created on 2021-12-10 14:01:36
         compiled from "/var/www/html/iksy05/Altklausuren/klausur_2016/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97691550061b34fb0d7de63_92888779%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e19af0e821c4a7ab5b385765746270864ee00531' => 
    array (
      0 => '/var/www/html/iksy05/Altklausuren/klausur_2016/smarty/templates/loesung.tpl',
      1 => 1639141291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97691550061b34fb0d7de63_92888779',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'csrfToken' => 0,
    'kundendaten' => 0,
    'vertragsnummer' => 0,
    'kunde' => 0,
    'fehler' => 0,
    'ausgabeText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_61b34fb0d93180_80750842',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_61b34fb0d93180_80750842')) {
function content_61b34fb0d93180_80750842 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97691550061b34fb0d7de63_92888779';
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
		<input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
		
		<label for="kunde">Kunde</label>
 		<select name="vertragsnummer">
		<?php
$_from = $_smarty_tpl->tpl_vars['kundendaten']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['kunde'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['kunde']->_loop = false;
$_smarty_tpl->tpl_vars['vertragsnummer'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['vertragsnummer']->value => $_smarty_tpl->tpl_vars['kunde']->value) {
$_smarty_tpl->tpl_vars['kunde']->_loop = true;
$foreach_kunde_Sav = $_smarty_tpl->tpl_vars['kunde'];
?>
    		<option value="<?php echo $_smarty_tpl->tpl_vars['vertragsnummer']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['kunde']->value;?>
</option>    
  		<?php
$_smarty_tpl->tpl_vars['kunde'] = $foreach_kunde_Sav;
}
?>		
		</select>
		
		<label for="anzahlMitarbeiter">Anzahl Mitarbeiter</label>
		<input type="number" id="anzahlMitarbeiter" name="anzahlMitarbeiter" min="1" max="5" required>
		
		<label for="preisErsatzteile">Ersatzteilpreis</label>
		<input type="number" id="preisErsatzteile" name="preisErsatzteile" min="0.00" max="9999.99" step="0.01" required>
		
		<label for="reaktionszeitOK">Reaktionszeit OK?</label>
		<input type="checkbox" id="reaktionszeitOK" name="reaktionszeitOK">
		
		<label for="pdf">PDF Ausgabe?</label>
		<input type="checkbox" id="pdf" name="pdf">

		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			<?php echo $_smarty_tpl->tpl_vars['ausgabeText']->value;?>

		 <?php }?>
	 <?php }?>
</body>
</html>
<?php }
}
?>