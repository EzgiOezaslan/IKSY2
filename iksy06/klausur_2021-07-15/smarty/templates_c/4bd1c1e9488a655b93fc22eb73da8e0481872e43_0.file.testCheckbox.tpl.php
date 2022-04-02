<?php
/* Smarty version 3.1.30, created on 2018-12-04 11:18:42
  from "/var/www/html/iksy05/uebungZusammenfassungAlt/smarty/templates/testCheckbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c065482bd2c26_12117146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd1c1e9488a655b93fc22eb73da8e0481872e43' => 
    array (
      0 => '/var/www/html/iksy05/uebungZusammenfassungAlt/smarty/templates/testCheckbox.tpl',
      1 => 1543918717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c065482bd2c26_12117146 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kopierladen</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2>Copyshop-Aufgabe</h2>

	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>	
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">	
			<label>Farbige Kopien?</label>
			<input type="checkbox" name="farbe" value="">
			<label>Binden lassen?</label>
			<input type="checkbox" name="binden">
			<input type="submit" name="Button1" value="Abschicken"">
		</form>
	<?php } else { ?> 		 					 
		<table>
			<tr><th>Farbe existiert:  </th><td> <?php echo $_smarty_tpl->tpl_vars['farbeExistiert']->value;?>
</td>
			<tr><th>Bindung existiert:  </th><td> <?php echo $_smarty_tpl->tpl_vars['bindungExistiert']->value;?>
</td>
			<?php if ((isset($_smarty_tpl->tpl_vars['farbe']->value))) {?>
				<tr><th>Farbe:  </th><td> <?php echo $_smarty_tpl->tpl_vars['farbe']->value;?>
</td>				
			<?php }?> 
			<?php if ((isset($_smarty_tpl->tpl_vars['bindung']->value))) {?>
				<tr><th>Bindung:  </th><td> <?php echo $_smarty_tpl->tpl_vars['bindung']->value;?>
</td>				
			<?php }?> 
		</table>
	<?php }?>
</body>
</html>
<?php }
}
