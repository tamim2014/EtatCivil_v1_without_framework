<?php

 
 $id = $_GET["n"];
 //1.Connexion
include("connection_mysqli.php");
//2.Suppression
$r=mysqli_query($conn , "DELETE FROM liste WHERE  ID=' "  .$id. " ' " ); 
//3.Réinitialiser  l'auto-incrément(si la table est vidée): 
mysqli_query($conn , "ALTER TABLE liste AUTO_INCREMENT=0 ");

//mysql_free_result($r);
mysqli_close($conn);

//4. Redirection 
header('Location: ../accueil.php');
exit();

?>