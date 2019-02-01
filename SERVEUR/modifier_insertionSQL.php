<?php 
$reponse->closeCursor(); // D'oÃ¹ vient ce truc? voir ligne16

if (isset($id)){
  if(isset($_POST['nom'])){
// new data
$nom=$_POST["nom"];
$prefecture=$_POST["prefecture"];
$centretatcivil=$_POST['centretatcivil'];
$registre=$_POST["registre"];
$acte=$_POST['acte'];
$date_acte=$_POST['date_acte'];



$prenom=$_POST["prenom"];
$delivre_a=$_POST['delivre_a'];
$delivre_le=$_POST['delivre_le'];
$delivre_an=$_POST['delivre_an'];
$num_serie=$_POST['num_serie'];

$naissance_jour_moi=$_POST['naissance_jour_moi'];
$naissance_an=$_POST['naissance_an'];
$naissance_heure=$_POST['naissance_heure'];
$naissance_minuite=$_POST['naissance_minuite'];
$naissance_nom_prenom=$_POST['naissance_nom_prenom'];
$naissance_lieu=$_POST['naissance_lieu'];
$naissance_sexe=$_POST['naissance_sexe'];

$pere_nom_prenom=$_POST['pere_nom_prenom'];
$pere_datenaisance=$_POST['pere_datenaisance'];
$pere_lieunaissance=$_POST['pere_lieunaissance'];
$pere_profession=$_POST['pere_profession'];
$pere_villederesidence=$_POST['pere_villederesidence'];

$mere_nom_prenom=$_POST['mere_nom_prenom'];
$mere_datenaisance=$_POST['mere_datenaisance'];
$mere_lieunaissance=$_POST['mere_lieunaissance'];
$mere_profession=$_POST['mere_profession'];
$mere_villederesidenc=$_POST['mere_villederesidenc'];

$declaration_faite_par=$_POST['declaration_faite_par'];
$datejugement=$_POST['datejugement'];
$emetteurjugement=$_POST['emetteurjugement'];


$declaration_recue_pa=$_POST['declaration_recue_pa'];
$recepteurjugement=$_POST['recepteurjugement'];




// query  acte=?, acte=?, acte=?, acte=?, acte=?
 
$sql = "UPDATE liste 
        SET nom=?,   prefecture=? , centretatcivil=?, registre=? , acte=? ,date_acte=? , prenom=?,delivre_a=?,delivre_le=?,delivre_an=?,num_serie=? ,naissance_jour_moi=?, naissance_an=?, naissance_heure=?, naissance_minuite=?, naissance_nom_prenom=?, naissance_lieu=?, naissance_sexe=?, pere_nom_prenom=?, pere_datenaisance=?, pere_lieunaissance=?, pere_profession=?, pere_villederesidence=?,  mere_nom_prenom=?, mere_datenaisance=?, mere_lieunaissance=?, mere_profession=?, mere_villederesidenc=?, declaration_faite_par=?, datejugement=?,emetteurjugement=?, declaration_recue_pa=?,recepteurjugement=?
        WHERE ID=?";
$q = $conn->prepare($sql);
$accent=$q->execute(array($nom,$prefecture,$centretatcivil,$registre,$acte,$date_acte, $prenom,$delivre_a,$delivre_le,$delivre_an,$num_serie,$naissance_jour_moi,$naissance_an,$naissance_heure,$naissance_minuite,$naissance_nom_prenom,$naissance_lieu,$naissance_sexe,  $pere_nom_prenom,$pere_datenaisance,$pere_lieunaissance,$pere_profession,$pere_villederesidence,$mere_nom_prenom,$mere_datenaisance,$mere_lieunaissance,$mere_profession,$mere_villederesidenc,$declaration_faite_par,$datejugement,$emetteurjugement,$declaration_recue_pa,$recepteurjugement,$id));
 htmlentities($accent, ENT_QUOTES, "ISO-8859-1");
  }
} 

//3.Réinitialisation  de l'auto-incrément(si la table est vidée): 
$conn->exec("ALTER TABLE liste AUTO_INCREMENT=0 ");//mysql_query("ALTER TABLE liste AUTO_INCREMENT=0 ");
exit();
 
?>
