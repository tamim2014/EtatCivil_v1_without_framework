
<?php
/******************
*
*author: Andjib
*date: 16/05/2018
*
******************/
// NOUS SOMMES CÔTE SERVEUR
session_start();
//Défintion des varibles: ATTENTION "  LE FAIRE TOUJOURS AVANT LA CONNEXION"
if(!isset($_GET["p"]))$_GET["p"]=""; 
$p = $_GET['p']; // Réception de la prefecture transmis par la fonction AJAX showActeLinkSlide(str) . str est chaine de caractere qui désigne la préfecture choisie par l'utilistateur

//1.Connexion
include("connection_mysqli.php");
//2.Récupération des données de la base(par construction d'une variables php de stockage tampon)  
$R=mysqli_query($conn, "SELECT * FROM  liste WHERE prefecture='".$p."' ") or exit(mysql_error($conn ));
//3.Affichage
//3.1 On construit un tableau de présentation des données
$table='<table >'; 
$table.='<tr ><th>Nom </th><th> Prenom </th><th> Numero </th><th> Prefecture </th><th>  </th> <tr>';
while($ligne=mysqli_fetch_array($R)){// en utlisant FOREACH ça marche pas .j'sais pas pourquoi
 $table.='<tr><td>'.$ligne["nom"].'</td><td>'.$ligne["prenom"].'</td><td>'.$ligne["acte"].'</td><td>'.$ligne["prefecture"].'</td> <td  > <a href="afficher.php?n='.$ligne["ID"].'"     onclick=" window.open(this.href, \'Popup\', \'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 \'); return false; "   >Afficher</a> </td></tr>';
$_SESSION["v"]= $p; // stocke la prefecture pour la transmettre à la page rectifier naissance.php suite à un éventuel clic sur le bouton rectifier
 }
$table.='</table>';

//3.2 on libère l'espace mémoire alloué pour cette interrogation de la base(ainsi on gagne en RAPIDITE)
mysqli_free_result ($R); 
mysqli_close($conn);
//3.3 on affiche le résultat
echo $table;

?>


