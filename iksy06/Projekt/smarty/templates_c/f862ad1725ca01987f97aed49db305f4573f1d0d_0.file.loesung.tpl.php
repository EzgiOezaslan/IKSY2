<?php
/* Smarty version 3.1.30, created on 2022-02-17 21:31:47
  from "/home/iksy/iksy05/Projekt/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_620eb0b3d40eb4_07384977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f862ad1725ca01987f97aed49db305f4573f1d0d' => 
    array (
      0 => '/home/iksy/iksy05/Projekt/smarty/templates/loesung.tpl',
      1 => 1645129905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620eb0b3d40eb4_07384977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
<title>Kopierladen</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/Forms.css">
<link rel="stylesheet" type="text/css" href="../../css/Tables.css">



</head>
<body>
	<h2>Copyshop-Aufgabe</h2>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	
	<a href="../../index.php">Abmelden</a>
	
	
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
			<label>Kundennummer</label>
			<!-- <input type="number" name="kundennummer" min="1" required>-->			
			<select name="kundennummer">	
 			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kundendaten']->value, 'kundenname', false, 'kundennummer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kundennummer']->value => $_smarty_tpl->tpl_vars['kundenname']->value) {
?>
    			<option value="<?php echo $_smarty_tpl->tpl_vars['kundennummer']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['kundenname']->value;?>
</option>    
  			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		
			</select>
			<label>Anzahl Seiten</label>
			<input type="number" id="anzahlSeiten" name="anzahlSeiten" min="1" max="1000" required>
			<label>Anzahl Exemplare</label>
			<input type="number" name="anzahlExemplare" min="1" max="50" required>
			<label>Farbige Kopien?</label>
			<input type="checkbox" name="farbe">
			<label>Binden lassen?</label>
			<input type="text" name="binden" required>
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<label>&nbsp;</label>
			<input type="submit" name="Button1" value="Abschicken">
		</form>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['fehler']->value))) {?>
			Unzul??ssige Eingabe.
		<?php } else { ?> 
			<?php echo $_smarty_tpl->tpl_vars['ausgabeText']->value;?>

			
		<?php }?> 		 					
	<?php }?>
</body>
</html>

<?php }
}
