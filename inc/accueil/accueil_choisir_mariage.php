<?php
  // Définition du tableau de couleurs
  $arrayNgazidja = array(
 
    'Pr&eacute;fecture_de:' => 'Pr&eacute;fecture de:',
    'Moroni-Bambao_' => 'Moroni-Bambao',
    'Hambou_' => 'Hambou',
    'Mbadjini-Ouest_' => 'Mbadjini-Ouest',
    'Mbadjini-Est_' => 'Mbadjini-Est',
    'Oichili-Dimani_' => 'Oichili-Dimani',
    'Hamahamet-Mboinkou _' => 'Hamahamet-Mboinkou ',
    'Mitsamiouli-Mboude_' => 'Mitsamiouli-Mboude',
	'Itsandra-Hamanvou_' => 'Itsandra-Hamanvou'
  );
  $arrayMoheli = array(
 
    'Fomboni_' => 'Fomboni',
    'Nioumachoi_' => 'Nioumachoi',
    'Djando_' => 'Djando'
  );
  
  $arrayAnjouan = array(
 
    'Mutsamudu_' => 'Mutsamudu',
    'Ouani_' => 'Ouani',
    'Domoni_' => 'Domoni',
    'Mremani_' => 'Mremani',
    'Sima_' => 'Sima'
  );
  $arrayMayotte = array( 
   'Dzaoudzi' => 'Dzaoudzi', 
   'Mtsapere' => 'Mtsapere',
   'Mtsamboro' => 'Mtsamboro',
   'Mamoudzou' => 'Mamoudzou',
   'Pamandzi' => 'Pamandzi'
   );  
  
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';
 
  // Parcours du tableau
  echo '<select name="bavouMariage"> <optgroup label="Ngazidja"> ',"n";
  foreach($arrayNgazidja as $valeurBavou => $nomBavou)
  {
    // Test de la couleur
    if($nomBavou === 'Pr&eacute;fecture de:')
    {
      $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $valeurBavou ,'"', $selected ,'>', $nomBavou ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</optgroup>',"\n";
  echo ' <optgroup label="Moheli"  > ',"n";
  foreach($arrayMoheli as $valeurBavou => $nomBavou)
  {

    // Affichage de la ligne
    echo "\t",'<option value="', $valeurBavou ,'" >', $nomBavou ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</optgroup>',"\n";
  
  echo ' <optgroup label="Anjouan" > ',"n";
  foreach($arrayAnjouan as $valeurBavou => $nomBavou)
  {

    // Affichage de la ligne
    echo "\t",'<option value="', $valeurBavou ,'">', $nomBavou ,'</option>',"\n";
    // Remise à zéro de $selected-
    $selected='';
  }
  echo '</optgroup>',"\n";
  
  echo ' <optgroup label="Mayotte" disabled> ',"n";
  foreach($arrayMayotte as $valeurBavou => $nomBavou)
  {  echo "\t",'<option value="', $valeurBavou ,'">', $nomBavou ,'</option>',"\n"; $selected=''; }
  echo '</optgroup>',"\n";
  
  
  
  echo '</select>    ',"\n";
  echo '<br>';

?>


