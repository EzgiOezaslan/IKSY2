<?php /* Smarty version Smarty-3.1.13, created on 2019-01-21 15:48:42
         compiled from "/srv/www/htdocs/IKSY/Altklausuren/klausur_2016-01-28a/smarty/templates/loesung.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20828178915c45dbcacf3f63-30809264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '611e12661e28ba8ecb23ebf17742c13f76c45d4d' => 
    array (
      0 => '/srv/www/htdocs/IKSY/Altklausuren/klausur_2016-01-28a/smarty/templates/loesung.tpl',
      1 => 1548081887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20828178915c45dbcacf3f63-30809264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PHP_SELF' => 0,
    'salzpreis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5c45dbcad45cd0_15164743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c45dbcad45cd0_15164743')) {function content_5c45dbcad45cd0_15164743($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Forms.css">
	<link rel="stylesheet" type="text/css" href="css/Tables.css">
    <title>Salzpreis</title>
    <script type='text/javascript' src='./javascript/jquery-3.1.1.min.js'>
	</script>
	<script 
			src="./javascript/javascript.js">
	</script>
</head>
<body>
	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))){?>
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<label for="kommune">Kommune</label>
			<input type="input" id="kommune" name="kommune" required>
			<label for="laengeStrassennetz">Länge Straßennetz</label>
			<input type="number" id="laengeStrassennetz" name="laengeStrassennetz" min="1000" max="10000" required>
			<label for="davonNebenstrassen">davon Nebenstraßen</label>
			<input type="number" id="davonNebenstrassen" name="davonNebenstrassen" required>					
			<input type="submit" name="Button1" value="Berechnen">
		</form>
<?php }else{ ?>
    Der Salzpreis beträgt <?php echo $_smarty_tpl->tpl_vars['salzpreis']->value;?>

<?php }?>
</body>
</html><?php }} ?>