<?php session_start();  //echo "Acte<br>".$_SESSION["showInPop"]; ?>
 
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"> <!-- local storage -recup Acte n° pour transmission à la pop -->
 <title> Acces en Ecriture a la base etatcivil</title>

 <link href="css/accueil.css" rel="stylesheet" title="Style" />
 <link href="css/lectureBD.css" rel="stylesheet" title="Style" /> <!-- pour les bouton du panneau central -->
 <link href="css/ecritureBD.css" rel="stylesheet" title="Style" />

 <script src="js/jquery.js"></script>
 <script src="js/ecritureBD.js"></script>
 
</head>

<body>

<!-- ARRIERE PLAN :  -->

<?php include("inc/ecriture/ecritureBD_background.php"); ?> 
<div id="acteN"></div>

 <div class="centrer" >
  
<form action ="" method="post" name="form1" >
    <!-- LE PANNEAU DE GAUCHE :  -->
         <?php include("inc/ecriture/ecritureBD_panodegauche.php"); ?>
    <!-- LE PANNEAU DE CENTRAL : -->
 
   <table  class="tablecentre" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> Enregistrement  </h3></caption>     
     <tr><td>
	     <?php include("inc/ecriture/ecritureBD_menucentre.php"); ?>
	 </td></tr>
   </table>
  

     <!-- LE PANNEAU DE DROITE :  -->

 <table class="tabledroite" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> acte de naissance  </h3></caption>
  <p class="showacte"> <!-- Pour afficher l'acte modifiÃ© dans la partie droite de la page modifie_.php  -->
	<tr> 
		 <td> <input type="text" name="naissance_jour_moi"  placeholder=" Le" > </td>
		 <td> <input type="text" name="naissance_an"  placeholder=" ici l'an"> </td>
	</tr>
	<tr> 
	     <td> <input type="text" name="naissance_heure"  placeholder=" heure"> </td>
		 <td> <input type="text" name="naissance_minuite"  placeholder=" minuite" > </td>
	</tr>
	
	 <tr> <td> <input type="text" name="naissance_nom_prenom" placeholder="est n&eacute;(e)" ></td></tr>
	 <tr> <td> <input type="text" name="naissance_lieu"  placeholder=" &agrave;(lieu)" > </td></tr>
	 <tr> <td> <input type="text" name="naissance_sexe"   placeholder=" du sexe" > </td></tr>
	 
	 <tr><td> <font color="##1D702D"><b>Le p&egrave;re</b></font></td> </tr>
	 <tr> <td> <input type="text" name="pere_nom_prenom"  placeholder=" fils(fille) de" > </td></tr>
	 <tr> <td> <input type="text" name="pere_datenaisance"  placeholder=" n&eacute; le"> </td></tr>
	 <tr> <td> <input type="text" name="pere_lieunaissance"   placeholder=" n&eacute; &agrave;" > </td></tr>
	 <tr> <td> <input type="text" name="pere_profession"    placeholder=" profession "   > </td></tr>
	 <tr> <td> <input type="text" name="pere_villederesidence"   placeholder=" demeurant &agrave;"  > </td></tr>
	
	 <tr><td> <font color="##1D702D"><b>La m&egrave;re</b></font></td> </tr>
	 <tr> <td> <input type="text" name="mere_nom_prenom"  placeholder=" et de" > </td></tr>
	 <tr> <td> <input type="text" name="mere_datenaisance"  placeholder="n&eacute;e le"  > </td></tr>
	 <tr> <td> <input type="text" name="mere_lieunaissance"      placeholder=" &agrave;"> </td></tr>
	 <tr> <td> <input type="text" name="mere_profession"       placeholder=" profession" ></td></tr>
	 <tr> <td> <input type="text" name="mere_villederesidenc"   placeholder=" demeurant &agrave;"> </td></tr>
	 
	 <tr><td> <font color="##1D702D"><b>La d&eacute;claration</b></font></td> </tr>
	 <tr> 
	     <td> <input type="text" name="declaration_faite_par" placeholder=" faite par:"> </td>
		 <td>  <input type="text" name="emetteurjugement" placeholder=" emetteur jugement:" maxlength="100"> </td>
	 </tr>
	 <tr> 
	     <td> <input type="text" name="declaration_recue_pa" placeholder=" re&ccedil;ue par"> </td>
		 <td> <input type="text" name="recepteurjugement"    placeholder=" titre du recepteur"  > </td>
	 </tr>
	 <tr> <td> <input type="text" name="datejugement" placeholder=" date jugement :"> </td></tr>
	 <!-- je déplace ces élément à cause de firefox qui fait déborder la panneau droit(dépassement de 20 cm vers le bas)
	 <tr> <td> <input type="text" name="declaration_recue_pa" placeholder=" re&ccedil;ue par"> </td></tr>
	 <tr> <td> <input type="text" name="recepteurjugement"    placeholder=" titre du recepteur"  > </td></tr> 
     -->
	 </p>
	 
     <tr> 
	 <td>
		 <!-- recuperer  une veriable javascripte +actesaisi+  en php -->
		  <?php if(!isset($_POST["acte"])) $_POST["acte"]=""; $valeurphp= $_POST["acte"]; ?> <!-- +sieurs 10zaines de jour de galere!!! alors que la solution été si simple! Trouvé vend 25.09.16 à 16h50 à cité des sicience. shukran li l'ALLAH.   -->
		 
		 <a id="acteAJAX" href="afficher2.php?n=<?php echo $valeurphp; ?>"   onclick="    window.open(this.href, 'Popup', 'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 '); return false; " >
		      <!--
			     Pourquoi return false(ou 1 event.preventDefault() ;)? 
				 L'événement onclick se déclenche au clic de la souris et effectue l'action entre les guillemets mais,
				 l'événement continue sa route : on dit qu'il se propage. Il va donc poursuivre son action et 
				 déclencher le lien hypertexte indiqué par href. 
				 Pour éviter cela, il suffit d'arrêter la propagation en retournant false.
				 SINON
				 La nouvelle fenêtre s'ouvre bien mais l'ancienne est aussi dirigée vers la nouvelle page de la pop
			  -->
			  <input type="button"  value="Afficher l'acte" align="center"  style="background-color: #cdbe9f;"   />  
	    </a>
	 </td>
	 <td><a href="afficher.php?n=<?php echo $donnees["ID"];?> "><input type="button"  value="Imprimer l'acte" align="center"  style="background-color: #cdbe9f;"/></a></td>
	 </tr>
  </table>
</form>
</div> 

</body>
</html>


<?php
  //header('Location: ecritureBD.php');//Warning: Cannot modify header information - headers already sent by
 include("SERVEUR/verif_num_acte.php"); 
?>




  

