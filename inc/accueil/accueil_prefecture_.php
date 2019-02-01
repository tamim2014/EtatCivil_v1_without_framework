

<!DOCTYPE html>
<html><! -- NOUS SOMMES CÔTE CLIENT -->
<head>
  <!--   <meta charset="utf-8">  sinon tu peux pas d'accent sur la prefecture Mitsamihouli-mboudé -->
     <title> </title>
	 
	 <script src="js/jquery.js"></script>
	 <script src="js/acteOutSlide.js"></script>
	 <script src="js/accueil_combo_slide.js"></script>
     
	  <link href="css/slide.css" rel="stylesheet" title="Style_du_Slide_padeDaccueil" />
	  <link href="css/prefecture.css" rel="stylesheet" title="boutons_Sous_Le_Slide" />
	  <style> 
 
                a#zima:hover { color: #000000;  position:relative; left:1px;  }
				a#rectif:hover {  color: #000000; position:relative; left:1px; }
                a#print_:hover {  color : #000000; position:relative; left:1px; }
				
				input.boutonSupprimer  {
	                                     background-color: #e5eecc;  color:Peru ;                                   
	                                     position:relative;  top:-5px; width:100%;
										 -webkit-border-radius: 8px 8px 0px 0px; 
                }
				input.boutonRectifier  {
					                     background-color: #e5eecc; color:Peru; 
										 position:relative;  top:-15px; width:100%; 
										 -webkit-border-radius:0px;
                }
				input.boutonImprimer  {
					                     background-color: #e5eecc; color:Peru ;
										 position:relative;  ; top:-25px;  width:100%;    
										 -webkit-border-radius: 0px 0px 8px 8px;                       
                }
     </style>
	 
</head>

<body>

<form action ="" method="POST" name="form1" >
<table  >
 <tr><td class="listemenu" id="flip" >
     
	 
    Acte de naissance  <?php include("inc/accueil/accueil_choisir_naissance.php"); ?>   <div id="panel"></div>

  
    Acte de mariage&nbsp;&nbsp;&nbsp; <select name="bavouMariage">
         <option  >Pr&eacute;fecture de:  </option> 
         <optgroup label="Ngazidja"> 
       
         <option>Moroni-Bambao </option>
		 <option>Hambou </option> 
         <option >Mbadjini-Ouest </option>
		 <option>Mbadjini-Est </option>
         <option>Oichili-Dimani </option>  
		 <option>Hamahamet-Mboinkou </option>  
		 <option>Mitsamiouli-Mboudé </option> 
		 <option>Itsandra-Hamanvou </option>
		 </optgroup>
		 <optgroup label="Moheli">      
         <option>Fomboni </option>
		 <option>Nioumachoi </option> 
         <option>Djando </option>
		 </optgroup>
		 <optgroup label="Anjouan"  disabled>           
         <option>Mutsamudu </option>
		 <option>Ouani </option> 
         <option>Domoni </option>
		 <option>Mr&eacute;mani </option>
         <option>Sima </option>  
		 </optgroup>

 </select>  <br>

 Acte de divorce&nbsp;&nbsp;&nbsp;&nbsp; <select >
         <option  >Pr&eacute;fecture de:  </option> 
         <optgroup label="Ngazidja"> 
       
         <option>Moroni-Bambao </option>
		 <option>Hambou </option> 
         <option >Mbadjini-Ouest </option>
		 <option>Mbadjini-Est </option>
         <option>Oichili-Dimani </option>  
		 <option>Hamahamet-Mboinkou </option>  
		 <option>Mitsamiouli-Mboud&eacute; </option> 
		 <option>Itsandra-Hamanvou </option>
		 </optgroup>
		 <optgroup label="Moheli">      
         <option>Fomboni </option>
		 <option>Nioumachoi </option> 
         <option>Djando </option>
		 </optgroup>
		 <optgroup label="Anjouan"  disabled>           
         <option>Mutsamudu </option>
		 <option>Ouani </option> 
         <option>Domoni </option>
		 <option>Mr&eacute;mani </option>
         <option>Sima </option>  
		 </optgroup>

 </select> <br>

 Acte de dec&egrave;s&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <select>
         <option selected >Pr&eacute;fecture de:  </option> 
         <optgroup label="Ngazidja"> 
         
         <option>Moroni-Bambao </option>
		 <option >Hambou </option> 
         <option>Mbadjini-Ouest </option>
		 <option>Mbadjini-Est </option>
         <option>Oichili-Dimani </option>  
		 <option>Hamahamet-Mboinkou </option>  
		 <option>Mitsamiouli-Mboud&eacute; </option> 
		 <option>Itsandra-Hamanvou </option>
		 </optgroup>
		 <optgroup label="Moheli">      
         <option>Fomboni </option>
		 <option>Nioumachoi </option> 
         <option>Djando </option>
		 </optgroup>
		 <optgroup label="Anjouan"  disabled>           
         <option>Mutsamudu </option>
		 <option>Ouani </option> 
         <option>Domoni </option>
		 <option>Mr&eacute;mani </option>
         <option>Sima </option>  
		 </optgroup>
 </select> <br>
 </td></tr>  
 </table>

<!-- le p'tit menu sous le panel [qui controle la 5ème colonne du slide]-->
<div id="commandePanel">
<!-- Solution jQuery -->
<a id="zima"    href="SERVEUR/colonne_supprimer_acte.php"> <input type="button"  value="Supprimer"  class="boutonSupprimer" /></a> 
<a id="rectif"  href="SERVEUR/colonne_rectifier_acte.php"> <input type="button"  value="Rectifier"  class="boutonRectifier" /></a>
<a id="print_"  href="SERVEUR/colonne_imprimer_acte.php" >  <input type="button"  value="Imprimer"    class="boutonImprimer" /></a> 

<!-- Solution AJAX 
<a id="zima"    href="#"  onclick="showSupprimer()> <input type="button"  value="Supprimer"  class="boutonSupprimer" /></a> 
<a id="rectif"  href="#"  onclick="showRectifier()> <input type="button"  value="Rectifier"  class="boutonRectifier" /></a>
<a id="print_"  href="#" onclick="showImprimer()">  <input type="button"  value="Imprimer"    class="boutonImprimer" /></a> 
-->

</div>
 

</body>
</html>








