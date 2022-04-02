<head>
<title>Kopierladen</title>


<link rel="stylesheet" type="text/css" href="../../css/Forms.css">

<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script> 


</head>



    <!-----NavigationBar----->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../img/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="auftrag.php">Aufträge hinzufügen</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="mitarbeiter.php">Mitarbeiter hinzufügen</a>
            </li>
          
            
            
            <li class="nav-item">
              <a class="nav-link " href="../../index.php">Abmelden</a>
            </li>
          </ul>
          
        </div>
      </nav>
</section>

<body>
	<h1>Copyshop-Aufgabe</h1>
	
	{if (isset($PHP_SELF))}
	
	

	
		<form name="formular" action="{$PHP_SELF}" method="post">
			<input type="hidden" name="csrfToken" value="{$csrfToken}" />
			
			
			<label>Auftrag</label>
			<input type="text" name="auftrag" required>
			
			
			<label>Text</label>
			<input type="text" name="text" required>
			
			<label>Abkurzzung</label>
			<input type="text" name="abkuerzung" required>
			
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<label>&nbsp;</label>
			<input type="submit" name="Button1" value="Abschicken">
		</form>
	{else}
		{if (isset($fehler))}
			Unzulässige Eingabe.
		{else} 
			{$ausgabeText}
			
		{/if} 		 					
	{/if}
</body>
</html>

