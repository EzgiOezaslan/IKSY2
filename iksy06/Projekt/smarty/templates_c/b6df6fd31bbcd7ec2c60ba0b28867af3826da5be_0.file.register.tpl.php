<?php
/* Smarty version 3.1.30, created on 2022-04-01 23:06:27
  from "/var/www/html/iksy06/Projekt/smarty/templates/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62476953885ba3_73922622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6df6fd31bbcd7ec2c60ba0b28867af3826da5be' => 
    array (
      0 => '/var/www/html/iksy06/Projekt/smarty/templates/register.tpl',
      1 => 1645763114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62476953885ba3_73922622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Account erstellen</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
<h1>Account erstellen</h1>
    <form action="register.php" method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="pw" placeholder="Passwort" required><br>
      <input type="password" name="pw2" placeholder="Passwort wiederholen" required><br>
      <button type="submit" name="submit">Erstellen</button>
    </form>
    <br>
    <a href="index.php">Hast du bereits einen Account?</a>
  </body>
</html>
<?php }
}
