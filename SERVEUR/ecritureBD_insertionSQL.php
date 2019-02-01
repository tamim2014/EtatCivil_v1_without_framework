<?php
error_reporting(E_ALL);
//1.les données saisie au formulaire sont directement stockées dans la table $_POST: donc on les recupere

if(!empty($_POST["nom"])){$nom=$_POST["nom"];}else{die('');}
$prefecture=$_POST['prefecture'];
$centretatcivil=$_POST['centretatcivil'];
$registre=$_POST['registre'];
$acte=$_POST['acte'];
//$_SESSION["showInPop"]=$acte;// Pour le bouton "Afficher l'acte"
$date_acte=$_POST['date_acte'];

$prenom=$_POST['prenom'];
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
$declaration_recue_pa=$_POST['declaration_recue_pa'];


// 2.ON LES INSERE DANS LA TABLE LISTE DE LA BASE etatcivil
include("connection_PDO.php");

$req=$conn->prepare('INSERT INTO liste(nom,prefecture,centretatcivil,registre,acte,date_acte,prenom,delivre_a,delivre_le,delivre_an,num_serie, naissance_jour_moi,naissance_an,naissance_heure,naissance_minuite, naissance_nom_prenom,naissance_lieu,naissance_sexe, pere_nom_prenom,pere_datenaisance,pere_lieunaissance,pere_profession,pere_villederesidence, mere_nom_prenom,mere_datenaisance,mere_lieunaissance,mere_profession, mere_villederesidenc, declaration_faite_par,declaration_recue_pa ) 
                                 VALUES(:nom,:prefecture,:centretatcivil,:registre,:acte,:date_acte,:prenom,:delivre_a,:delivre_le,:delivre_an,:num_serie, :naissance_jour_moi,:naissance_an,:naissance_heure,:naissance_minuite, :naissance_nom_prenom,:naissance_lieu,:naissance_sexe, :pere_nom_prenom,:pere_datenaisance,:pere_lieunaissance,:pere_profession,:pere_villederesidence, :mere_nom_prenom,:mere_datenaisance,:mere_lieunaissance,:mere_profession, :mere_villederesidenc, :declaration_faite_par,:declaration_recue_pa)');

$req->execute(array(
	'nom' => $nom,
	'prefecture' => $prefecture,
	'centretatcivil' => $centretatcivil,
	'registre' => $registre,
	'acte' => $acte,
	'date_acte' => $date_acte,
	
	'prenom' => $prenom,
	
	'delivre_a' => $delivre_a,
	'delivre_le' => $delivre_le,
	'delivre_an' => $delivre_an,
	'num_serie' => $num_serie,
	
	'naissance_jour_moi' => $naissance_jour_moi,
	'naissance_an' => $naissance_an,
	'naissance_heure' => $naissance_heure,
	'naissance_minuite' => $naissance_minuite,
	'naissance_nom_prenom' => $naissance_nom_prenom,
	'naissance_lieu' => $naissance_lieu,
	'naissance_sexe' => $naissance_sexe,
	
	'pere_nom_prenom' => $pere_nom_prenom,
	'pere_datenaisance' => $pere_datenaisance,
	'pere_lieunaissance' => $pere_lieunaissance,
	'pere_profession' => $pere_profession,
	'pere_villederesidence' => $pere_villederesidence,

	'mere_nom_prenom' => $mere_nom_prenom,
	'mere_datenaisance' => $mere_datenaisance,
	'mere_lieunaissance' => $mere_lieunaissance,
	'mere_profession' => $mere_profession,
	'mere_villederesidenc' => $mere_villederesidenc,
	
	'declaration_faite_par' => $declaration_faite_par,
	'declaration_recue_pa' => $declaration_recue_pa ));
	$req->closeCursor();
?>

