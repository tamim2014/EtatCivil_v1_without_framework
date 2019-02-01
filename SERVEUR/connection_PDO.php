<?php

	try{
		 $conn = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}// Le array active les exception PDO: pour obtenir + de détail sur d'eventuels erreurs
	
	catch(Exception $e){
		die('Erreur de connexion à la base de données: '.$e->getMessage());
	}
	/*  OU SIMPLEMENT
	try{$bdd = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', '');}
	catch(Exception $e){die('Erreur de connexion à la base de données: '.$e->getMessage());}
	*/
?>