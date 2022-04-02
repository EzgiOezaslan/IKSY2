<?php /* Smarty version 3.1.27, created on 2021-12-14 12:45:27
         compiled from "/var/www/html/iksy05/Altklausuren/klausur_2014/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:73944583661b883d7ee7be7_49720676%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbc867284a769ecde1db4a8b7ad2672c9009b62' => 
    array (
      0 => '/var/www/html/iksy05/Altklausuren/klausur_2014/smarty/templates/loesung.tpl',
      1 => 1639482321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73944583661b883d7ee7be7_49720676',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'produktkatalog' => 0,
    'produktnummer' => 0,
    'produkt' => 0,
    'fehler' => 0,
    'ausgabe' => 0,
    'ausgabePreis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_61b883d7eef680_39675820',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_61b883d7eef680_39675820')) {
function content_61b883d7eef680_39675820 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '73944583661b883d7ee7be7_49720676';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Softwarekosten</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/Forms.css">
<link rel="stylesheet" type="text/css" href="./css/Tables.css">

</head>
<body>
	<h2>Softwarekosten</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<label for="produktname">Produktname</label>
 		<select name="produktnummer">
		<?php
$_from = $_smarty_tpl->tpl_vars['produktkatalog']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['produkt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['produkt']->_loop = false;
$_smarty_tpl->tpl_vars['produktnummer'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['produktnummer']->value => $_smarty_tpl->tpl_vars['produkt']->value) {
$_smarty_tpl->tpl_vars['produkt']->_loop = true;
$foreach_produkt_Sav = $_smarty_tpl->tpl_vars['produkt'];
?>
    	<option value="<?php echo $_smarty_tpl->tpl_vars['produktnummer']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['produkt']->value;?>
</option>    
  		<?php
$_smarty_tpl->tpl_vars['produkt'] = $foreach_produkt_Sav;
}
?>		
		</select>
		<label>Anzahl</label>
		<input type="number" id="anzahl" name="anzahl" min="1" max="100" required>
		<label>CD-Versand?</label>
		<input type="checkbox" id="versand" name="versand">
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
			 <i><?php echo $_smarty_tpl->tpl_vars['ausgabePreis']->value;?>
</i>
		 <?php }?>
	 <?php }?>
</body>
</html>
<?php }
}
?>