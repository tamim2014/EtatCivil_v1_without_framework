<!--  Pas de DOCTYPE dans les fichiers include-->
<!--  Pas de <html> dans les fichiers include-->
<!-- NOUS SOMMES CÔTE CLIENT -->


    <meta charset="utf-8">   
     <title> </title>
	 
	 <script src="js/jquery.js"></script>
	 <script src="js/capture_items.js"></script>    <!--    <script src="js/acteOutSlide.js"></script> -->
	 <script src="js/accueil_liens_colonne5.js"></script>
	 <script src="js/accueil_commandes_panel.js"></script>
     
	  <link href="css/slide.css" rel="stylesheet" title="Style_du_Slide_padeDaccueil" />
	  <link href="css/prefecture.css" rel="stylesheet" title="boutons_Sous_Le_Slide" />
	  <link href="css/commandes_panel.css" rel="stylesheet"  /> 




	
		<table  >
			 <tr><td class="listemenu" id="flip" > 
				Acte de naissance  <?php include("inc/accueil/accueil_choisir_naissance.php"); ?>   <div id="panel"></div>  
				Acte de mariage&nbsp;&nbsp;&nbsp;  <?php include("inc/accueil/accueil_choisir_mariage.php"); ?>
				Acte de divorce&nbsp;&nbsp;&nbsp;&nbsp; <?php include("inc/accueil/accueil_choisir_divorce.php"); ?>
				Acte de dec&egrave;s&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php include("inc/accueil/accueil_choisir_deces.php"); ?>
			 </td></tr>  
		</table>
		<!-- le p'tit menu sous le panel [qui controle la 5ème colonne du slide]-->
		<div id="commandePanel" >
			<!-- Solution jQuery -->
			<a id="zima"    href="SERVEUR/colonne_supprimer_acte.php"> <input type="button"  value="Supprimer"  class="boutonSupprimer" /></a> 
			<a id="rectif"  href="SERVEUR/colonne_rectifier_acte.php"> <input type="button"  value="Rectifier"  class="boutonRectifier" /></a>
			<a id="print_"  href="SERVEUR/colonne_imprimer_acte.php" >  <input type="button"  value="Imprimer"    class="boutonImprimer" /></a> 
			<a id="trier"   href="SERVEUR/trier.php" >  <input type="button"  value="Ordre alphabetique"    class="boutonTrier" /></a> 

			<!-- Solution AJAX 
			<a id="zima"    href="#"  onclick="showSupprimer()> <input type="button"  value="Supprimer"  class="boutonSupprimer" /></a> 
			<a id="rectif"  href="#"  onclick="showRectifier()> <input type="button"  value="Rectifier"  class="boutonRectifier" /></a>
			<a id="print_"  href="#" onclick="showImprimer()">  <input type="button"  value="Imprimer"    class="boutonImprimer" /></a> 
			-->
		</div>









