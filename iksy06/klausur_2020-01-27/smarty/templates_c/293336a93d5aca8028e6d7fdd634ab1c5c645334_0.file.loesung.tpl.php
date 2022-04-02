<?php
/* Smarty version 3.1.30, created on 2020-01-09 11:53:14
  from "/var/www/html/uebungZusammenfassung/smarty/templates/loesung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e17061a87fd24_23717142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '293336a93d5aca8028e6d7fdd634ab1c5c645334' => 
    array (
      0 => '/var/www/html/uebungZusammenfassung/smarty/templates/loesung.tpl',
      1 => 1578567135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e17061a87fd24_23717142 (Smarty_Internal_Template $_smarty_tpl) {
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
			<label>Kundennummer</label>
			<input type="number" name="kundennummer" min="1" required>
			<label>Anzahl Seiten</label>
			<input type="number" id="anzahlSeiten" name="anzahlSeiten" min="1" max="1000" required>
			<label>Anzahl Exemplare</label>
			<input type="number" name="anzahlExemplare" min="1" max="50" required>
			<label>Farbige Kopien?</label>
			<input type="checkbox" name="farbe">
			<label>Binden lassen?</label>
			<input type="checkbox" name="binden">
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<input type="submit" name="Button1" value="Abschicken"">
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
