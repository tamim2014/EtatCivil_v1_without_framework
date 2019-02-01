<?php

	/******************
	*
	*author: Andjib
	*date: 16/05/2018
	*
	******************/
	
    include("connection_mysqli.php");
	
    $message='';
    if(isset($_POST['acte'])) $acte=$_POST['acte'];
	if(empty($acte)&& isset($_POST["Enregistrer"]) ) {$message = 'Veuillez remplir <br>le champ  Acte N°  !  ';}
	if(empty($prefecture)&& isset($_POST["Enregistrer"]) ) {$message = 'Veuillez remplir <br>le champ  Prefecture  !';}
	if(empty($centretatcivil)&& isset($_POST["Enregistrer"]) ) {$message = 'Veuillez remplir <br> le champ  Centre  !';}
	if(empty($nom)&& isset($_POST["Enregistrer"]) ) {$message = 'Veuillez remplir <br> le champ  Nom  !';}
	if(empty($prenom)&& isset($_POST["Enregistrer"]) ) {$message = 'Veuillez remplir <br> le champ  Prenom  !';}

    if (!empty($acte)){
	  $sql="SELECT COUNT(*)  FROM liste WHERE acte = '" . mysqli_real_escape_string($conn , $_POST['acte']) . "'";
	  $req=mysqli_query($conn,$sql) or die('Erreur SQl !<br>'.$sql.'<br>'.mysql_error($conn));
	  $result = mysqli_fetch_row($req);

	   if ($result[0] != 0){ $message='Ce numero  est  <br> déjà attribué!  <br>'; }
	   else {include("SERVEUR/ecritureBD_insertionSQL.php");}
	   
	}
	

	echo '<div class="rappel">'.$message.'</div>' ;

?>
