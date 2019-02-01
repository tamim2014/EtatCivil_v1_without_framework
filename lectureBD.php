
<?php session_start(); if(!isset($_SESSION["pref"])) $_SESSION["pref"]=""; $s=$_SESSION["pref"]; ?>


<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
     <title> Acces en Lecture a la base etatcivil: connexion,recupreation affichage</title>
 
	 <script src="js/jquery.js"></script>
	 <script src="js/capture_items.js"></script>    <!--    <script src="js/acteOutSlide.js"></script> -->
	 <script src="js/lectureBD.js"></script>

	 <link href="css/accueil.css" rel="stylesheet" title="Style" />

	 <link href="css/lectureBD.css" rel="stylesheet" title="Style" />

 
</head>

<body>
<!-- ARRIERE PLAN :  -->
<?php include("inc/lecture/lectureBD_background.php"); ?>

<div class="centrer"  >

<!-- LE PANNEAU DE GAUCHE :  -->

<table class="tablegauche" > <caption  style="caption-side:top;  z-index:4;"> <font color="#FFFFFF"><h3> UNION DES COMORES  </h3><h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6><h4> MINISTERE DE L'INTERIEUR  </h4></font><img src="img/armoirie.png"   /></caption>
	 <tr><td>
	     <?php include("inc/lecture/menugauche.php"); ?>  
	 </td></tr>
</table>

<!-- LE PANNEAU DE DROITE :  -->

<table  class="tabledroiteresultat" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> Liste des actes de naissance </h3></caption>
     <tr><td >      
		 <div id="yivawo"  style="left:13px;   box-shadow: 1px 1px 0px 0px #cdbe9f; " ></div> 
	 </td></tr>
</table>

<?php include("inc/lecture/sousmenu.php"); ?>   

</div> <!-- fin  <div class="centrer"  >  -->

<div class="mnayvawo"  >  <button    class="boutoyahemnayivawo" style="font-size: 15px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;  "  > Actes extraits de la pr&eacute;fecture de:<span id="wilaya_" style="color:#000066;  font-size: 17px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;" > <?php  echo  $s; ?></span> </button>   </div>

<body>
</html>


     
