
		
		

		// SOLUTION AJAX POUR L'ACTIVATION  (LE CONTROLE) DE LA 5ème COLONNE
		       		// instance XMLHttpRequest  for all browsers
		function instanceXMLHttpRequest() {
                if (window.XMLHttpRequest) {
                     // code for IE7+, Firefox, Chrome, Opera, Safari
                     xmlhttp = new XMLHttpRequest();
                } else {
                     // code for IE6, IE5
                     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
		}
		
				// Activation des LIENS dans les tables affichées dans le slide de la page d'accueil
		function supprimer(str) { // accueil.php(include prefecture.php)
            if (str == "") { 
			     document.getElementById("panel").innerHTML = ""; return; 
			} else { 

				instanceXMLHttpRequest();
                xmlhttp.onreadystatechange = function() { if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { document.getElementById("panel").innerHTML = xmlhttp.responseText;}};
                //xmlhttp.open("GET","SERVEUR/accueil_supprimer_acte.php?delete_="+str,true);
				xmlhttp.open("GET","SERVEUR/supprimer.php",true);
                xmlhttp.send();
            }
        }
		

		
		function imprimer(str) { // accueil.php(include prefecture.php)
            if (str == "") { 
			     document.getElementById("panel").innerHTML = ""; return; 
			} else { 

				instanceXMLHttpRequest();
                xmlhttp.onreadystatechange = function() { if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { document.getElementById("panel").innerHTML = xmlhttp.responseText;}};
                //xmlhttp.open("GET","SERVEUR/accueil_imprimer_acte.php?print_="+str,true);
				xmlhttp.open("GET","SERVEUR/accueil_imprimer_acte.php",true);
                xmlhttp.send();
            }
        }
		

		