<?php
#zentrale Konfigurationsdatei

$ROOT_DIR='/srv/www/htdocs/phpJavascript/uebungsklausuren/2014-02-01/';

DEFINE("DB_SERVER","pav05vm2.fh-bochum.de");#ip oder name des Datenbankservers
DEFINE("DB_USER","wiInf");#benutzer
DEFINE("DB_PASSWORD","wiInf");#passwort
DEFINE("DB_DATABASE","wiInf_Schluesseldienst");#Name der Datenbank


$REQUEST_METHOD=$_SERVER['REQUEST_METHOD'];





$smarty->assign('PHP_SELF', $PHP_SELF);	


?>