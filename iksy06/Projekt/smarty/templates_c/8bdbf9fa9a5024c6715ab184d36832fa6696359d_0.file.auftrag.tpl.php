<?php
/* Smarty version 3.1.30, created on 2022-02-22 07:20:50
  from "/home/iksy/iksy05/Projekt/smarty/templates/auftrag.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_621480c21babb4_32930698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bdbf9fa9a5024c6715ab184d36832fa6696359d' => 
    array (
      0 => '/home/iksy/iksy05/Projekt/smarty/templates/auftrag.tpl',
      1 => 1645510840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621480c21babb4_32930698 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
<title>Kopierladen</title>


<link rel="stylesheet" type="text/css" href="../../css/Forms.css">

<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ><?php echo '</script'; ?>
> 


</head>



    <!-----NavigationBar----->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../img/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="auftrag.php">Aufträge hinzufügen</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="mitarbeiter.php">Mitarbeiter hinzufügen</a>
            </li>
          
            
            
            <li class="nav-item">
              <a class="nav-link " href="../../index.php">Abmelden</a>
            </li>
          </ul>
          
        </div>
      </nav>
</section>

<body>
	<h1>Copyshop-Aufgabe</h1>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
	
	

	
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
			
			
			<label>Auftrag</label>
			<input type="text" name="auftrag" required>
			
			
			<label>Text</label>
			<input type="text" name="text" required>
			
			<label>Abkurzzung</label>
			<input type="text" name="abkuerzung" required>
			
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<label>&nbsp;</label>
			<input type="submit" name="Button1" value="Abschicken">
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
