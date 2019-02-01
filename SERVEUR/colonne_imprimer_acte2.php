

<?php 
/****************************************************************************************************
 - Page: lectureBD.php
 - Div: #yvawo (dans le panneau de droite)
 - Task: Affiche l'attribut "Imprimer" au 5ème colonne de la table (au clic du bouton "Imprimer")
**************************************************************************************************/
 session_start(); // Recup de la prfecture dans  $_SESSION["pref"] pour le menu de la page lectureBD.php
//1.Connexion
include("connection_mysql.php");
//2.Récupération des données de la base(par construction d'une variables php de stockage tampon)
$R=mysql_query("SELECT * FROM  liste WHERE prefecture='".$_SESSION['pref']."' ") or exit(mysql_error( ));
//3.Affichage

$table='<table>'; 
$table.='<tr><th>Nom </th><th> Prenom </th><th> Numero </th><th> Prefecture </th><th>  </th></tr>';
while($ligne2=mysql_fetch_array($R)){// en utlisant FOREACH ça marche pas .j'sais pas pourquoi
     $table.='<tr><td>'.$ligne2["nom"].'</td><td>'.$ligne2["prenom"].'</td><td>'.$ligne2["acte"].'</td><td>'.$ligne2["prefecture"].'</td> <td> <a href="afficher.php?n='.$ligne2["ID"].'"  onclick=" window.open(this.href, \'Popup\', \'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 \'); return false; "  >Imprimer</a> </td></tr>';
	 //$table.='<tr><td>'.$ligne2["nom"].'</td><td>'.$ligne2["prenom"].'</td><td>'.$ligne2["acte"].'</td><td>'.$ligne2["prefecture"].'</td> <td> <a href="afficher.php?n='.$ligne2["ID"].'" onclick="imprimer(this.value)">Imprimer</a> </td></tr>';
}
$table.='</table>';
echo $table;

mysql_close();
?>