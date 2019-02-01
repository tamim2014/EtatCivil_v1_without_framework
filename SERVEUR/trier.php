

<?php
 session_start();
include("connection_mysqli.php");
//2.Récupération des données de la base(par construction d'une variables php de stockage tampon)
$R=mysqli_query($conn , "SELECT * FROM  liste WHERE prefecture='".$_SESSION["v"]."'  ORDER BY nom     ") or exit(mysql_error($conn ));
/*
ET pour ceux qui ont le même nom de famille, les trier par ordre décroissant d’âge par exemple.
Ou selon la date d'enregistrement de l'acte

SELECT *
FROM utilisateur
ORDER BY nom, date_acte DESC
*/
//3.Affichage
$table='<table>'; 
$table.='<tr><th>Nom </th><th> Prenom </th><th> Numero </th><th> Prefecture </th><th>  </th></tr>';
while($ligne=mysqli_fetch_array($R)){// en utlisant FOREACH ça marche pas .j'sais pas pourquoi
 $table.='<tr><td>'.$ligne["nom"].'</td><td>'.$ligne["prenom"].'</td><td>'.$ligne["acte"].'</td><td>'.$ligne["prefecture"].'</td> <td  > <a href="afficher.php?n='.$ligne["ID"].'"     onclick=" window.open(this.href, \'Popup\', \'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 \'); return false; "   >Afficher</a> </td></tr>';
 }
$table.='</table>';

//3.2 on libère l'espace mémoire alloué pour cette interrogation de la base(ainsi on gagne en RAPIDITE)
mysqli_free_result ($R); 
mysqli_close($conn);
//3.3 on affiche le résultat
echo $table;

?>

