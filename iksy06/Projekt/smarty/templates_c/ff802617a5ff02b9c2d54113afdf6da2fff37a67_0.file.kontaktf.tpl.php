<?php
/* Smarty version 3.1.30, created on 2022-02-18 03:33:29
  from "/home/iksy/iksy05/Projekt/smarty/templates/kontaktf.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_620f0579b80683_53457875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff802617a5ff02b9c2d54113afdf6da2fff37a67' => 
    array (
      0 => '/home/iksy/iksy05/Projekt/smarty/templates/kontaktf.tpl',
      1 => 1645151605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620f0579b80683_53457875 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
<title>Kopierladen</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/Forms.css">
<link rel="stylesheet" type="text/css" href="../../css/Tables.css">



</head>
<body>
	<h2>Kontakt</h2>

	 
	 
    <form action="../klassen/kontakt.php" method="post">
    
   		<label>Name</label>
      <input type="text" name="name"  required><br>
      
 		<label>Email</label>
      <input type="email" name="email"  required><br>
      
		<select name="priorität">
        <option value="hoch">Hoch</option>
        <option value="mittel">Mittel</option>
        <option value="gering">Gering</option>
      </select><br>
      
      <textarea name="message" id="message" placeholder="message" rows="8" cols="80" required></textarea><br>
      <button type="submit" name="submit">Absenden</button>
    </form>
 

			 					
	
</body>
</html>

<?php }
}
