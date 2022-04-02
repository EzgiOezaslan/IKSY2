<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account erstellen</title>
  </head>
  <body>
   <h1>Account erstellen</h1>
    <form action="register.php" method="post">
     	<input type="number" name="id" placeholder="id" required><br>
     	 <input type="number" name="wert" placeholder="wert" required><br>
      
      <button type="submit" name="submit">Erstellen</button>
    </form>
    <br>
    
  </body>
</html>
  <?php



    
    
    $id=$_POST['id'];
    $wert=$_POST['wert'];
    
$pdo = new PDO('mysql:host=localhost;dbname=wiInf_tutorialsource', 'wiInf', 'wiInf');
 
$statement = $pdo->prepare("INSERT INTO messwerte (id, wert) VALUES ($id,$wert)");
$statement->execute(array($id,$wert));   
?>


     
     
     
     
   
   
   
      

    

