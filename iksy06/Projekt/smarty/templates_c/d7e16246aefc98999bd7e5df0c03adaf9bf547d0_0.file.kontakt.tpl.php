<?php
/* Smarty version 3.1.30, created on 2022-02-25 03:13:22
  from "/home/iksy/iksy05/Projekt/smarty/templates/kontakt.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62183b427139a0_98295884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7e16246aefc98999bd7e5df0c03adaf9bf547d0' => 
    array (
      0 => '/home/iksy/iksy05/Projekt/smarty/templates/kontakt.tpl',
      1 => 1645755198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62183b427139a0_98295884 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>KONTAKT</title>
	<link rel="stylesheet" type="text/css" href="../../css/kontakt.css">
	<link rel="stylesheet" type="text/css" href="../../css/style1.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
	
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	
</head>
<body>


    <!-----NavigationBar----->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php"><img src="../img/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ml-auto">
           
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../anmelden.php" >Anmelden</a>
            </li>
          </ul>
          
        </div>
      </nav>
 </section>
 
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Kontakt</h2>
				<form action="kontakt.php" method="post">
				
					<input type="text" id="name" name="name" class="field" placeholder="Name" required>
				
					<input type="text" id="email" name="email" class="field" placeholder="Email" required>
				

					<textarea placeholder="Nachricht" id="nachricht" name="nachricht" class="field"></textarea>
				
					<input type="submit" name="submit" value="Absenden">
				<!--  <button class="btn"> Senden</button>-->
				</form>
			</div>
		</div>
	</div>
</body>
</html>
			 					
	
</body>
</html>

<?php }
}
