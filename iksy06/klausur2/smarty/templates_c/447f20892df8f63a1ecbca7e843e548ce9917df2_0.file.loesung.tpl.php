<?php /* Smarty version 3.1.27, created on 2016-12-05 16:44:06
         compiled from "/srv/www/htdocs/phpJavascript/Altklausuren/klausur2/smarty/templates/loesung.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1909339658458b46d89ef5_93408153%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447f20892df8f63a1ecbca7e843e548ce9917df2' => 
    array (
      0 => '/srv/www/htdocs/phpJavascript/Altklausuren/klausur2/smarty/templates/loesung.tpl',
      1 => 1401448796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909339658458b46d89ef5_93408153',
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'fehler' => 0,
    'unternehmen' => 0,
    'kundenart' => 0,
    'betrag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58458b46e03915_22822130',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58458b46e03915_22822130')) {
function content_58458b46e03915_22822130 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1909339658458b46d89ef5_93408153';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Debit-Revolution: Ratings</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Debit-Revolution: Ratings</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
		<label>Kundennummer</label>
		<input type="number" name="kundennummer" min="1" required>
		<label>Anzahl Erstratings</label>
		<input type="number" id="anzahlErstratings" name="anzahlErstratings" min="1" max="500" required>
		<label>Anzahl Folgeratings</label>
		<input type="number" name="anzahlFolgeratings" min="1" max="500" required>
		<input type="submit" name="Button1" value="Abschicken">
	</form>
	<?php } else { ?> 
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzulässige Eingabe.
		<?php } else { ?> 
			<table>
				<tr><th>Unternehmen: </th><td> <?php echo $_smarty_tpl->tpl_vars['unternehmen']->value;?>
</td>
				<tr><th>Kundenart: 	 </th><td> <?php echo $_smarty_tpl->tpl_vars['kundenart']->value;?>
</td>
				<tr><th>Betrag:      </th><td> <?php echo $_smarty_tpl->tpl_vars['betrag']->value;?>
 Euro.</td>
		</table>
		<?php }?>
	<?php }?>

</body>
</html>
<?php }
}
?>