<?php
 
//1.Récupération de la valeur du boutton cliqué     
$id = $_GET["n"];

//2.Requête SQL(ligne 15)  qui supprime cette valeur recuperée            
$conn = new PDO('mysql:host=localhost;dbname=stagiaires;charset=utf8', 'root', ''); // database connection          
$sql = "  DELETE FROM liste WHERE  ID=' "  .$id. " ' "; // query: mysql_query(  "DELETE FROM liste WHERE  ID=' "  .$id. " ' " ); 
$conn->exec($sql);

//3.Réinitialiser  d'auto-incrément(si la table est vidée): 
$conn->exec("ALTER TABLE liste AUTO_INCREMENT=0 ");//mysql_query("ALTER TABLE liste AUTO_INCREMENT=0 ");

//4. Redirection vers la page 'liste des stagiaires'
header('Location: lectureBD.php');
exit();
 
?>