

<!DOCTYPE html>
<html>
<head>
     <title> Acces en Lecture a la base etatcivil: connexion,recupreation affichage</title>
     <link href="css/accueil.css" rel="stylesheet" title="Style" />
	 <link href="css/lectureBD.css" rel="stylesheet" title="Style" />
	 
	 <script src="js/jquery.js"></script>
	 <script src="js/acteOutSlide.js"></script>
	 <script src="js/lectureBD.js"></script>

</head>

<body>

<!-- ARRIERE PLAN :  -->
<?php include("inc/background.php"); ?>





<div class="centrer"  >

<!-- LE PANNEAU DE GAUCHE :  -->

<table class="tablegauche" > <caption  style="caption-side:top;"> <font color="#FFFFFF"><h3> UNION DES COMORES  </h3><h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6><h4> MINISTERE DE L'INTERIEUR  </h4></font><img src="img/armoirie.png"  /></caption>
	 <tr><td>
         <?php include("inc/menugauche.php"); ?>
	 </td></tr>
</table>


<!-- LE PANNEAU DE DROITE :  -->
<table  class="tabledroiteresultat" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> Liste des actes de naissance </h3></caption>
     <tr><td > </td></tr>
</table>
<!-- LES SOUS-MENUS :  -->
<?php include("inc/sousmenu.php"); ?>


</div> <!-- fin  <div class="centrer"  >  -->

</body>

</html>



<?php
//1. connexion

	try{$bdd = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', '');}
	catch(Exception $e){die('Erreur de connexion à la base de données: '.$e->getMessage());}

//2. Recuperaion (des donnée de la table liste) dans une variable PHP 
     $reponse = $bdd->query('SELECT * FROM liste'); //$reponse=mysql_query("SELECT * FROM  liste") or exit(mysql_error( ));
  
//3.Affichage  ( dans une table - interface utilisateur) 

	 $table='<table class="color_line" >';// la classe color_line AFFICHE LA BELLE TABLE à droite
	 $table.= '<tr> <th></th> <th>Nom</th> <th>Prenom</th><th>Acte numero</th><th></th><th>Print</th><th></th></tr>';
	 while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une -while($donnee=mysql_fetch_array($reponse))
	 {	  
       $table.='<tr><td>'.$donnees["ID"].'</td><td>'.$donnees["nom"].'</td><td>'.$donnees["prenom"].'</td><td>'.$donnees["acte"].'</td>  <td> <a href=" modifier_.php? n='.$donnees["ID"].'  &  nom_='.$donnees["nom"].'   &  prenom_='.$donnees["prenom"].'   &   acte_='.$donnees["acte"].' ">Modifier</a> </td>    <td> <a href="afficher.php?n='.$donnees["ID"].' ">Imprimer</a> </td>     <td> <a href="afficher.php?n='.$donnees["ID"].'">Afficher</a> </td></tr>';
	 } 
     $table.='</table> ';
	 echo $table; 
     

     $reponse->closeCursor(); // mysql_close();  
?>





     
