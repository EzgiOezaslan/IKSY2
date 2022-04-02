<?php /* Smarty version 3.1.27, created on 2022-01-22 16:39:30
         compiled from "/var/www/html/iksy06/klausur_2014/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159964565261ec2532684dc8_79234509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6400248ac823e95e703201b035b912cd54ffbb37' => 
    array (
      0 => '/var/www/html/iksy06/klausur_2014/smarty/templates/loesung.tpl',
      1 => 1642865966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159964565261ec2532684dc8_79234509',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'csrfToken' => 0,
    'kundendaten' => 0,
    'vertragnummer' => 0,
    'kunde' => 0,
    'fehler' => 0,
    'ausgabe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_61ec25326c12f7_21339000',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_61ec25326c12f7_21339000')) {
function content_61ec25326c12f7_21339000 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159964565261ec2532684dc8_79234509';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Störfallbehebung</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/Forms.css">
<link rel="stylesheet" type="text/css" href="./css/Tables.css">

</head>
<body>
	<h2>Störfallbehebnung</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
		<label for="kunde">Kunde</label>
 		<select name="vertragnummer">
		<?php
$_from = $_smarty_tpl->tpl_vars['kundendaten']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['kunde'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['kunde']->_loop = false;
$_smarty_tpl->tpl_vars['vertragnummer'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['vertragnummer']->value => $_smarty_tpl->tpl_vars['kunde']->value) {
$_smarty_tpl->tpl_vars['kunde']->_loop = true;
$foreach_kunde_Sav = $_smarty_tpl->tpl_vars['kunde'];
?>
    	<option value="<?php echo $_smarty_tpl->tpl_vars['vertragnummer']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['kunde']->value;?>
</option>    
  		<?php
$_smarty_tpl->tpl_vars['kunde'] = $foreach_kunde_Sav;
}
?>		
		</select>
		
		<label>Anzahl Mitarbeiter</label>
		<input type="number" id="anzahlMitarbeiter" name="anzahlMitarbeiter" min="1" max="5" required>
		<label>Ersatzteilpreis</label>
		<input type="number" id="ersatzteilpreis" name="ersatzteilpreis" min="1" max="1000" required>
		<label>Reaktionszeit Ok?</label>
		<input type="checkbox" id="reaktionszeitOk" name="reaktionszeitOk">
		<label>PDF-Ausgabe?</label>
		<input type="checkbox" id="pdf" name="pdf">
		<input type="submit" name="Button1" value="Berechnen">
	</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			<?php echo $_smarty_tpl->tpl_vars['ausgabe']->value;?>
<br>
		 <?php }?>
	 <?php }?>
</body>
</html>
<?php }
}
?>