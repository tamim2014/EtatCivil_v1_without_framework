<!DOCTYPE html>
<html>
<head>
<script src="js/jquery.js"></script>
<script src="js/acteOutSlide.js"></script>
<script>



</script>

<script>
/*
function montrer(id) {

for (var i = 1; i<=8; i++) {
   var prefecture= document.getElementById('p'+i) ;
   if (document.getElementById('p'+i)) {
      document.getElementById('p'+i).innerHTML= prefecture;
    }
}

}
*/
</script>
</head>
<body>
<div id="yivawo"> </div>
<!--
i fo recuperer le nom des prefectures( dans les liste des 3 sous-menu ) pour l'utiliser dans la requete sql : SELECT * FROM  liste WHERE prefecture= nom_recuperé_dans_le_sous_menu
ce blem se formule ainsi:

Comment récupérer le contenu HTML ou texte d’un élément HTML à l’aide de jquery.
-Récupérer TOUT le contenu  d'1 div par : var contenu = $(‘#idDeLaDiv’).html();
-Récupérer seulement  le contenu texte d'1 div par : var contenu = $(‘#idDeLaDiv’).text();

Autre Rappels
-Pour récupérer la valeur de l’INPUT: var ma-variable = $("#mon-champ").val();
-Pour attribuer une valeur, il suffit de la fournir à la fonction val : $("#mon-champ").val("ma nouvelle valeur");

-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

		<ul  >
			<li id="p1" >    <a onclick="showBaseByPrefecture(this.value)" href="#" class="island1" style="padding-left:25px; padding-right:25px;"  > Moroni-Bambao    </a>   </li>
		    <li id="p2">    <a href="#" class="island1" style="padding-left:50px; padding-right:50px;"   > Hambou           </a>   </li>
			<li id="p3">    <a href="#" class="island1" style="padding-left:28px; padding-right:27px;" > Mbadjini-Ouest   </a>   </li>
			<li id="p4">    <a href="#" class="island1" style="padding-left:35px; padding-right:35px;" > Mbadjini-Est     </a>   </li>
			<li id="p5">    <a href="#" class="island1" style="padding-left:31px; padding-right:31px;" > Oichili-Dimani   </a>   </li>
			<li id="p6">    <a href="#" class="island1" > Hamahamet-Mboinkou   </a>   </li>
			<li id="p7">    <a href="#" class="island1" style="padding-left:9px; padding-right:9px;" > Mitsamiouli-Mboude   </a>   </li>
			<li id="p8">    <a href="#" class="island1" style="padding-left:9px; padding-right:9px;"  > Itsandra-Hamanvou    </a>  </li>
	     </ul> 




</form>



</body>
</html>

<?php if(!isset($_GET["p"]))$_GET["p"]="";
$p = $_GET['p'];

echo $p;
//1. connexion

	try{$bdd = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', '');}
	catch(Exception $e){die('Erreur de connexion à la base de données: '.$e->getMessage());}

//2. Recuperaion (des donnée de la table liste) dans une variable PHP 
     $reponse = $bdd->query("SELECT * FROM  liste WHERE prefecture='".$p."'" ); //$reponse=mysql_query("SELECT * FROM  liste") or exit(mysql_error( ));
  
//3.Affichage  ( dans une table - interface utilisateur) 
     echo '<div class="mnayvawo"   >  <input type="button"  value=" Actes extraits de la prefecture de : Hambou" class="boutoyahemnayivawo"   > </div>';
	 $table='<table class="color_line_middle" >';// la classe color_line AFFICHE LA BELLE TABLE à droite
	 $table.= '<tr> <th></th> <th>Nom</th> <th>Prenom</th><th>Acte numero</th><th></th><th>Print</th><th></th></tr>';
	 while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une -while($donnee=mysql_fetch_array($reponse))
	 {	  
       $table.='<tr><td>'.$donnees["ID"].'</td><td>'.$donnees["nom"].'</td><td>'.$donnees["prenom"].'</td><td>'.$donnees["acte"].'</td>  <td> <a href=" modifier_.php? n='.$donnees["ID"].'  &  nom_='.$donnees["nom"].'   &  prenom_='.$donnees["prenom"].'   &   acte_='.$donnees["acte"].' ">Modifier</a> </td>    <td> <a href="afficher.php?n='.$donnees["ID"].' ">Imprimer</a> </td>     <td> <a href="afficher.php?n='.$donnees["ID"].'">Afficher</a> </td></tr>';
	 } 
     $table.='</table> ';
	 echo $table;  // Valide mais je mais les sous liste d'abord(en javascript) pour voir
     

     $reponse->closeCursor(); // mysql_close();  
?>