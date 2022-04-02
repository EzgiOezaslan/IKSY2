<?php
/* Smarty version 3.1.30, created on 2022-02-25 16:59:27
  from "/home/iksy/iksy05/Projekt/smarty/templates/anmelden.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6218fcdfbf0d84_13035698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ae0f090ca18c88da999bfab5641463e23ba22e9' => 
    array (
      0 => '/home/iksy/iksy05/Projekt/smarty/templates/anmelden.tpl',
      1 => 1645804764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6218fcdfbf0d84_13035698 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style1.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>Anmelden</title>
  
  <link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php"><img src="../klassen/img/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              
            <li class="nav-item">
              <a class="nav-link " href="register.php" >Registrieren</a>
              
            </li>
          </ul>
          
        </div>
      </nav>
</section>



</head>
<body>
  <div class="login-wrapper">
    <form action="anmelden.php" class="form" method="post">
      <img src="avatar.png" alt="">
      <h2>Anmelden</h2>
      
      <div class="input-group">
        <input type="text" name="username" placeholder="Benutzername" required>
        <label for="Username"></label>
      </div>
      
      <div class="input-group">
        <input type="password" name="pw" placeholder="Passwort" required>
        <label for="Passwort"></label>
      </div>
      
       <input type="submit" name="submit" value="submit" class="submit-btn">
      
      <br><a href="register.php">Noch keinen Account?</a></br>
      <br><a href="#forgot-pw" class="forgot-pw">Passwort vergessen?</a></br>
    </form>


    <div id="forgot-pw">
      <form action="anmelden.php" class="form"  method="post">
        <a href="#" class="close">&times;</a>
        <h2>Passwort vergessen</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
</body>
</html>
 	<?php }
}
