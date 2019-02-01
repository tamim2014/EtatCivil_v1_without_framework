<?php

// set in SERVEUR/colonne_afficher_naissance.php  , get in SERVEUR/colonne_suppprimer_acte.php
$_SESSION["v"]= $p;
// set in SERVEUR/ecritureBD_insertionSQL.php  , get in ecritureBD.php
$_SESSION["showInLive"]=$acte;// Pour le bouton "Afficher l'acte" // $acte=$_POST['acte'];
?>
