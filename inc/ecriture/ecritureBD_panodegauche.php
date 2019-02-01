<?php
 echo '
   <table class="tablegauche"  name="listes" > 
     <caption style="caption-side:top"> 
	     <font color="#FFFFFF">
		     <h3> UNION DES COMORES  </h3>
			 <h6> Unité-Solidarité-Développement  </h6>
			 <h4> MINISTERE DE L\'INTERIEUR  </h4>
		 </font>
		 <img src="img/armoirie.png"  />
	  </caption>
	  
     <tr><td> Pr&eacute;fecture:    </td> <td>  
	 
	 <select  name="prefecture"  onChange="changement(this)"  >
         <optgroup label="Ngazidja"> 
		 <option> </option>
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
		 <optgroup label="Anjouan">           
         <option>Mutsamudu </option>
		 <option>Ouani </option> 
         <option>Domoni </option>
		 <option>Mremani </option>
         <option>Sima </option>  
		 </optgroup>
		 
		 <optgroup label="Mayotte"  disabled>           
         <option>Dzaoudzi </option>
		 <option>Pamandzi </option> 
         <option>Mtsapere </option>
		 <option>Mtsamboro </option>
         <option>Mamoudzou </option>  
		 </optgroup>
     </select>
	 
	 
	 </td></tr><br><br>
	 <tr><td> </td><td><font color="##1D702D"> <b>Centre d\'Etat Civil:</b></font></td> <td> </td></tr>
     <tr><td> Centre    </td> <td> 
	 <select  name="centretatcivil">
         <option> </option>
     </select>
	 
	 </td></tr>
     <tr><td> Registre  </td> <td> <input type="text" name="registre"> </td></tr>
	 <tr><td> Acte N°  </td> <td> <input type="text" name="acte"  ></td></tr>
	 <tr><td> Du(date)  </td> <td> <input type="date" name="date_acte"  ></td></tr>
	 <tr><td></td> <td></td></tr>
	 
	 <tr><td> </td><td><font color="##1D702D"> <b>Naissance de:</b></font></td> <td> </td></tr>
	 <tr><td> Nom   </td> <td> <input type="text" name="nom"> </td></tr>
	 <tr><td> Pr&eacute;nom  </td> <td> <input type="text" name="prenom" ></td></tr><br><br>
	 <tr><td> </td><td><font color="##1D702D"> <b>Pour acte certifi&eacute; </b></font></td> <td> </td></tr>
	 <tr><td> D&eacute;livr&eacute; &agrave; </td> <td> <input type="text" name="delivre_a" ></td></tr>
	 <tr><td> Le  </td> <td> <input type="date" name="delivre_le" ></td></tr>
	 <tr><td> L\'an  </td> <td> <input type="text" name="delivre_an"> </td></tr>
	 <tr><td> S&eacute;rie N°:  </td> <td> <input type="text" name="num_serie" ></td></tr>
 </table>
  
';
 
?>
	 
        
		
     