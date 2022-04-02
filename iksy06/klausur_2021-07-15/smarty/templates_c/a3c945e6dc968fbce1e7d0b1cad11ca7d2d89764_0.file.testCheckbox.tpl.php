<?php
/* Smarty version 3.1.30, created on 2018-12-04 12:02:43
  from "/var/www/html/IKSY/Uebung/uebungZusammenfassung/smarty/templates/testCheckbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c065ed3df8986_06312068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c945e6dc968fbce1e7d0b1cad11ca7d2d89764' => 
    array (
      0 => '/var/www/html/IKSY/Uebung/uebungZusammenfassung/smarty/templates/testCheckbox.tpl',
      1 => 1543918748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c065ed3df8986_06312068 (Smarty_Internal_Template $_smarty_tpl) {
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
			<input type="checkbox" name="farbe" value="F">
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
