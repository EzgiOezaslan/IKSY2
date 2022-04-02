<?php
/* Smarty version 3.1.30, created on 2022-02-16 00:23:19
  from "/home/iksy/iksy05/Probeklausur/smarty/templates/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_620c35e71d5f42_06925304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b4064594cfa9f779090e10305f0d7f199267ab' => 
    array (
      0 => '/home/iksy/iksy05/Probeklausur/smarty/templates/register.tpl',
      1 => 1644967396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620c35e71d5f42_06925304 (Smarty_Internal_Template $_smarty_tpl) {
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
    <a href="../anmelden.php">Hast du bereits einen Account?</a>
  </body>
</html>
<?php }
}
