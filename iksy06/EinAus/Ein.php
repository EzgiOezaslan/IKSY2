<?php


$mysqli = new mysqli("localhost","wiInf","wiInf","wiInf_tutorialsource");
if ($mysqli->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}



$sql ="Select*From messwerte";
$statement = $mysqli->prepare($sql);
$statement->execute();
$result = $statement->get_result();

//while($row = $result->fetch_object()) {
  //  echo $row->wert;


//Alternativ mit fetch_assoc():
while($row = $result->fetch_assoc()) {
    echo $row['id']."-".$row['wert']."<br>";
}




?>


	
