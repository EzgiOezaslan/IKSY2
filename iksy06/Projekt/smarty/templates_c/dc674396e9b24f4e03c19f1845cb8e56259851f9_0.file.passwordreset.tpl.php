<?php
/* Smarty version 3.1.30, created on 2022-02-25 16:44:23
  from "/home/iksy/iksy05/Projekt/smarty/templates/passwordreset.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6218f957bc8009_54778207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc674396e9b24f4e03c19f1845cb8e56259851f9' => 
    array (
      0 => '/home/iksy/iksy05/Projekt/smarty/templates/passwordreset.tpl',
      1 => 1645803737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6218f957bc8009_54778207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<h1>Passwort vergessen?</h1>
    <form action="passwordreset.php" method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <button type="submit" name="submit">Zurücksetzen</button>
    </form>
</body>

</html><?php }
}
