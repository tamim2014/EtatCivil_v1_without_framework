	 // Solution jQuery pour la modification(affichage) de la 5ème colonne du slide : CommandePanel  page d'acceuil (include prefecture.php)
	 // Et l'affichage par ordre alphabetique des noms des actes d'etats civil
            $(document).ready(function(){
                 $("#flip").click(function(){ $("#panel").slideToggle("slow");}); //Déroulé du slide changement de prefecture dans le comboBox
				 
				 $(' a#rectif, a#zima , a#print_ , a#trier ').click(function(e){ // Le bouton "Réctifier" est à l'interieur de ce lien
                  $('#panel').load($(this).attr('href'));
                  e.preventDefault();//Très important.Sinon redirection dans une autre page
                 });
                 //$('.tab a:first').trigger('click'); // Affiche la page1 par défaut
            });
				
	// Solution AJAX pour la modifiaction(affichage) de la 5ème colonne du slide : page d'acceuil (include prefecture.php)
        /****************************
		
						
		// Affichage des tables dans le slide de la page d'accueil

		function showSupprimer(str) { // accueil.php(include prefecture.php)
            if (str == "") { 
			     document.getElementById("panel").innerHTML = ""; return; 
			} else { 

				instanceXMLHttpRequest();
                xmlhttp.onreadystatechange = function() { if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { document.getElementById("panel").innerHTML = xmlhttp.responseText;}};
                //xmlhttp.open("GET","SERVEUR/accueil_imprimer_acte.php?print_="+str,true);
				xmlhttp.open("GET","SERVEUR/colonne_supprimer_acte.php",true);
                xmlhttp.send();
            }
        }
		
		function showRectifier(str) { // accueil.php(include prefecture.php)
            if (str == "") { 
			     document.getElementById("panel").innerHTML = ""; return; 
			} else { 

				instanceXMLHttpRequest();
                xmlhttp.onreadystatechange = function() { if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { document.getElementById("panel").innerHTML = xmlhttp.responseText;}};
                //xmlhttp.open("GET","SERVEUR/accueil_imprimer_acte.php?print_="+str,true);
				xmlhttp.open("GET","SERVEUR/colonne_rectifier_acte.php",true);
                xmlhttp.send();
            }
        }
		
		function showImprimer(str) { // accueil.php(include prefecture.php)
            if (str == "") { 
			     document.getElementById("panel").innerHTML = ""; return; 
			} else { 

				instanceXMLHttpRequest();
                xmlhttp.onreadystatechange = function() { if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { document.getElementById("panel").innerHTML = xmlhttp.responseText;}};
                //xmlhttp.open("GET","SERVEUR/accueil_imprimer_acte.php?print_="+str,true);
				xmlhttp.open("GET","SERVEUR/colonne_imprimer_acte.php",true);
                xmlhttp.send();
            }
        }
		******************************************/
		
		


		