 <?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
     <title> Resultat de ta recherche: acte de naissance trouv&eacute;</title>
	 <link href="css/accueil.css" rel="stylesheet"  />
	 <link href="css/lectureBD.css" rel="stylesheet"  />
	 <link href="css/lectureBD2.css" rel="stylesheet"  />
	 
	 <script src="js/jquery.js"></script>
	 <script src="js/lectureBD.js"></script>
	 
	  <!--  <script src="js/ecritureBD.js"></script> -->
	  
</head>

<body  >
<!-- ARRIERE PLAN :  -->
<?php include("inc/lecture/lectureBD2_background.php"); ?>

<div class="centrer"  >
 <!-- LE PANNEAU DE GAUCHE :  -->
      <table class="tablegauche" > <caption  style="caption-side:top;"> <font color="#FFFFFF"><h3> UNION DES COMORES  </h3><h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6><h4> MINISTERE DE L'INTERIEUR  </h4></font><img src="img/armoirie.png"  /></caption>
	     <tr><td>

			<div class="kangaLaBoutonAccueil" align="center" style="padding-top : 60px; " > 

			<a href="accueil.php">      <input type="button"  value=" Accueil" align="center"  style="background-color: #cdbe9f; height:30px;"/> </a>
		    </div>
			<p> &nbsp;</p>
			<div class="kangaLaBoutonAccueil" style="padding-top : 60px;" >
			<a href="#"   onclick="popup_lectureBD2();  "   ><input type="button"  value=" Zoom" align="center"  style="background-color: #e5eecc;  height:30px;  "/> </a>
            </div>
		 </td></tr>
      </table>
	 
	 
<!-- LE PANNEAU DE DROITE :  -->
      <table  class="tabledroiteresultat" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> Resultat : acte de naissance trouv&eacute; </h3></caption>
        <tr ><td  > <div id="yivawo" >
          <div class="kangaLaBoutonPopup"  >
			<a href="#"   onclick="popup_lectureBD2();  "   ><input type="button"  value="Afficher plein écran" align="center"  style="background-color: #e5eecc;  height:30px;  "/> </a>
          </div>
		</div> </td></tr>
     </table>
</div>

</body>
</html>


<?php 
//Resulat de la recherche: Une table en une seule ligne et 7 colonnes(en haut à droite)
if(isset($_GET['num'])){include("SERVEUR/lectureBD2_searchPlayBack.php");}
else if(isset($_GET['nom']) ) {include("SERVEUR/lectureBD2_searchPlayBackByName.php");}
//"La connaissance s'acquiert par l'expérience, tout le reste n'est que de l'information" .Albert Einstein.

/****************** Rappel sur les sessions *********************************
      //$_SESSION['identifiant']="";// Pour vider la variable	 
	  // unset($_SESSION['identifiant']); //detruit la variable session 
	 //$_SESSION = array();// Détruit toutes les variables de session
	 //session_destroy();// Finalement, on détruit la session.
****************************************************************************/
?>






     