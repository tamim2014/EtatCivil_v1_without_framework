<?php
 
//Défintion des varibles: ATTENTION "  LE FAIRE TOUJOURS AVANT LA CONNEXION"

if(!isset($bavouMariage))$bavouMariage=$_POST["bavouMariage"];
//1.Connexion
$conn=mysql_connect('localhost','root', '') ;
mysql_select_db('etatcivil',$conn) or die('erreur de connexion à la base');
//2.Récupération des données de la base(par construction d'une variables php de stockage tampon)  
$R=mysql_query("SELECT * FROM  liste WHERE prefecture='".$bavouMariage."' ") or exit(mysql_error( ));
//3.Affichage 
$table='<table class="color_line">';
$table.='<tr><th>ID</th><th>Nom </th><th> Prenom </th><th> Numero </th><th> Prefecture </th></tr>';		
while($ligne=mysql_fetch_array($R)){// en utlisant FOREACH ça marche pas .j'sais pas pourquoi
 $table.='<tr><td>'.$ligne["ID"].'</td><td>'.$ligne["nom"].'</td><td>'.$ligne["prenom"].'</td><td>'.$ligne["acte"].'</td><td>'.$ligne["prefecture"].'</td></tr>';
}
$table.='</table>';

echo $table;


mysql_close();
 
?>