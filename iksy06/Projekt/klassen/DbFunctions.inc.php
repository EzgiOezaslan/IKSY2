<?php

class DbFunctions {

    
    public static function connectWithDatabaseKontakt() {
        
        $host = "localhost";
        $name = "wiInf_kontakt";
        $user = "wiInf";
        $passwort = "wiInf";
        
        $link = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
        //$query = "use wiInf_kontakt";
        //$query = "use wiInf_mitarbeiter";
        //self::executeQuery($link, $query);
        return $link;
 
    }
    
    public static function connectWithDatabaseRegister() {
        
        $host = "localhost";
        //$name = "wiInf_loginsystem";
        $name = "wiInf_test";
        $user = "wiInf";
        $passwort = "wiInf";
        try{
            $link = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
        } catch (PDOException $e){
            echo "SQL Error: ".$e->getMessage();
        }
        return $link;
    }
    
    
    
    public static function connectWithDatabaseAnmelden() {
        
        $host = "localhost";
        //$name = "wiInf_loginsystem";
        $name = "wiInf_test";
        $user = "wiInf";
        $passwort = "wiInf";
        
        try{
            $link = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
        } 
        
        catch (PDOException $e){
            echo "SQL Error: ".$e->getMessage();
        }
        return $link;
    }
    
	public static function connectWithDatabase() {
		
		$link = mysqli_connect('localhost', 'wiInf', 'wiInf');
		$query = "use wiInf_Kopierladen";
		//$query = "use wiInf_mitarbeiter";
		self::executeQuery($link, $query);
		
		return $link;
	}

	public static function getAssociativeResultArray($link, $query) {
		$result = DbFunctions::executeQuery($link, $query);
		if ($result == null || mysqli_num_rows($result) == 0) {
			return null;
		}
		$rows = mysqli_num_rows($result);
		for($i = 0; $i < $rows; $i++) {
			$resultArray [$i] = mysqli_fetch_assoc($result);
		}
		mysqli_free_result($result);
		return ($resultArray);
	}

	public static function getHashFromFirstRow($link, $query) {
		$resultArray = DbFunctions::getAssociativeResultArray($link, $query);
		if (is_null($resultArray)) {
			return null;
		}
		return ($resultArray [0]);
	}
	
	public static function getHash1($link, $query)
	{
	    $result=self::executeQuery($link, $query);
	    $countRows=mysqli_num_rows($result);
	    if ($countRows==0)
	    {
	        return null;
	    }
	    $fieldList=array();
	    for ($i=0; $i<$countRows; $i++)
	    {
	        $row=mysqli_fetch_row($result);
	        $fieldList[$row[0]]=$row[1];
	    }
	    mysqli_free_result($result);
	    return $fieldList;
	}
	
	
	
	public static function getHash($link, $query){
	
	    $result=self::executeQuery($link, $query);
	    $countRows=mysqli_num_rows($result);
	    if ($countRows==0)
	    {
	        return null;
	    }
	    $fieldList=array();
	    for ($i=0; $i<$countRows; $i++)
	    {
	        $row=mysqli_fetch_row($result);
	        $fieldList[$row[0]]=$row[1];
	    }
	    mysqli_free_result($result);
	    return $fieldList;
	}
	
	
	public static function executeQuery($link, $query) {
		$result = mysqli_query($link, $query);
		if ($result === false) {
			return null;
		}
		return $result;
	}
	
	
	public static function getErrorNumber($link)
	{
	    return (mysqli_errno($link));
	}
	
	public static function getErrorText($link)
	{
	    return (mysqli_error($link));
	}
	/*
	 * Wenn magic_qotes_gpc konfiguriert ist, werden Anf??hrungszeichen mit Backslashes gesch??tzt Allerdings ist die mysqli_real_escape_string noch sicherer, daher werden die Backslashes in diesem Fall wieder entfernt, damit immer die o.g. Funktion aufgerufen werden kann.
	 */
	public static function escape($link, $str) {
		if (ini_get('magic_quotes_gpc')) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($link, $str);
	}
	
	public static function getFirstFieldOfResult($link, $query)
	{
	    $result=self::executeQuery($link, $query);
	    if (mysqli_num_rows($result)==0)
	    {
	        return null;
	    }
	    $row=mysqli_fetch_row($result);
	    mysqli_free_result($result);
	    return ($row[0]);
	}
	
	
	
}
?>