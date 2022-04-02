<?php
$host = "localhost";
$name = "wiInf_mitarbeiter";
$user = "wiInf";
$passwort = "wiInf";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
 ?>
