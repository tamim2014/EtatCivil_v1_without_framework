
	<?php
  // clé=>valeur      c'est "valeur"  qui sera affiché dans les items de la liste déroulante
  $arrayNgazidja = array( 'Prefecture de' => 'Préfecture de:','Moroni-Bambao' => 'Moroni-Bambao', 'Hambou' => 'Hambou', 'Mbadjini-Ouest' => 'Mbadjini-Ouest', 'Mbadjini-Est' => 'Mbadjini-Est', 'Oichili-Dimani' => 'Oichili-Dimani','Hamahamet-Mboinkou ' => 'Hamahamet-Mboinkou ', 'Mitsamiouli-Mboude' => 'Mitsamiouli-Mboudé','Itsandra-Hamanvou' => 'Itsandra-Hamanvou' );
  $arrayMoheli = array( 'Fomboni' => 'Fomboni', 'Nioumachoi' => 'Nioumachoi', 'Djando' => 'Djando' );  
  $arrayAnjouan = array( 'Mutsamudu' => 'Mutsamudu', 'Ouani' => 'Ouani','Domoni' => 'Domoni','Mremani' => 'Mrémani','Sima' => 'Sima');  
  $arrayMayotte = array( 'Dzaoudzi' => 'Dzaoudzi', 'Mtsapere' => 'Mtsapere','Mtsamboro' => 'Mtsamboro','Mamoudzou' => 'Mamoudzou','Pamandzi' => 'Pamandzi');  
  
  $selected = ''; // Variable qui ajoutera l'attribut selected de la liste déroulante
  //Appel de la page afficher_naissance.php par la f° JavaScript onchange(nomdelaprefectured du select)  
  echo '<select   onchange=captureCombo(this.value); > <optgroup label="Ngazidja"> ',"\n"; // this.value designe le bavounaissance
  foreach($arrayNgazidja as $valeurBavou => $nomBavou)  // Parcours du tableau
  {  
    if($nomBavou == 'Pr&eacute;fecture de:') { $selected = ' selected="selected"'; } // valeur paedéfaut   
    echo "\t",'<option value="', $valeurBavou ,'"', $selected ,'>', $nomBavou ,'</option>',"\n"; // Affichage de la ligne   
    $selected=''; // Remise à zéro de $selected
  }
  echo '</optgroup>',"\n";
  
  
  echo ' <optgroup label="Moheli"> ',"n";
  foreach($arrayMoheli as $valeurBavou => $nomBavou)
  {   echo "\t",'<option value="', $valeurBavou ,'" >', $nomBavou ,'</option>',"\n";  $selected=''; }
  echo '</optgroup>',"\n";
  
  
  echo ' <optgroup label="Anjouan"> ',"n";
  foreach($arrayAnjouan as $valeurBavou => $nomBavou)
  {  echo "\t",'<option value="', $valeurBavou ,'">', $nomBavou ,'</option>',"\n"; $selected=''; }
  echo '</optgroup>',"\n";
  
  echo ' <optgroup label="Mayotte" disabled> ',"n";
  foreach($arrayMayotte as $valeurBavou => $nomBavou)
  {  echo "\t",'<option value="', $valeurBavou ,'">', $nomBavou ,'</option>',"\n"; $selected=''; }
  echo '</optgroup>',"\n";
  
  echo '</select>    ',"\n";
  echo '<br>';
?>