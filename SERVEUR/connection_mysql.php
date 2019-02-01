<?php
/******************
*
*author: Andjib
*date: 16/05/2018
*
******************/

$conn = mysqli_connect('localhost','root','','etatcivil')or die('Erreur de connection : '.mysqli_error());
$conn->set_charset("utf8");
/*
$conn=mysql_connect('localhost','root', '') ;
mysql_select_db('etatcivil',$conn) or die('erreur de connexion à la base');
*/
	/*  comparer avec l'interface PDO
	try{$bdd = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', '');}
	catch(Exception $e){die('Erreur de connexion à la base de données: '.$e->getMessage());}
	*/
?>