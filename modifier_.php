<?php
//1.Construction des variables php, pour recuperer les donnÃ©es transmises par la page "lectureBD.php"
$id = $_GET["n"];

$nom_=$_GET["nom_"];
$prenom_=$_GET["prenom_"];
$acte_=$_GET['acte_'];
$rappel = '<b><i> <u>Document &agrave; rectifier</u></i> </b>  <br> <i><b>Nom :</b></i> '.$nom_.' <br> <i><b>Pr&eacute;nom :</b></i> '.$prenom_.' <br> <i><b>Acte num&eacute;ro:</b></i> '.$acte_.'';

echo '<div class="rappel">'.$rappel.'</div>' ;


//2.Requête SQL requête

	try{$conn = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', '');    $conn->exec("SET NAMES 'ISO 8859-1' ");              }
	catch(Exception $e){die('Erreur de connexion Ã  la base de donnÃ©es: '.$e->getMessage());}
	
	$reponse = $conn->query('SELECT * FROM liste WHERE ID='.$id );
	$donnees = $reponse->fetch();

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
 <script src="js/ecritureBD.js"></script>
 <title> Acces en Ecriture a la base etatcivil</title>
 <link href="css/accueil.css" rel="stylesheet" title="Style" />
 <link href="css/lectureBD.css" rel="stylesheet" title="Style" /> <!-- pour les bouton du panneau central -->
  <link href="css/ecritureBD.css" rel="stylesheet" title="Style" /> <!-- pour les bouton du panneau central -->
  
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
//Essai Pour afficher l'acte modifié dans la partie droite de la page modifie_.php. OK mé ça sert à rien if o virere tout ça
$(function(){
    $(' a #acteAJAX').click(function(e){
        $('.showacte').load($(this).attr('href'));
        e.preventDefault();
    });
    //$('.tab a:first').trigger('click'); // Affiche la page1 par dÃ©faut
});
</script>
</head>

<body>
<!-- ARRIERE PLAN :  -->

<?php include("inc/ecriture/ecritureBD_background.php"); ?>

<div class="centrer"  >
<form action ="" method="post" name="form1" >
<!-- LE PANNEAU DE GAUCHE :  -->

  <table class="tablegauche" style="top:76.5px;" name="listes" > 
	 <caption  style="caption-side:top;"> 
		 <font color="#FFFFFF">
			 <h3> UNION DES COMORES  </h3>
			 <h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6>
			 <h4> MINISTERE DE L'INTERIEUR  </h4>
		 </font>
		 <img src="img/armoirie.png"  />
	  </caption>
     <input type="hidden" name="suprim" value=" <?php echo $id;?> " />
	 <tr><td> Pr&eacute;fecture:    </td> <td> 
	 
	 	 <select  name="prefecture" onChange="changement(this)"  >
         <optgroup label="Ngazidja"> 
		 <option value="<?php echo $donnees["prefecture"];?>"   >  <?php echo $donnees["prefecture"];?> </option>
         <option>Moroni-Bambao </option>
		 <option>Hambou </option> 
         <option>Mbadjini-Ouest </option>
		 <option>Mbadjini-Est </option>
         <option>Oichili-Dimani </option>  
		 <option>Hamahamet-Mboinkou </option>  
		 <option>Mitsamiouli-Mboude </option> 
		 <option>Itsandra-Hamanvou </option>
		 </optgroup>
		 <optgroup label="Moheli">      
         <option>Fomboni </option>
		 <option>Nioumachoi </option> 
         <option>Djando </option>
		 </optgroup>
		 <optgroup label="Anjouan"  >           
         <option>Mutsamudu </option>
		 <option>Ouani </option> 
         <option>Domoni </option>
		 <option>Mremani </option>
         <option>Sima </option> 
		 <optgroup label="Mayotte"  disabled>           
         <option>Dzaoudzi </option>
		 <option>Pamandzi </option> 
         <option>Mtsapere </option>
		 <option>Mtsamboro </option>
         <option>Mamoudzou </option>  
		 </optgroup>		 
		 </optgroup>
     </select>
	 
	 </td></tr><br><br>
	 <tr><td> </td><td><font color="##1D702D"> <b>Centre d'Etat Civil:</b></font></td> <td> </td></tr>
     <tr><td> Centre    </td> <td> 
	  	 <select  name="centretatcivil">
             <option value="<?php echo $donnees["centretatcivil"];?>"     >    <?php echo $donnees["centretatcivil"];?>   </option>
         </select>

	 
	 </td></tr>
     <tr><td> Registre  </td> <td> <input type="text" name="registre"               value="<?php echo $donnees["registre"];?>"      > </td></tr>
	 <tr><td> Acte   </td> <td> <input type="text" name="acte"                    value="<?php echo $donnees["acte"];?>" ></td></tr>
	 <tr><td> Du(date)  </td> <td> <input type="date" name="date_acte"              value="<?php echo $donnees["date_acte"];?>"  ></td></tr>
	 <tr><td> </td> <td> </td></tr><tr><td> </td> <td> </td></tr><tr><td> </td> <td> </td></tr>
	 
	 <tr><td> </td><td><font color="##1D702D"> <b>Naissance de:</b></font></td> <td> </td></tr>
	 <tr><td> Nom   </td> <td> <input type="text" name="nom" value="<?php echo $donnees["nom"];?>" > </td></tr>
	 <tr><td> Pr&eacute;nom  </td> <td> <input type="text" name="prenom" value="<?php echo $donnees["prenom"];?>" ></td></tr><br><br>
	 <tr><td> </td><td><font color="##1D702D"> <b>Pour acte certifi&eacute; conforme</b></font></td> <td> </td></tr>
	 <tr><td> D&eacute;livr&eacute; &agrave; </td> <td> <input type="text" name="delivre_a" value="<?php echo $donnees["delivre_a"];?>"></td></tr>
	 <tr><td> Le  </td> <td> <input type="text" name="delivre_le" value="<?php echo $donnees["delivre_le"];?>" ></td></tr>
	 <tr><td> L'an  </td> <td> <input type="text" name="delivre_an"  value="<?php echo $donnees["delivre_an"];?>" > </td></tr>
	 <tr><td> S&eacute;rie Num  </td> <td> <input type="text" name="num_serie" value="<?php echo $donnees["num_serie"];?>" ></td></tr>
 </table>
 
  <!-- LE PANNEAU DE CENTRAL : -->
 
  <table  class="tablecentre" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> Rectification  </h3></caption>
     <tr><td> 
	 
	      <?php include("inc/ecriture/ecritureBD_menucentre.php"); ?>
 
	 </td></tr>     
  </table>
 
<!-- LE PANNEAU DE DROITE :  -->
 <table  class="tabledroite" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> acte de naissance  </h3></caption>
 
     <p class="showacte"> <!-- Pour afficher l'acte modifiÃ© dans la partie droite de la page modifie_.php  -->
	 <tr> <td> <input type="text" name="naissance_jour_moi"  value="<?php echo $donnees["naissance_jour_moi"];?>" placeholder=" Le" > </td>
	 <td> <input type="text" name="naissance_an"  value="<?php echo $donnees["naissance_an"];?>" placeholder=" ici l'an"> </td></tr>
	 <tr> <td> <input type="text" name="naissance_heure"  value="<?php echo $donnees["naissance_heure"];?>" placeholder=" heure" > </td>
	 <td> <input type="text" name="naissance_minuite" value="<?php echo $donnees["naissance_minuite"];?>" placeholder=" minuite" > </td></tr>
	
	  <tr> <td> <input type="text" name="naissance_nom_prenom"  value="<?php echo $donnees["naissance_nom_prenom"];?>" placeholder="est n&eacute;(e)"  ></td></tr>
	 <tr> <td> <input type="text" name="naissance_lieu"  value="<?php echo $donnees["naissance_lieu"];?>" placeholder=" &agrave;(lieu)"  > </td></tr>
	 <tr> <td> <input type="text" name="naissance_sexe" value="<?php echo $donnees["naissance_sexe"];?>" placeholder=" du sexe"  > </td></tr>
	 
	 <tr> <td> <font color="##1D702D"><b>Le p&egrave;re</b></font></td> <td> </td></tr>
	 <tr> <td> <input type="text" name="pere_nom_prenom"  value="<?php echo $donnees["pere_nom_prenom"];?>" placeholder=" fils(fille) de"     > </td></tr>
	 <tr> <td> <input type="text" name="pere_datenaisance"  value="<?php echo $donnees["pere_datenaisance"];?>" placeholder=" n&eacute; le"  > </td></tr>
	 <tr> <td> <input type="text" name="pere_lieunaissance"     value="<?php echo $donnees["pere_lieunaissance"];?>" placeholder=" n&eacute; &agrave;"  >      </td></tr>
	 <tr> <td> <input type="text" name="pere_profession"      value="<?php echo $donnees["pere_profession"] ;?>" placeholder=" profession "   > </td></tr>
	 <tr> <td> <input type="text" name="pere_villederesidence"    value="<?php echo $donnees["pere_villederesidence"] ;?>" placeholder=" demeurant &agrave;"  > </td></tr>
	
	<tr><td> <font color="##1D702D"><b>La m&egrave;re</b></font></td> <td> </td></tr>
	 <tr> <td> <input type="text" name="mere_nom_prenom"            value="<?php echo $donnees["mere_nom_prenom"];?>"  placeholder=" et de"   > </td></tr>
	 <tr> <td> <input type="text" name="mere_datenaisance"  value="<?php echo $donnees["mere_datenaisance"];?>"  placeholder="n&eacute;e le"     > </td></tr>
	 <tr> <td> <input type="text" name="mere_lieunaissance"      value="<?php echo $donnees["mere_lieunaissance"];?>"   placeholder=" &agrave;"     > </td></tr>
	 <tr> <td> <input type="text" name="mere_profession"       value="<?php echo $donnees["mere_profession"] ;?>"    placeholder=" profession"     ></td></tr>
	 <tr> <td> <input type="text" name="mere_villederesidenc"   value="<?php echo $donnees["mere_villederesidenc"] ;?>" placeholder=" demeurant &agrave;"   > </td></tr>
	 
	 <tr><td> <font color="##1D702D"><b>La d&eacute;claration</b></font></td> <td> </td></tr>
	 <tr> <td> <input type="text" name="declaration_faite_par"   value="<?php echo $donnees["declaration_faite_par"];?>" placeholder=" faite par:"  > </td></tr>
	 <tr> <td> <input type="text" name="datejugement"   value="<?php echo $donnees["datejugement"];?>" placeholder=" date jugement :"  > </td></tr>
	 <tr> <td> <input type="text" name="emetteurjugement"   value="<?php echo $donnees["emetteurjugement"];?>" placeholder=" emetteur jugement:"   > </td></tr>
	 
	 
	 <tr> <td> <input type="text" name="declaration_recue_pa"  value="<?php echo $donnees["declaration_recue_pa"];?>" placeholder=" re&ccedil;ue par"  > </td></tr>
	 <tr> <td> <input type="text" name="recepteurjugement"   value="<?php echo $donnees["recepteurjugement"];?>" placeholder=" titre du recepteur"  > </td></tr>
	 
	 </p>
	 
     <tr> 
	 <td><a id="acteAJAX" href="afficher.php?n=<?php echo $donnees["ID"];?> "   onclick=" window.open(this.href, 'Popup', 'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 '); return false; "     ><input type="button"  value="Afficher l'acte" align="center"  style="background-color: #cdbe9f;"   /></a></td>
	 <td><a href="afficher.php?n=<?php echo $donnees["ID"];?> "><input type="button"  value="Imprimer l'acte" align="center"  style="background-color: #cdbe9f;"/></a></td>
	 </tr>
    
  </table>

</form>

</div>

       
 
</body>
</html>

<?php include("SERVEUR/modifier_insertionSQL.php"); ?>  