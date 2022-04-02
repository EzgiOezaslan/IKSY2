<?php

session_start();

require_once ("../includes/startTemplate.inc.php");
require_once ("DbFunctions.inc.php");


$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabaseAnmelden();


if(isset($_POST["submit"])){
    
    $stmt = $link->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
    $stmt->bindParam(":user", $_POST["username"]);
    $stmt->execute();
    $count = $stmt->rowCount();
    if($count == 0){
        //Username ist frei
        if($_POST["pw"] == $_POST["pw2"]){
            //User anlegen
            $stmt = $link->prepare("INSERT INTO accounts (USERNAME, PASSWORD) VALUES (:user, :pw)");
            $stmt->bindParam(":user", $_POST["username"]);
            $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
            $stmt->bindParam(":pw", $hash);
            $stmt->execute();
            echo "Dein Account wurde angelegt";
        } else {
            echo "Die Passwörter stimmen nicht überein";
        }
    } else {
        echo "Der Username ist bereits vergeben";
    }
}

$smarty->display ( 'register.tpl' );
?>
    
   
   
      

    

