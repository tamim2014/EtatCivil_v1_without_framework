<?php
/*
	try{$conn = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', ''); }
	catch(Exception $e){die('Erreur de connexion à la base de données: '.$e->getMessage());}
	
	$reponse = $conn->query('SELECT * FROM liste WHERE ID='.$id );
	$donnees = $reponse->fetch();
	
*/
session_start();
    $BD_serveur = "localhost";
    $BD_utilisateur = "root";
    $BD_motDePasse = "";// Ce mot de passe est enregistré dans la table "user" de la base "mysql" du serveur Mysql. Pour le modifier (en ligne de commande) aller dans la base mysql(table user): update user set Password="" where Host="localhost"; Puis verifier en faisant select User, Password, Host from user;
    $BD_base = "etatcivil";
	$message='';
	

	$db = mysqli_connect($BD_serveur,$BD_utilisateur,'',$BD_base)or die('Erreur de connection :'.mysqli_error());
	$db->set_charset("utf8");
   
 
  if(isset($_POST['pseudo_']))$login=$_POST['pseudo_'];
  if(isset($_POST['motdepasse_']))$mdp=$_POST['motdepasse_'];
 
	
	$message = 'Veuillez vous identifier dans les deux champs ci-dessus';
	// Le login est-il rempli ?
    if(empty($login)&& isset($_POST["envoie"]) ) {$message = 'Veuillez indiquer votre nom svp !';}
   // Le mot de passe est-il rempli ?
    if(empty($mdp) && isset($_POST["envoie"]) ){$message = '  Veuillez aussi indiquer,  votre mot de passe SVP !';}
	
    if (!empty($login)&&!empty($mdp)){
	  $sql="SELECT COUNT(*) 
	         FROM listeofficiers WHERE motdepasse = '" . mysqli_real_escape_string($db , $_POST['motdepasse_']) . "' AND pseudo = '" . mysqli_real_escape_string( $db , $_POST['pseudo_']) . "'";
	  $req=mysqli_query($db ,$sql) or die('Erreur SQl !<br>'.$sql.'<br>'.mysqli_error($db));
	 
	  $result = mysqli_fetch_row($req);
	    if ($result[0] == 0){$message= '  Connexion echou&eacute;e, veuillez donc r&eacute;essayer  SVP! '; // a revoir
		}else{
		     //$_SESSION["pseudo"] = $login;// --- enregistrement en session de l'utilisateur
		     header("Location: accueil.php");// --- redirection vers 
		}
	}

?>